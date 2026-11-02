import re
import socket
from dataclasses import dataclass
from typing import Optional, List, Set, Tuple
import httpx
from .config import HUNTER_API_KEY

EMAIL_REGEX = re.compile(r"[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+")

IGNORE_EMAIL_EXTENSIONS = {
    ".png", ".jpg", ".jpeg", ".webp", ".gif", ".svg", ".css", ".js", ".woff", ".woff2"
}

ROLE_EMAILS = {"info", "contact", "support", "sales", "office", "hello", "press", "jobs"}

TECHNICAL_TITLES = [
    "cto", "chief technology officer", "technical director", "head of engineering",
    "lead developer", "software architect", "tech lead", "founder", "co-founder",
    "managing director", "owner", "directeur", "eigenaar"
]

@dataclass
class EnrichmentResult:
    email: str
    full_name: Optional[str] = None
    first_name: Optional[str] = None
    title: Optional[str] = None
    source: str = "web_scrape"
    notes: Optional[str] = None

def is_valid_email(email: str, domain: str) -> bool:
    email = email.lower().strip()
    if any(email.endswith(ext) for ext in IGNORE_EMAIL_EXTENSIONS):
        return False
    if "sentry" in email or "wixpress" in email or "example" in email or "wordpress" in email:
        return False
    # Check that domain is related or has basic valid format
    parts = email.split("@")
    if len(parts) != 2:
        return False
    user, host = parts
    if len(user) < 2 or len(host) < 4 or "." not in host:
        return False
    return True

def extract_first_name(name_or_user: str) -> str:
    cleaned = re.sub(r"[._-]", " ", name_or_user).strip()
    parts = cleaned.split()
    if parts:
        return parts[0].capitalize()
    return ""

def query_hunter_api(domain: str) -> Optional[EnrichmentResult]:
    if not HUNTER_API_KEY:
        return None
    try:
        url = f"https://api.hunter.io/v2/domain-search?domain={domain}&api_key={HUNTER_API_KEY}"
        with httpx.Client(timeout=8.0) as client:
            resp = client.get(url)
            if resp.status_code == 200:
                data = resp.json().get("data", {})
                emails = data.get("emails", [])
                if not emails:
                    return None
                
                # Check for senior tech people first
                for item in emails:
                    pos = (item.get("position") or "").lower()
                    if any(t in pos for t in TECHNICAL_TITLES):
                        return EnrichmentResult(
                            email=item["value"],
                            full_name=f"{item.get('first_name', '')} {item.get('last_name', '')}".strip() or None,
                            first_name=item.get("first_name") or extract_first_name(item["value"].split("@")[0]),
                            title=item.get("position"),
                            source="hunter_api",
                            notes=f"Confidence: {item.get('confidence', 0)}%"
                        )
                
                # Fallback to highest confidence email
                best = max(emails, key=lambda x: x.get("confidence", 0))
                return EnrichmentResult(
                    email=best["value"],
                    full_name=f"{best.get('first_name', '')} {best.get('last_name', '')}".strip() or None,
                    first_name=best.get("first_name") or extract_first_name(best["value"].split("@")[0]),
                    title=best.get("position"),
                    source="hunter_api",
                    notes=f"Confidence: {best.get('confidence', 0)}%"
                )
    except Exception:
        pass
    return None

def scrape_domain_pages(domain: str) -> List[Tuple[str, Optional[str]]]:
    """Scrapes common contact/about paths for email matches."""
    paths = ["", "/contact", "/contact-us", "/about", "/about-us", "/team", "/over-ons", "/impressum"]
    found_emails: List[Tuple[str, Optional[str]]] = []
    seen: Set[str] = set()

    headers = {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
    }

    with httpx.Client(timeout=6.0, follow_redirects=True, headers=headers, verify=False) as client:
        for path in paths:
            target_url = f"https://{domain}{path}"
            try:
                resp = client.get(target_url)
                if resp.status_code != 200:
                    continue
                text = resp.text
                matches = EMAIL_REGEX.findall(text)
                for email in matches:
                    clean_email = email.lower().strip()
                    if clean_email not in seen and is_valid_email(clean_email, domain):
                        seen.add(clean_email)
                        # Check context around the email for potential titles
                        title = None
                        idx = text.lower().find(clean_email)
                        if idx != -1:
                            snippet = text[max(0, idx - 150): min(len(text), idx + 150)].lower()
                            for t in TECHNICAL_TITLES:
                                if t in snippet:
                                    title = t.upper()
                                    break
                        found_emails.append((clean_email, title))
            except Exception:
                continue

    return found_emails

def enrich_domain(domain: str, company_name: Optional[str] = None) -> Optional[EnrichmentResult]:
    domain_clean = domain.strip().lower().replace("http://", "").replace("https://", "").strip("/")
    
    # 1. Check Hunter API if configured
    hunter_res = query_hunter_api(domain_clean)
    if hunter_res:
        return hunter_res

    # 2. Scrape website pages
    scraped = scrape_domain_pages(domain_clean)
    if scraped:
        # Prioritize personal emails matching domain
        domain_emails = [pair for pair in scraped if domain_clean in pair[0]]
        pool = domain_emails if domain_emails else scraped

        # Filter non-role emails
        personal = [pair for pair in pool if pair[0].split("@")[0] not in ROLE_EMAILS]
        if personal:
            best_email, title = personal[0]
            user_part = best_email.split("@")[0]
            first_name = extract_first_name(user_part)
            return EnrichmentResult(
                email=best_email,
                first_name=first_name,
                title=title or "Technical Lead",
                source="web_scrape",
                notes="Personal inbox found via website crawl"
            )
        
        # Fallback to role email
        role_email, title = pool[0]
        return EnrichmentResult(
            email=role_email,
            first_name=company_name or "Team",
            title=title or "Technical Team",
            source="web_scrape",
            notes="Role inbox found via website crawl"
        )

    # 3. Last-resort fallback if domain resolves
    try:
        socket.gethostbyname(domain_clean)
        return EnrichmentResult(
            email=f"info@{domain_clean}",
            first_name=company_name or "Team",
            title="Technical Team",
            source="heuristic_fallback",
            notes="Domain resolves; defaulted to info@ role address"
        )
    except Exception:
        return None
