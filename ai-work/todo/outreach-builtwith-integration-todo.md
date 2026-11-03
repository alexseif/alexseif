# Todo: BuiltWith API Integration for Outreach Engine

- [ ] **Task 1: Configuration & SQLite Caching Schema**
  - **Prerequisites**: Approved `ai-work/spec/outreach-builtwith-integration-spec.md`.
  - **Files**: `outreach/config.py`, `outreach/.env.example`, `outreach/db.py`
  - **Validation**: `builtwith_cache` table created in `outreach.db`; `tech_stack`, `tech_verified`, `php_detected`, `nodejs_detected` columns present on `targets`; schema changes execute non-destructively on existing records.

- [ ] **Task 2: Implement BuiltWith Client Module**
  - **Prerequisites**: Task 1 complete.
  - **File**: `outreach/builtwith.py`
  - **Validation**: Unit test verifying `lookup_domain("example.com")` returns structured dictionary (`is_php`, `is_nodejs`, `cms`, `frameworks`, `web_server`); verifies responses write to SQLite cache and subsequent lookups read from cache.

- [ ] **Task 3: Integrate BuiltWith into Target Harvester**
  - **Prerequisites**: Task 2 complete.
  - **File**: `outreach/harvester.py`
  - **Validation**: Function `harvest_builtwith(tech, country, limit)` successfully queries BuiltWith lists, validates domain reachability via DNS, and returns deduplicated candidate tuples.

- [ ] **Task 4: CLI Inspection and BuiltWith Harvesting Subcommands**
  - **Prerequisites**: Tasks 2 & 3 complete.
  - **File**: `outreach/cli.py`
  - **Validation**: `python -m outreach.cli inspect <domain>` prints clean terminal report of detected technologies; `python -m outreach.cli harvest --builtwith` imports discovered domains into SQLite.

- [ ] **Task 5: Dynamic Template Stack Personalization**
  - **Prerequisites**: Task 4 complete.
  - **File**: `outreach/sender.py`
  - **Validation**: `render_template` injects `{{DetectedStack}}` when available, falling back gracefully to generic runtime phrasing when unavailable.

- [ ] **Task 6: Verification & End-to-End Test**
  - **Prerequisites**: Tasks 1-5 complete.
  - **Commands**: Run inspect test on a sample domain, run dry-run dispatch with stack token check, verify zero unhandled exceptions.
  - **Validation**: Dry-run preview displays verified stack data; report exports correctly to CSV.
