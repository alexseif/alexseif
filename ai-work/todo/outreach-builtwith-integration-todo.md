# Todo: Multi-Track Outreach Engine, Template Versioning & UTM Attribution

- [x] **Task 1: Multi-Track Database Schema Migration & Template Registry**
  - **Prerequisites**: Approved `ai-work/spec/outreach-builtwith-integration-spec.md`.
  - **File**: `outreach/db.py`
  - **Validation**: Schema adds `track`, `detected_platform`, `detected_server`, `tech_confidence` to `targets`; adds `template_slug`, `utm_url` to `dispatch_logs`; creates `templates` and `builtwith_cache` tables; existing 22 agency records remain intact with `track = 'agency'`.

- [x] **Task 2: File-Based Template Registry & Dynamic UTM Builder**
  - **Prerequisites**: Task 1 complete.
  - **Files**: `outreach/templates/agency_v1.txt`, `outreach/templates/direct_client_v1.txt`, `outreach/sender.py`
  - **Validation**: Function `build_utm_url(domain, track, template_slug)` correctly constructs parameter string; templates load from disk and substitute tokens including `{{LandingUrl}}`.

- [x] **Task 3: Implement Passive Technographic Fingerprinter**
  - **Prerequisites**: Task 1 complete.
  - **File**: `outreach/technographics.py`
  - **Validation**: Unit test against active sites confirming accurate detection of WordPress, WooCommerce, Drupal, and Magento; returns platform string, server string, and confidence score with zero paid API calls.

- [x] **Task 4: Implement BuiltWith MCP & REST Client Bridge**
  - **Prerequisites**: Task 3 complete.
  - **File**: `outreach/builtwith.py`
  - **Validation**: Client connects to `https://api.builtwith.com/mcp` and REST lookup endpoint when `BUILTWITH_API_KEY` is present; falls back gracefully to `technographics.py` when absent; caches responses in SQLite.

- [x] **Task 5: Multi-Track Dispatcher & Audit Logger**
  - **Prerequisites**: Tasks 2 & 4 complete.
  - **File**: `outreach/sender.py`
  - **Validation**: Dispatches Track A or Track B with corresponding template; logs `template_slug` and `utm_url` to `dispatch_logs`; updates `targets.status` without cross-pollinating tracks.

- [x] **Task 6: CLI Multi-Track Commands and Export Filtering**
  - **Prerequisites**: Tasks 1-5 complete.
  - **File**: `outreach/cli.py`
  - **Validation**: Commands `status`, `list`, `send`, and `export` accept `--track [agency|direct_client|all]`; exports separate or combined reports.

- [x] **Task 7: Empirical Verification & End-to-End Test**
  - **Prerequisites**: Tasks 1-6 complete.
  - **Commands**: Run fingerprinter test on sample domain, run dry-run dispatch with `--track direct_client`, verify UTM parameter presence and audit logging.
  - **Validation**: Dry-run preview renders hyper-personalized end-client copy with verified UTM link; database records template slug and UTM URL.
