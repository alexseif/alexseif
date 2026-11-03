# Sub-Spec: BuiltWith MCP, Multi-Track Architecture & UTM Attribution

> **Topic:** `outreach-builtwith-integration`  
> **Status:** Draft / Ready for Review  
> **Source Objective:** `ai-work/OBJECTIVE.md`  

---

## 1. Context & Business Strategy

The outreach engine is expanding from a single agency-focused pipeline into a **Multi-Track Lead Generation & Technographic Intelligence System**.

This specification formalizes three core architectural capabilities:
1. **Multi-Track Data Partitioning:** Complete operational separation between Track A (**Digital Agencies**) and Track B (**Direct End-Clients**).
2. **Template Versioning & A/B Tracking:** Archiving and logging exact template versions (`template_slug`) per dispatch to measure reply rates across iterations.
3. **UTM Attribution Engine:** Dynamically signing call-to-action links with UTM parameters down to the company, track, and template version for analytics attribution.
4. **BuiltWith MCP & Passive Technographics:** Connecting to the official BuiltWith MCP server (`https://api.builtwith.com/mcp`) when API credentials exist, while defaulting to an internal zero-cost passive fingerprinter.

---

## 2. Functional Requirements

### 2.1 Multi-Track Campaign Architecture
The system isolates targets and reporting into two distinct operational tracks:
* **Track 1 (`agency`):** Digital development shops, web bureaus, and MSPs managing multiple client PHP/Node fleets.
* **Track 2 (`direct_client`):** Direct business websites running WordPress, WooCommerce, Drupal, Magento, or custom PHP backends.

Target records and dispatch logs must be strictly partitioned by `track`.

### 2.2 Template Registry & Iteration Logging (`outreach/templates/` & `db.py`)
To measure which pitch drives higher conversions:
* **File-Based Template Storage:** Templates stored in `outreach/templates/` using a standardized naming schema:
  * `agency_v1.txt`: Initial full-stack advisory template (already sent to 22 agencies).
  * `direct_client_v1.txt`: Direct website owner revenue protection template.
* **Database Tracking:**
  * Add `templates` table storing `slug`, `track`, `subject`, `body`, `version`, and `is_active`.
  * Update `dispatch_logs` table with `template_slug` and `utm_url` columns so every outgoing email is linked to its exact template iteration.

### 2.3 Dynamic UTM Link Attribution Generator (`outreach/sender.py`)
All landing page URLs in dispatched emails must be dynamically signed:
* **Base URL:** `https://alexseif.com/php-emergency-patch`
* **Query Parameters:**
  * `utm_source`: `outreach`
  * `utm_medium`: `email`
  * `utm_campaign`: `{track}_{template_slug}` (e.g. `direct_client_v1` or `agency_v1`)
  * `utm_content`: `{domain}` (e.g. `acme-webshop.nl`)
* **Output Format:**
  `https://alexseif.com/php-emergency-patch?utm_source=outreach&utm_medium=email&utm_campaign=direct_client_v1&utm_content=acme-webshop.nl`

### 2.4 Technographic Discovery & BuiltWith Gateway
* **Passive Analyzer (`outreach/technographics.py`):** Scans public HTTP response headers (`X-Powered-By`, `Server`, `Link: <.../wp-json/>`), generator tags, and asset paths to detect WordPress, WooCommerce, Drupal, Magento, and PHP for free.
* **BuiltWith MCP Gateway (`outreach/builtwith.py`):** Plugs into `https://api.builtwith.com/mcp` and REST endpoints when `BUILTWITH_API_KEY` is provided, caching all responses in SQLite table `builtwith_cache`.

### 2.5 Database Schema Additions (`outreach/db.py`)
```sql
-- Track partition and technographic fields on targets
ALTER TABLE targets ADD COLUMN track TEXT NOT NULL DEFAULT 'agency'; -- 'agency' or 'direct_client'
ALTER TABLE targets ADD COLUMN detected_platform TEXT;
ALTER TABLE targets ADD COLUMN detected_server TEXT;
ALTER TABLE targets ADD COLUMN tech_confidence INTEGER DEFAULT 0;

-- Template registry
CREATE TABLE IF NOT EXISTS templates (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    slug TEXT UNIQUE NOT NULL,
    track TEXT NOT NULL,
    subject TEXT NOT NULL,
    body TEXT NOT NULL,
    version INTEGER NOT NULL DEFAULT 1,
    is_active BOOLEAN NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Template and UTM tracking on dispatch logs
ALTER TABLE dispatch_logs ADD COLUMN template_slug TEXT;
ALTER TABLE dispatch_logs ADD COLUMN utm_url TEXT;

-- BuiltWith response caching
CREATE TABLE IF NOT EXISTS builtwith_cache (
    domain TEXT PRIMARY KEY,
    raw_json TEXT NOT NULL,
    cached_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 2.6 CLI Enhancements (`outreach/cli.py`)
* `python -m outreach.cli status --track [agency|direct_client|all]`
* `python -m outreach.cli list --track [agency|direct_client] --status [sent|ready]`
* `python -m outreach.cli send --track direct_client --live --limit 10`
* `python -m outreach.cli export --track [agency|direct_client|all]`
* `python -m outreach.cli templates list`: Displays registered templates and their dispatch counts.

---

## 3. Scope Boundaries & Constraints

* **Do:** Keep the existing 22 dispatched agency records preserved under `track = 'agency'`.
* **Do:** Automatically generate dynamic UTM links during template compilation.
* **Do:** Store all templates as clean text files in `outreach/templates/` for easy editing.
* **Don't:** Mix agency metrics with direct client metrics in status reports.
* **Don't:** Hardcode static landing page URLs; all URLs must be processed through the UTM builder.
