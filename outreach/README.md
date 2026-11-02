# PHP Emergency Patch Outreach Automation Agent

A self-contained Python CLI pipeline to prospect, enrich, and dispatch calibrated cold outreach to digital agencies and PHP system operators.

## Pricing & Offer Structure Embedded in Copy
* Fixed Entry Package: EUR 140 per site / application (includes full pre-patch backup, dependencies update, version upgrade, and zero-downtime runtime hotpatch).
* Complex / Legacy Stacks: Sized by codebase architecture at EUR 75/hour.
* Ongoing Retainers: Monthly outsourcing retainers available, billed either independently or through a registered corporate entity.

## Quick Start

### 1. Configuration
Copy the template and configure your sender details:
```bash
cp outreach/.env.example outreach/.env
```
Key configuration settings:
* `OUTREACH_PROVIDER`: `smtp` or `brevo`.
* `SMTP_HOST`, `SMTP_PORT`, `SMTP_USER`, `SMTP_PASSWORD`: Credentials for your sending mailbox.
* `SENDER_EMAIL`: Address that appears in the From header.
* `REPLY_TO_EMAIL`: alex.seif@gmail.com (so all prospect replies route to your primary inbox).
* `HUNTER_API_KEY`: (Optional) For high-confidence executive email resolution.

### 2. Prepare Targets
Create a CSV file with target domains (see `outreach/targets.example.csv`):
```csv
domain,company,contact_name,title,email
agency-alpha.nl,Agency Alpha,Jan de Vries,CTO,
agency-beta.com,Agency Beta,,,
```

### 3. Import Targets
```bash
./venv/bin/python -m outreach.cli import --file outreach/targets.example.csv
```

### 4. Enrich Contacts
Discovers decision-maker emails (CTOs, Tech Leads, Founders) via web scraping and optional API lookups:
```bash
./venv/bin/python -m outreach.cli enrich
```

### 5. Safe Preview (Dry-Run)
Previews rendered templates and recipient targeting without sending emails:
```bash
./venv/bin/python -m outreach.cli send
```

### 6. Live Dispatch
Sends emails with rate-limiting delays (60 to 90 seconds between sends):
```bash
./venv/bin/python -m outreach.cli send --live --limit 25
```

### 7. Pipeline Metrics & Status
```bash
./venv/bin/python -m outreach.cli status
```
