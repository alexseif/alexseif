# Todo: Opt-Out Controls & Batch 2 Client Discovery

- [x] **Task 1: Implement Schema Migration for Opt-Out / Do-Not-Contact**
  - **Prerequisites**: Approved `ai-work/spec/optout-and-new-clients-spec.md`.
  - **Files**: `outreach/db.py`, `outreach/sender.py`, `outreach/cli.py`
  - **Validation**: Columns `do_not_contact`, `do_not_contact_at`, `do_not_contact_reason` exist in `targets`; `get_targets` excludes opted-out targets; `optout` CLI command works.

- [x] **Task 2: Flag Hoppinger as Opted-Out with Reason & Contact Details**
  - **Prerequisites**: Task 1 complete.
  - **Command**: `./venv/bin/python -m outreach.cli optout hoppinger.com --name "Julia Peek" --title "Office Manager" --reason "Not interested. Requested email removal."`
  - **Validation**: `hoppinger.com` has `do_not_contact = 1`, contact updated to Julia Peek, status preserved as `sent`, and never returned in `get_targets(status='ready')`.

- [x] **Task 3: Seed & Qualify Batch 2 Dutch Direct Client Targets**
  - **Prerequisites**: Task 2 complete.
  - **File**: `outreach/targets_clients_batch2.csv`
  - **Validation**: 15+ verified Dutch businesses running WordPress, WooCommerce, and Drupal formatted with valid DNS and company names.

- [x] **Task 4: Import, Fingerprint & Enrich Batch 2 Targets**
  - **Prerequisites**: Task 3 complete.
  - **Commands**: `./venv/bin/python -m outreach.cli import --file outreach/targets_clients_batch2.csv --track direct_client`, `./venv/bin/python -m outreach.cli fingerprint --track direct_client`, `./venv/bin/python -m outreach.cli enrich --track direct_client`
  - **Validation**: Batch 2 targets fingerprinted with >80% confidence, contact emails identified, team greetings humanized.

- [ ] **Task 5: Dry-Run Simulation & User Review**
  - **Prerequisites**: Task 4 complete.
  - **Command**: `./venv/bin/python -m outreach.cli send --track direct_client`
  - **Validation**: Dry-run preview verifies personalized template copy, zero em dashes, and valid UTM links.

- [ ] **Task 6: Live Dispatch & Report Export**
  - **Prerequisites**: Task 5 complete and user approval obtained.
  - **Command**: `./venv/bin/python -m outreach.cli send --track direct_client --live --yes`
  - **Validation**: Emails dispatched via Brevo SMTP relay with pacing delays; campaign reports updated.
