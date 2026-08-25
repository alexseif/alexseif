# Engineering & Architecture Work Log

**Session Date:** 2026-08-25  
**Primary Objective:** Position Alex Seif for permanent Senior Software Architect / Principal Systems Engineer roles in the Netherlands / EU (€90k–€120k+ tier), establish `alexseif.com` as the single source of truth, and optimize performance for Google PageSpeed 90+.

---

## 1. Summary of Work Accomplished

### A. Migration from YAML to Markdown Project Dossiers
- **Frontmatter Automation:** Built [`scripts/inject_frontmatter.py`](file:///var/www/alexseif.com/scripts/inject_frontmatter.py) to parse legacy YAML files and inject standardized YAML frontmatter (`slug`, `title`, `year`, `client_name`, `client_type`, `project_role`, `subtitle`, `tech_stack`, `selected`) across all 55 case studies in [`projects/hsm_exports/`](file:///var/www/alexseif.com/projects/hsm_exports) and [`projects/selected/hsm_exports/`](file:///var/www/alexseif.com/projects/selected/hsm_exports).
- **Compilation Scripts:** Updated [`compile_hsm.sh`](file:///var/www/alexseif.com/projects/compile_hsm.sh) and [`compile_selected_hsm.sh`](file:///var/www/alexseif.com/projects/compile_selected_hsm.sh) to automatically run frontmatter injection on subsequent export runs.
- **Frontend Data Layer:** Rewrote [`frontend/lib/projects.ts`](file:///var/www/alexseif.com/frontend/lib/projects.ts) to parse markdown files with `gray-matter` with caching and dynamic slug routing.

### B. Portfolio & Case Studies UI Overhaul
- **Two-Tier Case Studies Page ([`frontend/app/case-studies/page.tsx`](file:///var/www/alexseif.com/frontend/app/case-studies/page.tsx)):** Featured Architectural Engagements at the top, followed by the complete chronological Project Vault archive.
- **Case Study Detail Pages ([`frontend/app/case-studies/[slug]/page.tsx`](file:///var/www/alexseif.com/frontend/app/case-studies/[slug]/page.tsx)):** Added Monospace Blueprint Terminal frames (`<pre>` container with Geist Mono styling, scroll, and copy) to render ASCII/text architecture diagrams cleanly, plus markdown table rendering.
- **Homepage Project Selection ([`frontend/app/page.tsx`](file:///var/www/alexseif.com/frontend/app/page.tsx)):** Dynamically selects 4 random projects from the curated pool of selected dossiers for fresh showcase rendering.

### C. ATS & Human-Optimized Dutch HSM Executive CV & PDF Pipeline
- **Positioning:** Reframed content as Senior Software Architect & Principal Systems Engineer targeting the Netherlands (€90k–€120k+ tier).
- **Single Source of Truth:** Removed LinkedIn and GitHub from resume header and web view; established `alexseif.com` and `alexseif.com/case-studies` as the canonical destination.
- **PAR/STAR Methodology:** Replaced fragmented dots/snippets with complete, un-truncated architectural deep dives (`barincairo`, `Greek Community of Alexandria`, `NSCE`, `Wallety`) and quantified corporate experience (`iSoft`, `MITCHDesigns`).
- **Programmatic Headless Chrome PDF Generator ([`scripts/generate_pdf.py`](file:///var/www/alexseif.com/scripts/generate_pdf.py)):** Automated A4 PDF generation via Google Chrome Headless, outputting verified selectable PDFs to [`Alex_Seif_Software_Architect_CV.pdf`](file:///var/www/alexseif.com/Alex_Seif_Software_Architect_CV.pdf) and [`frontend/public/Alex_Seif_Software_Architect_CV.pdf`](file:///var/www/alexseif.com/frontend/public/Alex_Seif_Software_Architect_CV.pdf).

### D. Homepage Copy & Service Architecture
- **Hero Section ([`frontend/components/home/HeroSection.tsx`](file:///var/www/alexseif.com/frontend/components/home/HeroSection.tsx)):**
  - Clean authoritative greeting (`أهلاً و سهلاً` / `WELCOME` / `ALEX SEIF`).
  - Direct, minimal copy: *"20 years of hands-on software architecture. Specializing in high-concurrency PHP/Symfony ecosystems, distributed database optimization, and hostile-environment infrastructure. // Pragmatic engineering. Zero downtime."*
  - Direct CTA action buttons: `Explore Case Studies` and `Executive CV (PDF)`.
- **Stats Counter ([`frontend/components/home/StatCounterSection.tsx`](file:///var/www/alexseif.com/frontend/components/home/StatCounterSection.tsx)):** Replaced `9 Countries` with `55+ Architectural Systems`.
- **Core Services Grid ([`frontend/components/home/TechnicalGridSection.tsx`](file:///var/www/alexseif.com/frontend/components/home/TechnicalGridSection.tsx)):** Explicitly grounded in websites, custom web apps, and digital platforms:
  1. *Custom Web Apps & New Platforms* (SaaS, Web Apps, Portals)
  2. *Website Modernization & Speed* (CMS Decoupling, Performance, Zero Downtime)
  3. *Fractional Web Tech Lead* (Fractional CTO, Agency Oversight, Web Security)
- **New Requirements Elicitation Landing Page ([`frontend/app/requirements-elicitation/page.tsx`](file:///var/www/alexseif.com/frontend/app/requirements-elicitation/page.tsx)):** Standalone diagnostic consultation sprint, highlighting that *"Sound architecture decisions help most when the end goal is vague."*
- **NGO Partner Section ([`frontend/components/home/NGOPartnerSection.tsx`](file:///var/www/alexseif.com/frontend/components/home/NGOPartnerSection.tsx)):** Streamlined 4-card layout focusing on UN/GIZ/EU donor compliance, agency auditing, and fixed retainer partnerships.

### E. CI/CD & Performance Engineering
- **GitHub Actions Pipeline ([`.github/workflows/ci-cd.yml`](file:///var/www/alexseif.com/.github/workflows/ci-cd.yml)):** Automated Python frontmatter injection, resume compilation, Next.js build verification, and automated SSH deployment trigger.
- **Server Safeguards ([`deployer.sh`](file:///var/www/alexseif.com/deployer.sh)):** Added automated port cleanup (`fuser -k 3000/tcp`) and PM2 restart stability.
- **PageSpeed & Lighthouse Optimizations:**
  - Deferred Google Tag Manager to `strategy="lazyOnload"` to eliminate Total Blocking Time (TBT).
  - Added `display: "swap"` to Google Fonts (`Amiri`, `Inter`, `Playfair_Display`).
  - Removed dynamic import hydration waterfalls in `HomeClient.tsx` to improve FCP/LCP and eliminate CLS.

---

## 2. Verified Git Commits Pushed to `origin/master`
1. `41830934` — `feat: migrate project architecture, add requirements elicitation landing, and configure GitHub Actions CI/CD`
2. `b90da381` — `perf: optimize font loading, defer GTM to lazyOnload, and eliminate hydration waterfalls`

---

## 3. Backlog & Agenda for Tomorrow

1. **Production Deployment Execution:**
   - Run `bash deployer.sh` on the production server.
   - Run Google PageSpeed & Lighthouse tests on mobile/desktop to verify the 90+ score.
2. **Further Homepage Polish (Optional):**
   - Review "The Honest Version" / `PathDiscoverySection.tsx` copy.
   - Fine-tune any additional metadata / SEO descriptions.
3. **Outreach & Job Application Strategy:**
   - Prepare Dutch recruiter cover notes and personalized application blurbs tailored to the new CV and `alexseif.com` case studies.
