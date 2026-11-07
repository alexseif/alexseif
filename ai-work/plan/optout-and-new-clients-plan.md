# Implementation Plan: Opt-Out Controls & Batch 2 Client Discovery

## 1. Overview
Execute the opt-out mechanism across the outreach codebase, apply it to Hoppinger, and harvest/qualify a fresh batch of verified Dutch direct clients running WordPress and Drupal. Follow the disciplined 4-phase loop: Implement -> Verify -> Commit -> Check-off.

---

## 2. Sequential Execution Phases

### Phase 1: Database Migration & Opt-Out Enforcement
- Extend `outreach/db.py` to add `do_not_contact`, `do_not_contact_at`, and `do_not_contact_reason` columns to `targets`.
- Update `get_targets()` to exclude records where `do_not_contact = 1`.
- Update `dispatch_target()` in `outreach/sender.py` with hard defense checks.
- Add `optout` subcommand in `outreach/cli.py`.
- Apply opt-out to `hoppinger.com` with Julia Peek's details.

### Phase 2: Harvest & Validate New Dutch Client Candidates
- Compile candidate Dutch websites across e-commerce, retail, and digital services.
- Execute passive technographic fingerprinter to isolate active WordPress, WooCommerce, and Drupal deployments.
- Ingest verified targets into `outreach/targets_clients_batch2.csv`.

### Phase 3: Ingestion, Technographic Audit & Contact Enrichment
- Import Batch 2 targets into `outreach.db` under `track = 'direct_client'`.
- Run technographic audit and persist platform confidence.
- Crawl websites for verified contact mailboxes and sanitize team greetings.

### Phase 4: Dry-Run Verification & Live Execution
- Run complete dry-run dispatch via `--track direct_client`.
- Present rendered templates, UTM links, and target list for user approval.
- Execute live dispatch via Brevo SMTP relay with 60-90s pacing delays.
- Export updated tracking reports.
