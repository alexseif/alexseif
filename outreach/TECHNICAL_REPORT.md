# Systems Architecture & Technical Implementation Report
**PHP & Node.js Automated Incident Outreach Engine**
**Author:** Alex Seif (Software Architect)  
**Date:** November 2026  
**Status:** Completed & Production Verified  

---

## 1. Executive Technical Summary

An automated, self-contained outbound intelligence and delivery engine was designed, implemented, and verified to conduct direct technical advisory outreach to digital agencies and software firms running mission-critical PHP and Node.js server infrastructure.

The pipeline addresses two concurrent engine-level Remote Code Execution (RCE) vectors circulating in the wild:
1. **PHP Core (php2shell // CVE-2026-109618 & CVE-2026-109619):** Stale memory allocators and out-of-memory request corruption in default PHP-FPM worker pools.
2. **Node.js (Node2Shell // CVE-2026-111497):** Critical out-of-bounds write / buffer overflow in the Brotli decoder (`c/dec/decode.c` via `node:zlib`) impacting Node.js 22.x, 24.x, and 26.x.

The engine automates domain harvesting, DNS socket verification, contact discovery and title extraction, template rendering, and rate-limited transmission via Brevo SMTP relay while logging all actions to an SQLite database.

---

## 2. System Architecture

```mermaid
flowchart TD
    A["Regional Target Catalog (harvester.py)"] -->|DNS Socket Verification| B["SQLite Tracking Store (db.py)"]
    C["Custom CSV Import (cli.py import)"] -->|Domain Normalization| B
    B -->|Fetch 'imported' Targets| D["Contact Discovery & Scraper (enricher.py)"]
    D -->|Web Crawl: /contact, /about, /team| E["Email Regex & Title Extractor"]
    E -->|Update Target to 'ready'| B
    B -->|Fetch 'ready' Targets| F["Template & Dispatch Engine (sender.py)"]
    F -->|Render Dual CVE Copy & Pricing| G["Rate Limiter (60-90s Jitter)"]
    G -->|TLS Auth via Port 587| H["Brevo SMTP Relay (smtp-relay.brevo.com)"]
    H -->|Deliver to Agency Inboxes| I["Target Servers (NL, DE, UK)"]
    I -->|Direct Responses (Reply-To)| J["alex.seif@gmail.com"]
    F -->|Log Status & Timestamp| B
    B -->|Generate Audit Trail| K["CSV Export (campaign_report.csv)"]
```

---

## 3. Core Module Specifications

### 3.1 Database & State Management (`outreach/db.py`)
State tracking is handled via a local SQLite database (`outreach/outreach.db`) ensuring complete idempotency and zero duplicate contacts.

```sql
CREATE TABLE IF NOT EXISTS targets (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    domain TEXT UNIQUE NOT NULL,
    company_name TEXT,
    status TEXT NOT NULL DEFAULT 'imported', -- imported, ready, sent, skipped, failed
    contact_name TEXT,
    contact_first_name TEXT,
    contact_title TEXT,
    contact_email TEXT,
    source TEXT DEFAULT 'manual',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS dispatch_logs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    target_id INTEGER NOT NULL,
    recipient_email TEXT NOT NULL,
    subject TEXT NOT NULL,
    body TEXT NOT NULL,
    provider TEXT NOT NULL,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status TEXT NOT NULL, -- success, failed, dry_run
    error_message TEXT,
    FOREIGN KEY(target_id) REFERENCES targets(id)
);
```

### 3.2 Target Harvester (`outreach/harvester.py`)
* **Regional Presets:** Curated target catalogs for the Netherlands (`nl`), Germany (`de`), and the United Kingdom (`uk`).
* **Directory Blacklisting:** Prevents ingestion of aggregator sites (Clutch, Sortlist, LinkedIn, GitHub, TechBehemoths).
* **DNS Resolution Check:** Uses native `socket.gethostbyname()` to verify domain reachability before writing records.

### 3.3 Contact Discovery & Enrichment (`outreach/enricher.py`)
* **Multi-Path Scraper:** Crawls `/`, `/contact`, `/contact-us`, `/about`, `/team`, `/over-ons`, and `/impressum`.
* **Sanitization:** Strips HTML/Unicode artifacts (e.g. `\u003e`), removes non-email assets (`.png`, `.svg`), and prioritizes personal executive emails over generic role addresses.
* **Contextual Title Extractor:** Scans surrounding text within 150 characters of an email address for senior technical leadership keywords (CTO, Technical Director, Founder, Lead Developer, Directeur).
* **Optional API Hook:** Native support for Hunter.io domain search when an API key is supplied.

### 3.4 Template & Delivery Engine (`outreach/sender.py`)
* **Token Substitution:** Interpolates `{{FirstName}}`, `{{Company}}`, and `{{Domain}}`.
* **Transport Protocol:** Python `smtplib` over TLS (`Port 587`) targeting `smtp-relay.brevo.com`.
* **Velocity Safeguard:** Implements randomized jitter delays between 60.0 and 90.0 seconds per transmission, enforcing a strict 30-email daily cap to protect sender reputation.
* **Dual Runtime Copy:** Covers both PHP core memory persistence and Node.js Brotli decoder overflow vulnerabilities.

### 3.5 Unified Command-Line Interface (`outreach/cli.py`)
Provides full operational control via subcommands:
* `harvest`: Ingests regional agency presets into CSV or SQLite.
* `import`: Ingests arbitrary target lists from CSV files.
* `enrich`: Runs automated web discovery for pending imported targets.
* `send`: Executes either safe dry-run previews or real rate-limited dispatches (`--live`).
* `list`: Renders CLI status tables (`--status sent`, `--status ready`, `--status all`).
* `export`: Generates full audit spreadsheets (`campaign_report.csv`).
* `status`: Displays real-time metrics and recent logs.

---

## 4. Security, Privacy & Deliverability Safeguards

1. **Credential Isolation:** SMTP passwords and API secrets reside in `outreach/.env`, strictly excluded from git tracking via `.gitignore`.
2. **Reputation Protection:** Outbound traffic was routed through an authenticated Brevo SMTP relay rather than direct client sockets, guaranteeing valid DKIM/SPF alignment.
3. **Passive Discovery Only:** No invasive network scanning or vulnerability exploitation was performed against target agencies. Lookups relied entirely on public web pages and standard DNS queries.
4. **Direct Reply Routing:** All outbound headers enforce `Reply-To: alex.seif@gmail.com` to capture incoming responses immediately.

---

## 5. Verification & Execution Results

* **Authentication Test:** Successful STARTTLS handshake and login with `smtp-relay.brevo.com:587`.
* **Loopback Test:** Successful self-dispatch to `alex.seif@gmail.com` confirming zero SMTP relay errors.
* **Harvest Batch:** 23 candidate agencies ingested; 22 passed DNS resolution.
* **Enrichment Yield:** 22 out of 22 targets enriched with valid technical contact addresses (100%).
* **Live Transmission:** 22 out of 22 emails successfully transmitted with zero delivery drops or socket errors.
* **Final Database State:**
  * Total Targets: 22
  * Pending Enrichment: 0
  * Ready to Send: 0
  * Successfully Sent: 22
  * Failed / Bounced: 0
