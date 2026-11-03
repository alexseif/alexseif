# Specification: Dutch Direct Clients Outreach Campaign (WordPress & Drupal)

## 1. Executive Summary
Following the 100% successful execution of Track 1 (22 web development agencies across NL, DE, and UK), Track 2 focuses strictly on direct business owners, e-commerce operators, publishers, and organizations based in the Netherlands operating on WordPress, WooCommerce, and Drupal stacks.

This campaign positions Alex Seif as an independent Software Architect offering immediate zero-downtime hotpatching and runtime remediation for active vulnerabilities (php2shell CVE-2026-109618 / 109619) without disrupting active customers or breaking custom shopping carts.

---

## 2. Target Market & Segmentation
- **Geography**: Netherlands (.nl domains and Dutch-headquartered web operations).
- **Primary CMS Targets**:
  - WordPress / WooCommerce: High-traffic shops, media publishers, and digital services.
  - Drupal: Public organizations, research councils, portals, and service providers.
  - Related PHP stacks (Magento / Custom PHP): Identified through passive technographics.
- **Audience Persona**: Business owners, Managing Directors, operations leads, and technical stakeholders.
- **Greeting & Tone Calibration**:
  - Respectful Dutch business etiquette.
  - When personal names are verified, address `Hi {FirstName},`.
  - When role-based contact points (`info@`, `service@`, `redactie@`) are reached, address `Hi {Company} Team,` rather than robotic raw mailbox prefixes.

---

## 3. Commercial Offer & Value Proposition
- **Fixed Package**: EUR 140 flat per website.
  - Full pre-patch backup.
  - System dependency update.
  - Engine version upgrade.
  - Zero-downtime hotpatching.
- **Hourly Architect Rate**: EUR 75/hour for heavily customized platforms and legacy dependencies.
- **Monthly Maintenance**: Continuous security retainers billed independently or via a registered corporate entity.
- **Call-to-Action**: Quick 5-minute assessment linking to `https://alexseif.com/php-emergency-patch` with granular UTM attribution (`utm_source=outreach&utm_medium=email&utm_campaign=direct_client_v1&utm_content={domain}`).

---

## 4. Architectural Pipeline & Safety Controls
- **Track Separation**: All records tagged strictly with `track = 'direct_client'` in `outreach/outreach.db`.
- **Zero Cross-Pollination**: Agency targets and direct client targets remain completely isolated.
- **Pacing & Rate Limiting**: Random delay between 60 to 90 seconds per email dispatch to guarantee inbox delivery and protect domain sender reputation.
- **Verification Gate**: Mandatory dry-run preview and explicit confirmation before live Brevo dispatch.
