# Todo: Dutch Direct Clients Outreach Campaign (Track 2)

- [x] **Task 1: Seed Qualified Dutch Direct Client Targets**
  - **Prerequisites**: Approved `ai-work/spec/dutch-clients-outreach-spec.md`.
  - **File**: `outreach/targets_clients.csv`
  - **Validation**: 15+ verified Dutch businesses running WordPress, WooCommerce, and Drupal formatted with valid DNS and company names.

- [x] **Task 2: Ingest Targets into Track 2 Database**
  - **Prerequisites**: Task 1 complete.
  - **Command**: `./venv/bin/python -m outreach.cli import --file outreach/targets_clients.csv --track direct_client`
  - **Validation**: Database status confirms 15+ targets in `imported` status under `track = 'direct_client'` without affecting existing agency records.

- [x] **Task 3: Run Technographic Fingerprinting Audit**
  - **Prerequisites**: Task 2 complete.
  - **Command**: `./venv/bin/python -m outreach.cli fingerprint --track direct_client`
  - **Validation**: Every target has `detected_platform`, `detected_server`, and `tech_confidence` populated with >80% confidence.

- [ ] **Task 4: Contact Enrichment & Humanized Greeting Sanitization**
  - **Prerequisites**: Task 3 complete.
  - **Command**: `./venv/bin/python -m outreach.cli enrich --track direct_client`
  - **Validation**: Contacts discovered, sanitized, role mailboxes formatted to `{Company} Team`, and status updated to `ready`.

- [ ] **Task 5: Dry-Run Verification & UTM Audit**
  - **Prerequisites**: Task 4 complete.
  - **Command**: `./venv/bin/python -m outreach.cli send --track direct_client`
  - **Validation**: Complete dry-run execution confirms personalized template rendering, zero em dashes, and valid UTM campaign URLs in `dispatch_logs`.

- [ ] **Task 6: Live Batch Dispatch & Audit Export**
  - **Prerequisites**: Task 5 complete and user approval obtained.
  - **Command**: `./venv/bin/python -m outreach.cli send --track direct_client --live`
  - **Validation**: Live emails dispatched via Brevo SMTP relay with pacing delays; `outreach/campaign_report_clients.csv` exported.
