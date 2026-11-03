# Sub-Spec: BuiltWith API Integration for Outreach Engine

> **Topic:** `outreach-builtwith-integration`  
> **Status:** Draft / Under Review  
> **Source Objective:** `ai-work/OBJECTIVE.md`  

---

## 1. Context & Business Value

The outreach engine currently sources candidates via curated regional presets and search scraper heuristics. To scale prospect volume across Europe and ensure 100% stack precision, we are integrating the **BuiltWith API** (https://builtwith.com/).

Integrating BuiltWith delivers two strategic advantages:
1. **Automated Lead Generation (Lists API):** Query domains running vulnerable or target technologies (PHP, Laravel, WordPress, Magento, Node.js) filtered by country (Netherlands, Germany, UK).
2. **Empirical Stack Verification (Lookup API):** Inspect a candidate agency or firm's live infrastructure before dispatching outreach, identifying exact CMS, server engines (Apache, Nginx, PHP-FPM), and frameworks.

---

## 2. Functional Requirements

### 2.1 Configuration & Authentication
* **Config File:** `outreach/config.py` and `outreach/.env`.
* **Environment Variable:** `BUILTWITH_API_KEY`.
* **Graceful Degradation:** If `BUILTWITH_API_KEY` is absent or quota-depleted, the system must warn the user and cleanly fall back to local scraper heuristics without raising fatal exceptions.

### 2.2 BuiltWith Client Module (`outreach/builtwith.py`)
Implement a dedicated client with two primary capabilities:

1. **Domain Technology Lookup (`lookup_domain(domain: str) -> Dict[str, Any]`):**
   * Endpoint: `https://api.builtwith.com/v21/api.json?KEY={KEY}&LOOKUP={domain}`
   * Extracts:
     * `is_php`: Boolean indicating PHP detection.
     * `is_nodejs`: Boolean indicating Node.js detection.
     * `cms`: Detected CMS (WordPress, WooCommerce, Drupal, Magento, Joomla).
     * `frameworks`: Detected frameworks (Laravel, Symfony, Express, Next.js).
     * `web_server`: Detected server (Nginx, Apache, LiteSpeed).
     * `raw_techs`: List of relevant infrastructure tags.

2. **Technology List Harvesting (`fetch_tech_leads(tech: str, country: str, limit: int) -> List[Tuple[str, str]]`):**
   * Endpoint: BuiltWith Lists API / Keyword Query.
   * Pulls domain names and company titles matching combinations like `tech=Laravel&country=NL` or `tech=PHP&country=DE`.

### 2.3 Local Database Schema Migration (`outreach/db.py`)
Enhance `targets` table to store verified stack telemetry:
* `tech_stack`: TEXT (JSON array of detected technologies).
* `tech_verified`: BOOLEAN (True if verified via BuiltWith).
* `php_detected`: BOOLEAN.
* `nodejs_detected`: BOOLEAN.

Add persistent lookup caching in a new table `builtwith_cache` (`domain TEXT PRIMARY KEY, raw_json TEXT, cached_at TIMESTAMP`) to prevent redundant API credit consumption.

### 2.4 Harvester Integration (`outreach/harvester.py`)
Add a BuiltWith mode to `harvester.py`:
* Harvest target domains directly from BuiltWith technology queries.
* Run DNS socket verification before saving to database or CSV.

### 2.5 Dynamic Template Personalization (`outreach/sender.py`)
Incorporate verified stack data into the email template:
* Variable `{{DetectedStack}}`: Populated dynamically (e.g. "WordPress & PHP-FPM", "Laravel", or "Node.js").
* Contextual opener fallback if stack data is generic.

### 2.6 CLI Commands (`outreach/cli.py`)
* `python -m outreach.cli harvest --builtwith --tech "Laravel" --country "NL" --limit 50`
* `python -m outreach.cli inspect <domain>`: Displays live BuiltWith tech stack lookup for a domain.

---

## 3. Scope Boundaries & Constraints

* **Do:** Cache all API responses in SQLite to conserve credits.
* **Do:** Enforce timeout limits (8 seconds max) on external API calls.
* **Do:** Respect anti-AI writing rules (short paragraphs, bullet points, zero em dashes).
* **Don't:** Execute destructive database rebuilds; use `ALTER TABLE ... ADD COLUMN` or schema checks.
* **Don't:** Make assumptions about exact minor PHP versions if BuiltWith only returns the parent technology family.
