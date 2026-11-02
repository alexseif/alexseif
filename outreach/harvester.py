import argparse
import csv
import re
import socket
from pathlib import Path
from typing import Dict, List, Set, Optional, Tuple
from urllib.parse import urlparse
import httpx

from .db import init_db, upsert_target, get_connection

PRESET_TARGETS: Dict[str, List[Tuple[str, str, str]]] = {
    "nl": [
        ("level-level.com", "Level Level", "Rotterdam, Netherlands"),
        ("van-ons.nl", "Van Ons", "Amsterdam, Netherlands"),
        ("grrr.nl", "GRRR Agency", "Amsterdam, Netherlands"),
        ("stuurlui.nl", "Stuurlui", "Utrecht, Netherlands"),
        ("socialbrothers.nl", "Social Brothers", "Utrecht, Netherlands"),
        ("hoppinger.com", "Hoppinger", "Rotterdam, Netherlands"),
        ("tallest.nl", "Tallest", "Eindhoven, Netherlands"),
        ("burst-digital.com", "Burst", "Rotterdam, Netherlands"),
        ("e-sites.nl", "E-sites", "Breda, Netherlands"),
        ("freshheads.com", "Freshheads", "Tilburg, Netherlands"),
        ("de-voorhoede.nl", "De Voorhoede", "Amsterdam, Netherlands"),
        ("flatlineagency.com", "Flatline Agency", "Amsterdam, Netherlands"),
        ("cleverstrategy.nl", "Clever Strategy", "Harderwijk, Netherlands"),
        ("marsmedia.nl", "Mars Media", "Amsterdam, Netherlands"),
        ("miyagami.com", "Miyagami", "Amsterdam, Netherlands"),
    ],
    "de": [
        ("byte5.de", "byte5 digital media", "Frankfurt, Germany"),
        ("ingoldsolutions.com", "Ingold Solutions", "Berlin, Germany"),
        ("webfactory.de", "Webfactory GmbH", "Bonn, Germany"),
        ("exponetly.com", "Exponetly", "Berlin, Germany"),
        ("kulimo.com", "KULIMO", "Berlin, Germany"),
    ],
    "uk": [
        ("wholegraindigital.com", "Wholegrain Digital", "London, UK"),
        ("weareyellowball.com", "Yellowball", "London, UK"),
        ("mooveagency.com", "Moove Agency", "London, UK"),
    ],
}

DIRECTORY_BLACKLIST = {
    "google.com", "google.nl", "google.co.uk", "google.de",
    "duckduckgo.com", "bing.com", "yahoo.com",
    "linkedin.com", "facebook.com", "twitter.com", "instagram.com", "youtube.com",
    "github.com", "clutch.co", "sortlist.com", "sortlist.nl", "themanifest.com",
    "wikipedia.org", "medium.com", "reddit.com", "wordpress.org", "wordpress.com",
    "laravel.com", "symfony.com", "php.net", "hostingradar.io", "techbehemoths.com",
    "glassdoor.com", "indeed.com", "trustpilot.com", "w3schools.com"
}

def clean_domain(raw_url: str) -> Optional[str]:
    url = raw_url.strip()
    if not url.startswith("http://") and not url.startswith("https://"):
        url = "https://" + url
    try:
        parsed = urlparse(url)
        host = parsed.netloc.lower()
        if host.startswith("www."):
            host = host[4:]
        host = host.split(":")[0]
        if "." not in host or len(host) < 4:
            return None
        if any(host.endswith(b) or host == b for b in DIRECTORY_BLACKLIST):
            return None
        return host
    except Exception:
        return None

def verify_dns(domain: str) -> bool:
    try:
        socket.gethostbyname(domain)
        return True
    except Exception:
        return False

def harvest_presets(regions: List[str]) -> List[Tuple[str, str, str]]:
    selected: List[Tuple[str, str, str]] = []
    seen: Set[str] = set()

    for r in regions:
        if r in PRESET_TARGETS:
            for domain, name, location in PRESET_TARGETS[r]:
                if domain not in seen:
                    seen.add(domain)
                    selected.append((domain, name, location))
    return selected

def export_to_csv(targets: List[Tuple[str, str, str]], output_path: Path) -> int:
    existing_domains: Set[str] = set()
    if output_path.exists():
        with open(output_path, "r", encoding="utf-8") as f:
            reader = csv.DictReader(f)
            for row in reader:
                d = row.get("domain") or row.get("Domain")
                if d:
                    existing_domains.add(d.strip().lower())

    write_header = not output_path.exists() or output_path.stat().st_size == 0
    added = 0

    with open(output_path, "a", encoding="utf-8", newline="") as f:
        writer = csv.writer(f)
        if write_header:
            writer.writerow(["domain", "company", "contact_name", "title", "email"])

        for domain, company, _ in targets:
            clean = domain.strip().lower()
            if clean not in existing_domains and verify_dns(clean):
                writer.writerow([clean, company, "", "", ""])
                existing_domains.add(clean)
                added += 1

    return added

def import_to_db(targets: List[Tuple[str, str, str]]) -> int:
    init_db()
    added = 0
    for domain, company, _ in targets:
        clean = domain.strip().lower()
        if verify_dns(clean):
            upsert_target(domain=clean, company_name=company, source="harvester")
            added += 1
    return added
