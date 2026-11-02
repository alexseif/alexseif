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

### 2. Harvest Target Agencies (Automated)
Generate verified candidate agencies across the Netherlands, Germany, and the UK:
```bash
./venv/bin/python -m outreach.cli harvest --regions all --to-db
```
Or target specific regions (e.g., `--regions nl` or `--regions de` or `--regions uk`).

### 3. Prepare Targets from CSV (Alternative)
You can also manually edit `outreach/targets.csv` and import custom lists:
```bash
./venv/bin/python -m outreach.cli import --file outreach/targets.csv
```

### 4. Enrich Contacts
Discovers decision-maker emails (CTOs, Tech Leads, Founders) via website crawls:
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

### 8. Track Who Was Reached vs. Pending
List all targets and their reach timestamps:
```bash
# View only contacted targets:
./venv/bin/python -m outreach.cli list --status sent

# View targets waiting to be sent:
./venv/bin/python -m outreach.cli list --status ready

# View entire roster:
./venv/bin/python -m outreach.cli list --status all
```

### 9. Export Tracking Report to CSV
Export a complete spreadsheet (openable in Excel, Google Sheets, or Numbers) anytime:
```bash
./venv/bin/python -m outreach.cli export
```
Report will be saved to `outreach/campaign_report.csv`.
