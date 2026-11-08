import re
from dataclasses import dataclass, asdict
from typing import Dict, List, Optional, Any
import httpx

@dataclass
class TechnographicProfile:
    domain: str
    is_php: bool
    is_nodejs: bool
    platform: str
    server: str
    confidence: int
    signals: List[str]

    def to_dict(self) -> Dict[str, Any]:
        return asdict(self)

def fingerprint_domain(domain: str) -> TechnographicProfile:
    clean_domain = domain.strip().lower().replace("http://", "").replace("https://", "").strip("/")
    target_url = f"https://{clean_domain}"

    headers = {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
        "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
    }

    signals: List[str] = []
    is_php = False
    is_nodejs = False
    platform = "Unknown"
    server = "Unknown"
    confidence = 0

    response_text = ""
    resp_headers: Dict[str, str] = {}
    cookies_str = ""

    try:
        with httpx.Client(timeout=12.0, follow_redirects=True, headers=headers, verify=False) as client:
            resp = client.get(target_url)
            response_text = resp.text
            resp_headers = {k.lower(): v for k, v in resp.headers.items()}
            cookies_str = " ".join([f"{c.name}={c.value}" for c in resp.cookies.jar])
    except Exception as e:
        # Retry with HTTP fallback if HTTPS fails
        try:
            with httpx.Client(timeout=10.0, follow_redirects=True, headers=headers, verify=False) as client:
                resp = client.get(f"http://{clean_domain}")
                response_text = resp.text
                resp_headers = {k.lower(): v for k, v in resp.headers.items()}
                cookies_str = " ".join([f"{c.name}={c.value}" for c in resp.cookies.jar])
        except Exception:
            return TechnographicProfile(
                domain=clean_domain,
                is_php=False,
                is_nodejs=False,
                platform="Unreachable",
                server="Unknown",
                confidence=0,
                signals=["Domain unreachable over HTTP/HTTPS"]
            )

    # 1. Inspect Server header
    server_hdr = resp_headers.get("server", "").lower()
    if "nginx" in server_hdr:
        server = "Nginx"
        signals.append("Server header: Nginx")
    elif "apache" in server_hdr:
        server = "Apache"
        signals.append("Server header: Apache")
    elif "litespeed" in server_hdr:
        server = "LiteSpeed"
        signals.append("Server header: LiteSpeed")
    elif "cloudflare" in server_hdr:
        server = "Cloudflare Proxy"
        signals.append("Server header: Cloudflare")
    elif server_hdr:
        server = server_hdr.split("/")[0].capitalize()

    # 2. Inspect X-Powered-By header
    x_powered = resp_headers.get("x-powered-by", "").lower()
    if "php" in x_powered:
        is_php = True
        confidence += 40
        signals.append(f"X-Powered-By: {resp_headers.get('x-powered-by')}")
    elif "express" in x_powered or "next.js" in x_powered:
        is_nodejs = True
        confidence += 40
        signals.append(f"X-Powered-By: {resp_headers.get('x-powered-by')}")

    # 3. Inspect Link header for WordPress REST API
    link_hdr = resp_headers.get("link", "").lower()
    if "wp-json" in link_hdr or "api.w.org" in link_hdr:
        is_php = True
        platform = "WordPress"
        confidence += 50
        signals.append("WordPress REST API Link header")

    # 4. Inspect Cookies
    if "phpsessid" in cookies_str.lower():
        is_php = True
        confidence += 30
        signals.append("PHPSESSID cookie")
    if "wordpress_logged_in" in cookies_str.lower() or "wp-settings" in cookies_str.lower():
        is_php = True
        platform = "WordPress"
        confidence += 40
        signals.append("WordPress session cookies")
    if "laravel_session" in cookies_str.lower() or "xsrf-token" in cookies_str.lower():
        is_php = True
        platform = "Laravel"
        confidence += 40
        signals.append("Laravel session cookie")

    # 5. HTML Markup Analysis
    lower_html = response_text.lower()

    # WordPress & WooCommerce
    has_wp_content = "/wp-content/" in lower_html or "/wp-includes/" in lower_html
    has_wp_meta = 'name="generator" content="wordpress' in lower_html
    has_woocommerce = "woocommerce" in lower_html or "wc-ajax=" in lower_html

    if has_woocommerce:
        is_php = True
        platform = "WooCommerce / WordPress"
        confidence = max(confidence, 90)
        signals.append("WooCommerce assets detected in HTML")
    elif has_wp_content or has_wp_meta:
        is_php = True
        platform = "WordPress"
        confidence = max(confidence, 85)
        signals.append("WordPress wp-content/wp-includes assets detected")

    # Drupal
    if "drupal.settings" in lower_html or "/sites/default/files/" in lower_html or 'name="generator" content="drupal' in lower_html:
        is_php = True
        platform = "Drupal"
        confidence = max(confidence, 85)
        signals.append("Drupal settings / asset paths detected")

    # Magento / Adobe Commerce
    if "mage.cookies" in lower_html or "/static/frontend/" in lower_html or "text/x-magento-init" in lower_html:
        is_php = True
        platform = "Magento / Adobe Commerce"
        confidence = max(confidence, 85)
        signals.append("Magento initialization scripts detected")

    # Laravel / Symfony
    if 'name="csrf-token"' in lower_html or 'name="_token"' in lower_html:
        if not is_php:
            is_php = True
            confidence += 20
        if platform == "Unknown":
            platform = "Laravel / PHP Framework"
            signals.append("CSRF token structure matches PHP framework")

    # Next.js / Node.js
    if "__next_data__" in lower_html or "_next/static/" in lower_html:
        is_nodejs = True
        if platform == "Unknown":
            platform = "Next.js / Node.js"
            confidence = max(confidence, 85)
            signals.append("Next.js runtime bundle detected")

    # Generic PHP indicator
    if not is_php and (".php" in lower_html or "php" in lower_html):
        match = re.search(r"/[a-zA-Z0-9_-]+\.php", lower_html)
        if match:
            is_php = True
            if platform == "Unknown":
                platform = "Custom PHP"
                confidence += 30
            signals.append(f"PHP endpoint reference: {match.group(0)}")

    if is_php and platform == "Unknown":
        platform = "Custom PHP"

    return TechnographicProfile(
        domain=clean_domain,
        is_php=is_php,
        is_nodejs=is_nodejs,
        platform=platform,
        server=server,
        confidence=min(100, confidence),
        signals=signals,
    )
