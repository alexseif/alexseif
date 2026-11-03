# Todo: BuiltWith MCP & Technographic Direct-Client Outreach

- [ ] **Task 1: Database Schema Migration & Audience Fields**
  - **Prerequisites**: Approved `ai-work/spec/outreach-builtwith-integration-spec.md`.
  - **File**: `outreach/db.py`
  - **Validation**: `targets` table updated with `audience_type`, `detected_platform`, `detected_server`, `tech_confidence`; `builtwith_cache` table created; schema migration runs non-destructively without wiping existing target records.

- [ ] **Task 2: Implement Passive Technographic Fingerprinter**
  - **Prerequisites**: Task 1 complete.
  - **File**: `outreach/technographics.py`
  - **Validation**: Unit test against active sites confirming accurate detection of WordPress, WooCommerce, Drupal, and Magento; returns platform string, server string, and confidence score with zero paid API calls.

- [ ] **Task 3: Implement BuiltWith MCP & REST Client Bridge**
  - **Prerequisites**: Task 2 complete.
  - **File**: `outreach/builtwith.py`
  - **Validation**: Client connects to `https://api.builtwith.com/mcp` and REST lookup endpoint when `BUILTWITH_API_KEY` is present; falls back gracefully to `technographics.py` when absent; caches responses in SQLite.

- [ ] **Task 4: Direct End-Client Email Template & Multi-Audience Dispatcher**
  - **Prerequisites**: Task 1 & 2 complete.
  - **File**: `outreach/sender.py`
  - **Validation**: Implements separate templates for `agency` and `direct_client`; injects `{{DetectedPlatform}}` into context; verifies copy is free of em dashes and emphasizes business uptime and €140 flat rate.

- [ ] **Task 5: CLI Fingerprinting and Audience Commands**
  - **Prerequisites**: Tasks 3 & 4 complete.
  - **File**: `outreach/cli.py`
  - **Validation**: `python -m outreach.cli fingerprint` inspects pending targets and populates platform telemetry; `python -m outreach.cli send --audience direct_client` routes correct copy.

- [ ] **Task 6: Empirical Verification & End-to-End Test**
  - **Prerequisites**: Tasks 1-5 complete.
  - **Commands**: Run fingerprinting on sample domains, run dry-run dispatch with `--audience direct_client`, verify clean output and audit logging.
  - **Validation**: Dry-run preview displays hyper-personalized end-client copy with detected platform tokens.
