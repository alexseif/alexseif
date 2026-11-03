# Implementation Plan: Dutch Direct Clients Outreach Campaign

## 1. Overview
Execute the outbound advisory campaign for Track 2 (`direct_client`) targeting verified Dutch businesses running WordPress, WooCommerce, and Drupal. The workflow strictly follows the 4-phase loop: Implement -> Verify -> Commit -> Check-off.

---

## 2. Sequential Phases

### Phase 1: Target List Ingestion
- Ingest verified Dutch WordPress, WooCommerce, and Drupal target domains into `outreach/targets_clients.csv`.
- Clean company names, domains, and initial contact points.
- Load records into SQLite database under `track = 'direct_client'`.

### Phase 2: Technographic Audit & Verification
- Execute passive technographic fingerprinter on all imported Track 2 targets.
- Confirm platform identification (WordPress, WooCommerce, Drupal) and server stack (Nginx, Apache, LiteSpeed, Cloudflare).
- Persist confidence scores and technographic signals into `targets` table.

### Phase 3: Contact Sanitization & Personalization
- Discover and verify legitimate contact mailboxes (`info@`, `service@`, `redactie@`, technical contacts).
- Apply name cleaning to ensure human greeting formatting (`{Company} Team` vs raw mail prefix).
- Mark validated records as `status = 'ready'`.

### Phase 4: Dry-Run Simulation & Rendering Preview
- Run complete dry-run dispatch via `--track direct_client`.
- Verify UTM link structure (`direct_client_v1`), domain substitutions, and anti-AI template text formatting.
- Confirm audit trail logging in `dispatch_logs`.

### Phase 5: Live Execution & Delivery Audit
- Present final preview and confirmation to user.
- Execute live dispatch via Brevo SMTP relay with 60-90s pacing delays.
- Export comprehensive campaign performance report to `outreach/campaign_report_clients.csv`.
