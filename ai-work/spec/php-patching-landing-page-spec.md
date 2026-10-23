# Sub-Spec: PHP Emergency Patching & php2shell Remediation Landing Page

> **Topic:** `php-patching-landing-page`  
> **Status:** Draft  
> **Source Objective:** `ai-work/OBJECTIVE.md`  

---

## 1. Functional Requirements

### 1.1 Canonical & Short-Link Routing
- **Primary Canonical Route**: `/php-emergency-patch`
- **Short-Link / Campaign Route**: `/php2shell` configured via `next.config.mjs` redirect or app route rewrite to `/php-emergency-patch`.
- **Sitemap**: `/php-emergency-patch` registered in `frontend/app/sitemap.ts` with `weekly` change frequency and priority `0.85`.

### 1.2 Structured Data (Schema.org JSON-LD)
- **`Service` Schema**:
  - Name: "PHP Emergency Patching & php2shell Incident Remediation"
  - Provider: Alex Seif, Software Architect
  - Area Served: Worldwide
- **`FAQPage` Schema**:
  - Questions and answers covering WAF sufficiency, WordPress/Laravel vulnerability, legacy runtime patching, and SLA response times.

### 1.3 Page Structure & Content Sections
1. **Header & Navigation**: Return link to homepage (`/`).
2. **Hero Section**:
   - Status badge: `CRITICAL CVE-2026-109618 / CVE-2026-109619`
   - H1: "Emergency PHP Runtime Patching & php2shell Mitigation"
   - Lead paragraph: Technical breakdown of the core engine RCE, affected environments (PHP 5.4+ default configs), and active in-the-wild exploit posture.
3. **The Architectural Reality Check**:
   - Why WAF is a temporary filter, not a fix.
   - Why theme/plugin updates cannot patch engine C-code.
   - Why blind `apt upgrade` without testing risks breaking legacy dependencies.
4. **Service Tiers / Engagement Framework**:
   - Tier 1: Rapid Exposure Audit (2-4 hours)
   - Tier 2: Zero-Downtime Hotpatch & Engine Isolation
   - Tier 3: Production Upgrade & Regression Testing
5. **Technical FAQ**:
   - 4-5 high-intent technical questions with authoritative engineering answers.
6. **Direct CTA**:
   - Direct, low-barrier CTA ("Tell me what you run. I will assess exposure immediately.") with email and contact links.
7. **Footer**: Reuse `@/components/Footer`.

---

## 2. Technical Constraints & Style
- Strict adherence to Next.js App Router conventions.
- Lucide React icons matching current design language.
- Styling: Tailwind CSS utilities consistent with `ngo-technical-partner` and `requirements-elicitation`.
- Zero em dashes (`—`) in text copy.
