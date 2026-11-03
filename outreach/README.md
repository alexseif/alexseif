# Multi-Track PHP & Node.js Outreach Automation Agent

A self-contained Python CLI pipeline to prospect, fingerprint, enrich, and dispatch calibrated cold outreach across two distinct tracks:
1. **Track 1 (`agency`):** Digital agencies and web bureaus managing multi-client PHP/Node.js fleets.
2. **Track 2 (`direct_client`):** Direct business websites running WordPress, WooCommerce, Drupal, Magento, or PHP.

## Pricing & Commercial Structure
* Fixed Entry Package: EUR 140 per site / application (includes full pre-patch backup, dependencies update, version upgrade, and zero-downtime runtime hotpatch).
* Complex / Legacy Stacks: Sized by codebase architecture at EUR 75/hour.
* Ongoing Retainers: Monthly outsourcing retainers available, billed either independently or through a registered corporate entity.

---

## Technographic Intelligence & BuiltWith Bridge
The system operates with a **dual-engine technographic architecture**:
* **Passive Stack Fingerprinter (Zero-Cost Default):** Inspects public HTTP headers, generator tags, `/wp-json/`, cookies, and script footprints to detect WordPress, Drupal, Magento, and PHP for free.
* **BuiltWith MCP & REST Gateway:** Automatically bridges to `https://api.builtwith.com/mcp` and REST lookup endpoints when `BUILTWITH_API_KEY` is present. Caches all lookups in SQLite table `builtwith_cache` to ensure zero redundant API credit spend.

---

## Dynamic UTM Link Attribution
All landing page links (`https://alexseif.com/php-emergency-patch`) are automatically signed with recipient-specific UTM tracking parameters:
```text
?utm_source=outreach&utm_medium=email&utm_campaign={track}_{template_slug}&utm_content={domain}
```
Example:
```text
https://alexseif.com/php-emergency-patch?utm_source=outreach&utm_medium=email&utm_campaign=direct_client_v1&utm_content=acme-store.nl
```

---

## Operational Commands

### 1. View Pipeline Status & Multi-Track Metrics
```bash
# View combined summary across all tracks:
./venv/bin/python -m outreach.cli status

# View agency track:
./venv/bin/python -m outreach.cli status --track agency

# View direct end-client track:
./venv/bin/python -m outreach.cli status --track direct_client
```

### 2. Inspect a Domain's Tech Stack
```bash
./venv/bin/python -m outreach.cli inspect example.com
```

### 3. Batch Fingerprint Imported Targets
```bash
./venv/bin/python -m outreach.cli fingerprint --track direct_client
```

### 4. Template Registry & A/B Tracking
View active email templates and their assigned campaign tracks:
```bash
./venv/bin/python -m outreach.cli templates
```
Templates are stored as plain text files in `outreach/templates/` (`agency_v1.txt`, `direct_client_v1.txt`).

### 5. Import Direct End-Client Targets
```bash
./venv/bin/python -m outreach.cli import --file outreach/targets_clients.csv --track direct_client
```

### 6. Safe Preview (Dry-Run by Track)
```bash
# Preview agency outreach:
./venv/bin/python -m outreach.cli send --track agency

# Preview direct end-client outreach:
./venv/bin/python -m outreach.cli send --track direct_client
```

### 7. Live Dispatch (with 60-90s Safety Delays)
```bash
./venv/bin/python -m outreach.cli send --track direct_client --live --limit 10
```

### 8. List Targets & Export Audit Reports
```bash
# List sent direct clients:
./venv/bin/python -m outreach.cli list --track direct_client --status sent

# Export complete report with UTM URLs and template slugs:
./venv/bin/python -m outreach.cli export --output outreach/campaign_report.csv
```
