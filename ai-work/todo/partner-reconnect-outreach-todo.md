# Todo: Partner Outreach Campaign (Track 3: partner)

- [x] **Task 1: Create Partner Email Template & Support Track in CLI**
  - **Prerequisites**: Approved `ai-work/spec/partner-reconnect-outreach-spec.md`.
  - **Files**: `outreach/templates/partner_v1.txt`, `outreach/cli.py`
  - **Validation**: Template loads from disk; CLI recognizes `partner` in `--track`.

- [ ] **Task 2: Ingest & Populate 3 Partner Targets into Database**
  - **Prerequisites**: Task 1 complete.
  - **File**: `outreach/db.py`
  - **Validation**: 3 targets added with `track = 'partner'`, verified names, emails, and `status = 'ready'`.

- [ ] **Task 3: Dry-Run Verification of Partner Template**
  - **Prerequisites**: Task 2 complete.
  - **Command**: `./venv/bin/python -m outreach.cli send --track partner`
  - **Validation**: Complete dry-run preview shows warm reconnect copy, zero em dashes, and valid UTM links.

- [ ] **Task 4: Live Dispatch to 3 Partners & Campaign Export**
  - **Prerequisites**: Task 3 complete and verified.
  - **Command**: `./venv/bin/python -m outreach.cli send --track partner --live --yes`
  - **Validation**: 3 emails sent via Brevo SMTP relay with 100% success; exported to `outreach/campaign_report_partners.csv`.
