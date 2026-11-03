# Sub-Spec: BuiltWith MCP & API Integration for Direct End-Client Lead Generation

> **Topic:** `outreach-builtwith-integration`  
> **Status:** Draft / Under Review  
> **Source Objective:** `ai-work/OBJECTIVE.md`  

---

## 1. Context & Strategic Shift

The initial outreach campaign targeted **digital web agencies** acting as their tier-3 white-label patching partner. This specification defines the transition to **direct end-client lead generation**: identifying and reaching business owners, e-commerce operators, and IT directors whose commercial websites actively run WordPress, Drupal, Magento, WooCommerce, or custom PHP backends.

To support this transition without incurring upfront SaaS subscription fees, the system implements a **Dual-Engine Technographic Architecture**:
1. **BuiltWith MCP & API Gateway:** Connects to the official BuiltWith MCP endpoint (`https://api.builtwith.com/mcp`) and REST API once an API key is available.
2. **Zero-Cost Local Technographic Fingerprinter:** A built-in passive analyzer that scans public HTTP response headers, generator meta tags, cookie footprints, and script paths (`/wp-json/`, `/sites/default/`, `PHPSESSID`) to detect target technologies for free.

---

## 2. Functional Requirements

### 2.1 Technographic Discovery Engine (`outreach/technographics.py`)
Implement an extensible detection module supporting two interchangeable providers:

1. **Passive Fingerprinter (Zero-Cost Default):**
   * Inspects HTTP response headers (`X-Powered-By`, `Server`, `Link: <.../wp-json/>`).
   * Parses homepage and `<head>` markup:
     * WordPress: `wp-content/`, `wp-includes/`, `<meta name="generator" content="WordPress...">`
     * WooCommerce: `woocommerce-`, `wc-ajax`
     * Drupal: `Drupal.settings`, `sites/default/files/`, `<meta name="generator" content="Drupal...">`
     * Magento: `mage-`, `Mage.Cookies`, `/static/frontend/`
     * Laravel / Symfony: CSRF cookie naming patterns (`XSRF-TOKEN`, `laravel_session`, `symfony`)
     * Node.js / Next.js: `__NEXT_DATA__`, `_next/static/`
   * Returns: `{is_php: bool, is_nodejs: bool, platform: str, web_server: str, confidence: int}`

2. **BuiltWith MCP & REST Client (`outreach/builtwith.py`):**
   * MCP endpoint integration: `https://api.builtwith.com/mcp` via Bearer token auth.
   * REST endpoint integration: `https://api.builtwith.com/v21/api.json?KEY={KEY}&LOOKUP={domain}`.
   * BuiltWith MCP Registry search: Ability to query categories and MCP server tools via `https://builtwith.com/mcp-registry`.
   * Caches all responses in SQLite table `builtwith_cache` to ensure zero redundant credit spend.

### 2.2 Target Persona & Audience Separation
Separate outreach logic into two distinct campaign modes:

* **Mode A: Agency Partner Outreach (Existing):**
  * Target: Agency Founders, CTOs, Technical Directors.
  * Pitch: Fleet-wide risk reduction, liability shield, white-label tier-3 escalation.
* **Mode B: Direct End-Client Outreach (New):**
  * Target: Managing Directors, Business Owners, Heads of E-Commerce, IT Managers.
  * Pitch: Protecting business revenue, transactions, and customer data from in-the-wild exploits (php2shell and Node2Shell). Flat €140 fix with pre-patch backup, zero downtime, and no disruption to sales.

### 2.3 Direct End-Client Email Template (`outreach/templates/direct_client.txt`)
Create a dedicated template specifically calibrated for business owners:

> **Subject:** Security notice regarding {{Domain}}'s web platform
>
> Hi {{FirstName}},
>
> Reaching out directly because {{Domain}} appears to run on {{DetectedPlatform}} (powered by PHP).
>
> Two critical security vulnerabilities (php2shell CVE-2026-109618 / 109619) are currently being exploited in the wild against default PHP server environments. For an active business website, standard advice ("run system upgrades") often breaks custom plugins or shopping carts, risking immediate downtime and lost sales.
>
> I am an independent Software Architect with 20+ years of production experience. I perform zero-downtime hotpatching to protect websites from exploitation without interrupting live customers.
>
> **Direct Remediation Pricing:**
> * **Standard Patch Package:** EUR 140 flat per website (includes full pre-patch backup, system update, version upgrade, and zero-downtime hotpatch).
> * **Custom Architectures:** Billed at EUR 75/hour for heavily customized platforms.
> * **Monthly Maintenance:** Retainers available for continuous security coverage, billed independently or via a registered corporate entity.
>
> If your team hasn't patched the underlying server runtime yet, I can secure your site today.
>
> Would you like a quick 5-minute assessment of your setup?
>
> Technical overview: https://alexseif.com/php-emergency-patch
>
> Best regards,  
> Alex Seif  
> Software Architect  
> alex.seif@gmail.com | +20 100 400 6332

### 2.4 Database Schema Updates (`outreach/db.py`)
Enhance `targets` table:
* `audience_type`: TEXT NOT NULL DEFAULT 'agency' (options: `agency`, `direct_client`).
* `detected_platform`: TEXT (e.g. `WordPress / WooCommerce`, `Drupal`, `Magento`, `Custom PHP`).
* `detected_server`: TEXT (e.g. `Nginx`, `Apache`, `LiteSpeed`).
* `tech_confidence`: INTEGER DEFAULT 0.

### 2.5 CLI Operational Commands (`outreach/cli.py`)
* `python -m outreach.cli fingerprint [--limit N]`: Runs passive technographic detection on imported candidate websites.
* `python -m outreach.cli harvest --direct-clients`: Ingests candidate e-commerce and business domains.
* `python -m outreach.cli send --audience direct_client`: Dispatches calibrated end-client copy.

---

## 3. Scope Boundaries & Constraints

* **Do:** Provide 100% functional passive technographic detection without requiring an active paid BuiltWith plan.
* **Do:** Structure the code so plugging in a BuiltWith API key instantly upgrades the analyzer to official MCP/API data.
* **Do:** Maintain strict separation between agency outreach and direct end-client outreach in templates and logs.
* **Don't:** Send technical jargon to non-technical business owners; keep end-client copy focused on uptime, customer transactions, and fixed €140 pricing.
* **Don't:** Run invasive vulnerability exploits against target websites; detection must remain strictly passive.
