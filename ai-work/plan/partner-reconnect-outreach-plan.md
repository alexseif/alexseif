# Implementation Plan: Partner & Previous Outsourcing Collaborators Outreach

## 1. Overview
Implement and execute the personalized advisory outreach for previous outsourcing partners (Track 3: `partner`). The workflow follows the disciplined 4-phase loop: Implement -> Verify -> Commit -> Check-off.

---

## 2. Sequential Execution Phases

### Phase 1: Template Registration & CLI Track Support
- Create dedicated template `outreach/templates/partner_v1.txt`.
- Update `outreach/cli.py` to recognize `partner` in `--track` arguments.
- Add partner status metrics to pipeline summary.

### Phase 2: Ingest & Populate Partner Records
- Seed the 3 partner contacts into SQLite under `track = 'partner'`.
- Verify MX mail exchanger records and set status to `ready`.

### Phase 3: Dry-Run Simulation & Token Verification
- Execute dry-run dispatch via `--track partner`.
- Validate token substitutions (`FirstName`, `Company`, `Domain`, `LandingUrl`).
- Ensure audit logging in `dispatch_logs` with UTM parameter verification.

### Phase 4: Live Delivery via Brevo Relay
- Dispatch live emails to the 3 partners via Brevo SMTP relay with pacing.
- Confirm successful delivery codes and export tracking audit report.
