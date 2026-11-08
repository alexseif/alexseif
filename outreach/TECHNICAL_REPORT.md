# Systems Architecture & Technical Implementation Report
**Multi-Track Automated Incident Outreach & Technographics Engine**
**Author:** Alex Seif (Software Architect)  
**Date:** November 2026  
**Status:** Completed & Production Verified  

---

## 1. Executive Technical Summary

An automated, self-contained outbound intelligence and delivery engine was designed, implemented, and verified to conduct direct technical advisory outreach across three distinct tracks:
1. **Track 1 (Agencies):** Technical directors and CTOs at web development agencies and MSPs managing multi-client fleets across the Netherlands, Germany, and the United Kingdom.
2. **Track 2 (Direct Clients):** Business owners, operations leads, and technical stakeholders at Dutch commercial entities, e-commerce stores, publishers, and institutions operating directly on WordPress, WooCommerce, and Drupal stacks.
3. **Track 3 (Partners):** Leadership and technical directors at historical outsourcing collaborators and delivery partners (iSoft, Nile Tech, MeemDev) using personalized, relationship-aware advisory templates.

The pipeline addresses two concurrent engine-level Remote Code Execution (RCE) vectors circulating in the wild:
- **PHP Core (php2shell // CVE-2026-109618 & CVE-2026-109619):** Stale memory allocators and out-of-memory request corruption in default PHP-FPM worker pools.
- **Node.js (Node2Shell // CVE-2026-111497):** Critical out-of-bounds write and buffer overflow in the Brotli decoder (`c/dec/decode.c` via `node:zlib`) impacting Node.js 22.x, 24.x, and 26.x.

The engine automates domain harvesting, DNS socket verification, zero-cost passive technographic fingerprinter analysis, BuiltWith MCP/REST bridging, contact discovery, template rendering, and rate-limited transmission via Brevo SMTP relay while logging all audit events to an SQLite database.

---

## 2. Multi-Track System Architecture

```mermaid
flowchart TD
    A["Target Inputs: Harvester (Agencies) / CSV (Direct Clients)"] -->|DNS Socket Verification| B["SQLite Tracking Store (outreach.db)"]
    B -->|Track Tagging: agency vs direct_client| C["Technographic Fingerprinter (technographics.py)"]
    C -->|Header, Cookie, and DOM Heuristics| D["BuiltWith MCP / REST Bridge (builtwith.py)"]
    D -->|Persist Platform, Server & Confidence| B
    B -->|Fetch 'imported' Targets| E["Contact Discovery & Scraper (enricher.py)"]
    E -->|Web Crawl: /contact, /klantenservice, /privacy, /team| F["Role Mailbox & Humanized Greeting Sanitizer"]
    F -->|Update Target to 'ready'| B
    B -->|Fetch 'ready' Targets by Track| G["Multi-Track Template Dispatcher (sender.py)"]
    G -->|agency_v1 or direct_client_v1| H["Dynamic UTM Attribution Builder"]
    H -->|Pacing Jitter: 60-90s Delay| I["Brevo SMTP Relay (Port 587 TLS)"]
    I -->|Deliver to Agency & Client Inboxes| J["Target Inboxes (NL, DE, UK)"]
    J -->|Direct Inbound Inquiries (Reply-To)| K["alex.seif@gmail.com"]
    G -->|Audit Log: Template, UTM, Status| B
    B -->|Export CSV Reports| L["campaign_report.csv & campaign_report_clients.csv"]
```

---

## 3. Core Module Specifications

### 3.1 Database & Multi-Track State Management (`outreach/db.py`)
State tracking is handled via a local SQLite database (`outreach/outreach.db`) ensuring complete idempotency, zero duplicate contacts, and persistent opt-out governance:

```sql
CREATE TABLE IF NOT EXISTS targets (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    domain TEXT UNIQUE NOT NULL,
    company_name TEXT,
    track TEXT NOT NULL DEFAULT 'agency', -- agency, direct_client, partner
    detected_platform TEXT,
    detected_server TEXT,
    tech_confidence INTEGER DEFAULT 0,
    status TEXT NOT NULL DEFAULT 'imported', -- imported, ready, sent, skipped, failed
    contact_name TEXT,
    contact_first_name TEXT,
    contact_title TEXT,
    contact_email TEXT,
    source TEXT DEFAULT 'manual',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    do_not_contact INTEGER DEFAULT 0,
    do_not_contact_at TIMESTAMP,
    do_not_contact_reason TEXT
);

CREATE TABLE IF NOT EXISTS dispatch_logs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    target_id INTEGER NOT NULL,
    recipient_email TEXT NOT NULL,
    subject TEXT NOT NULL,
    body TEXT NOT NULL,
    provider TEXT NOT NULL,
    template_slug TEXT DEFAULT 'v1',
    utm_url TEXT,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status TEXT NOT NULL, -- success, failed, dry_run
    error_message TEXT,
    FOREIGN KEY(target_id) REFERENCES targets(id)
);
```

### 3.2 Opt-Out Controls & Compliance Governance
To support international and Dutch spam compliance regulations (ACM / GDPR), the platform enforces strict opt-out controls:
* **Schema Attributes**: `do_not_contact`, `do_not_contact_at`, and `do_not_contact_reason` persist opt-out events with complete audit trails.
* **Query Exclusion**: `get_targets(include_opted_out=False)` filters out all opted-out domains from candidate and dispatch queues by default.
* **Defensive Stop in Dispatcher**: `dispatch_target()` inspects the opt-out flag prior to network rendering and aborts immediately if flagged.
* **CLI Subcommand**: `python -m outreach.cli optout <domain> --name "<name>" --title "<title>" --reason "<reason>"` enables instant record updates.
* **Audit Example**: Hoppinger (`hoppinger.com`, Target ID 6) was flagged as opted-out on request from Julia Peek (Office Manager), preserving all dispatch history while preventing any future dispatches.

### 3.3 Passive Technographic Fingerprinter (`outreach/technographics.py`)
Provides zero-cost technology detection by evaluating live HTTP responses:
- **Server Headers**: Reads `Server`, `X-Powered-By`, and CDN reverse proxies (Cloudflare, LiteSpeed, Nginx, Apache).
- **Session Signatures**: Inspects cookie jars for `PHPSESSID`, Laravel session hashes, and frontend cookies.
- **Link Headers & DOM Footprints**: Analyzes REST API endpoints (`/wp-json/`), WordPress scripts (`wp-content/`), WooCommerce markers, Drupal settings objects (`drupalSettings`), Magento frontend tokens (`mage-`), and Next.js hydration blocks.
- **Scoring Engine**: Returns detected platform, server name, and a confidence score between 0% and 95%.
- **Resilient Network Timeouts**: Configured with 12.0s connect/read timeouts to accommodate slow uplink DNS resolution.

### 3.4 BuiltWith MCP & REST Client Bridge (`outreach/builtwith.py`)
- Provides clean hooks into the BuiltWith MCP registry (`https://api.builtwith.com/mcp`) and REST lookup endpoint.
- Incorporates local SQLite caching in `builtwith_cache` to eliminate duplicate external calls.
- Transparently falls back to the free passive technographic fingerprinter when external API quota is unconfigured.

### 3.5 Contact Discovery & Humanized Greeting Sanitizer (`outreach/enricher.py`)
- **Multi-Path Scraper**: Crawls common European and Dutch paths: `/`, `/contact`, `/contact-us`, `/klantenservice`, `/over-ons`, `/about`, `/colofon`, `/team`, `/privacy`, `/impressum`.
- **Sanitization**: Strips HTML/Unicode artifacts (e.g. `\u003e`), removes non-email assets (`.png`, `.svg`), and prioritizes personal executive emails over generic role addresses.
- **Humanized Greeting Protocol**: Avoids robotic mail-prefix greetings. When role addresses (`info@`, `service@`, `redactie@`) are identified, the contact is addressed as `{Company} Team` rather than "Hi Info," or "Hi Klantenservice,".

### 3.6 Dynamic UTM Attribution & Delivery Engine (`outreach/sender.py`)
- **Dynamic UTM Builder**: Generates track-specific and template-specific campaign URLs:
  `https://alexseif.com/php-emergency-patch?utm_source=outreach&utm_medium=email&utm_campaign={track}_{template_slug}&utm_content={domain}`
- **Transport Protocol**: Python `smtplib` over TLS (`Port 587`) targeting `smtp-relay.brevo.com`.
- **Velocity Safeguard**: Implements randomized jitter delays between 60.0 and 90.0 seconds per transmission, protecting sender reputation and inbox delivery.
- **Template Registry**: Supports file-based templates (`agency_v1.txt`, `direct_client_v1.txt`, `partner_v1.txt`) with automatic database caching and token substitution.

---

## 4. Verification & Production Execution Metrics

| Metric | Track 1 (Agencies) | Track 2 (Direct Clients) | Track 3 (Partners) | Total |
| :--- | :--- | :--- | :--- | :--- |
| **Target Audience** | Digital agencies & MSPs | E-commerce, media, NGOs | Historical dev partners | All segments |
| **Geographic Scope** | NL, DE, UK | Netherlands (.nl) | Regional / Global | Multi-region |
| **Primary Platforms** | Multi-tenant PHP & Node.js | WordPress, WooCommerce, Drupal, Magento | Web & software stacks | Web runtimes |
| **Template Slug** | `agency_v1` | `direct_client_v1` | `partner_v1` | Versioned |
| **Total Ingested** | 22 | 34 (Batch 1: 17, Batch 2: 17) | 3 | 59 |
| **Fingerprint Confidence**| 85% to 90% | 85% to 90% | Verified | >85% average |
| **Contact Discovery** | 22 / 22 (100%) | 34 / 34 (100%) | 3 / 3 (100%) | 59 / 59 (100%) |
| **Successful Dispatches** | 22 | 34 | 3 | 59 |
| **Failed / Bounced** | 0 | 0 | 0 | 0 |
| **Opted Out (Do Not Contact)**| 1 (Hoppinger) | 0 | 0 | 1 |
| **Delivery Success Rate** | **100.0%** | **100.0%** | **100.0%** | **100.0%** |

All 59 outbound transmissions executed with valid DKIM/SPF alignment through authenticated Brevo relay channels and were recorded in SQLite with full template and UTM attribution.
