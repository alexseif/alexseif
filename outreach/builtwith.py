import json
from typing import Dict, List, Optional, Any
import httpx

from .config import BUILTWITH_API_KEY
from .db import get_cached_builtwith, set_cached_builtwith
from .technographics import fingerprint_domain

BUILTWITH_MCP_URL = "https://api.builtwith.com/mcp"
BUILTWITH_REST_URL = "https://api.builtwith.com/v21/api.json"
BUILTWITH_REGISTRY_URL = "https://builtwith.com/mcp-registry"

def parse_builtwith_payload(domain: str, raw_data: Dict[str, Any]) -> Dict[str, Any]:
    results = raw_data.get("Results", [])
    if not results:
        return {
            "domain": domain,
            "is_php": False,
            "is_nodejs": False,
            "platform": "Unknown",
            "server": "Unknown",
            "confidence": 0,
            "source": "builtwith_api",
            "technologies": [],
        }

    first_res = results[0]
    paths = first_res.get("Result", {}).get("Paths", [])
    all_techs = []
    is_php = False
    is_nodejs = False
    platform = "Unknown"
    server = "Unknown"

    for p in paths:
        for t in p.get("Technologies", []):
            name = t.get("Name", "")
            categories = t.get("Categories", [])
            all_techs.append(name)
            name_lower = name.lower()

            if "php" in name_lower or "programming language" in [c.lower() for c in categories] and "php" in name_lower:
                is_php = True
            if "node.js" in name_lower or "express" in name_lower:
                is_nodejs = True
            if "wordpress" in name_lower:
                platform = "WordPress"
                is_php = True
            if "woocommerce" in name_lower:
                platform = "WooCommerce / WordPress"
                is_php = True
            if "drupal" in name_lower:
                platform = "Drupal"
                is_php = True
            if "magento" in name_lower or "adobe commerce" in name_lower:
                platform = "Magento / Adobe Commerce"
                is_php = True
            if "laravel" in name_lower:
                platform = "Laravel"
                is_php = True
            if "nginx" in name_lower:
                server = "Nginx"
            elif "apache" in name_lower and server == "Unknown":
                server = "Apache"
            elif "litespeed" in name_lower and server == "Unknown":
                server = "LiteSpeed"

    return {
        "domain": domain,
        "is_php": is_php,
        "is_nodejs": is_nodejs,
        "platform": platform,
        "server": server,
        "confidence": 95 if is_php or is_nodejs else 50,
        "source": "builtwith_api",
        "technologies": all_techs[:15],
    }

def inspect_domain(domain: str, use_cache: bool = True) -> Dict[str, Any]:
    clean_domain = domain.strip().lower().replace("http://", "").replace("https://", "").strip("/")

    # 1. Check local cache
    if use_cache:
        cached = get_cached_builtwith(clean_domain)
        if cached:
            cached["from_cache"] = True
            return cached

    # 2. Check BuiltWith API if key configured
    if BUILTWITH_API_KEY:
        try:
            params = {"KEY": BUILTWITH_API_KEY, "LOOKUP": clean_domain}
            with httpx.Client(timeout=8.0) as client:
                resp = client.get(BUILTWITH_REST_URL, params=params)
                if resp.status_code == 200:
                    parsed = parse_builtwith_payload(clean_domain, resp.json())
                    set_cached_builtwith(clean_domain, parsed)
                    return parsed
        except Exception:
            pass

    # 3. Fallback to free passive technographic fingerprinter
    profile = fingerprint_domain(clean_domain)
    result = {
        "domain": clean_domain,
        "is_php": profile.is_php,
        "is_nodejs": profile.is_nodejs,
        "platform": profile.platform,
        "server": profile.server,
        "confidence": profile.confidence,
        "source": "passive_fingerprint",
        "signals": profile.signals,
    }
    set_cached_builtwith(clean_domain, result)
    return result

def query_builtwith_mcp(method: str, params: Dict[str, Any]) -> Optional[Dict[str, Any]]:
    if not BUILTWITH_API_KEY:
        return None
    try:
        headers = {
            "Authorization": f"Bearer {BUILTWITH_API_KEY}",
            "Content-Type": "application/json",
        }
        payload = {
            "jsonrpc": "2.0",
            "method": method,
            "params": params,
            "id": 1,
        }
        with httpx.Client(timeout=10.0) as client:
            resp = client.post(BUILTWITH_MCP_URL, json=payload, headers=headers)
            if resp.status_code == 200:
                return resp.json()
    except Exception:
        pass
    return None

def search_mcp_registry(keyword: str) -> List[Dict[str, Any]]:
    try:
        with httpx.Client(timeout=6.0, follow_redirects=True) as client:
            resp = client.get(f"{BUILTWITH_REGISTRY_URL}?q={keyword}")
            if resp.status_code == 200:
                return [{"query": keyword, "status": "Registry available", "url": BUILTWITH_REGISTRY_URL}]
    except Exception:
        pass
    return []
