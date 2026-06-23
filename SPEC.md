# SPEC.md — alexseif.com Portfolio

> **Spec Version:** 1.0  
> **Date:** 2026-06-23  
> **Scope:** Persona-targeted messaging and architectural refinements  
> **Target Personas:** Principal/Staff Engineer Recruiters & NGO Technical Partners

---

## 1. Objective

Refocus the alexseif.com portfolio to credibly speak to two specific, high-value hiring audiences:

### Persona A — Principal / Staff Engineer
> *"Senior enough to own architecture decisions, hands-on enough to implement them, experienced enough to have done it at scale in hostile environments (air-gapped ministries, legacy bank networks, high-concurrency scheduling). That's a specific and rare thing."*

- **Who they are:** Engineering Directors, VPEs, CTOs at product companies, agencies, or public-sector bodies recruiting for architecture-level ownership.
- **What they need to see:** Proof of system design at scale, ownership of hard problems (concurrency, air-gapped infra, distributed state), technology depth, and engineering leadership — not just feature delivery.
- **Current gap:** The site title says "Senior Software Engineer" which undersells the demonstrated scope. The Projects section shows the evidence, but the framing (hero copy, grid section) doesn't connect it to an architecture-ownership narrative.

### Persona B — NGO Technical Partner
> *"An embedded fractional technical lead who can own the full engineering function of an NGO: architecture, delivery oversight, vendor negotiation, and knowledge transfer."*

- **Who they are:** NGO founders, executive directors, and program leads without an in-house CTO who need a trusted technical partner for 3–24 month engagements.
- **What they need to see:** Trustworthiness, mission alignment, operational reliability, communication in plain language, and a defined engagement model.
- **Current gap:** The "Path Discovery" section is the closest thing to an engagement CTA, but there is no dedicated NGO framing, no visible engagement model, and no differentiation between "hire me as an employee" vs "engage me as a partner."

---

## 2. Core Features & Acceptance Criteria

### F-01: Dual-Persona Hero Refinement
**What:** Update `HeroSection.tsx` to reflect the Principal Engineer / NGO Technical Partner positioning.  
**Acceptance Criteria:**
- Title line becomes: `"Principal Engineer & NGO Technical Partner"`
- Subtitle bullet list is rewritten to signal architecture ownership and delivery at hostile-environment scale
- The existing Arabic greeting and visual motif are preserved
- The contact CTAs remain unchanged

### F-02: Technical Grid — Architecture Ownership Signal
**What:** Rewrite `TechnicalGridSection.tsx` to speak directly to Principal/Staff-level concerns.  
**Acceptance Criteria:**
- Three pillars reframed around *architecture ownership* problems, not generic skill labels
- Pillar 01: **Hostile-Environment Infrastructure** (air-gapped, legacy bank networks, state-level compliance)
- Pillar 02: **High-Concurrency State Engineering** (distributed locking, booking engines, financial transactions)
- Pillar 03: **Agentic Systems & Legacy Modernization** (multi-agent orchestration, headless decoupling, RAG pipelines)
- Tech badges updated per pillar to reflect exact technologies deployed in production

### F-03: NGO Technical Partner Engagement Section
**What:** A new standalone section between `TechnicalGridSection` and `CaseStudiesSection` that speaks directly to the NGO audience.  
**Acceptance Criteria:**
- Visually distinct from the rest of the page (uses `bg-card/30` panel pattern like PathDiscovery)
- Clearly explains the engagement model: fractional technical lead, embedded partner, not just a vendor
- Lists 3–4 concrete deliverables an NGO can expect: architecture ownership, delivery oversight, vendor evaluation, team knowledge transfer
- A secondary CTA ("Discuss a Partnership" → Calendly) alongside the existing "Path Discovery" button
- Aligns with the Arabic brand voice and "Rafiq" framing

### F-04: Case Studies — Principal Engineer Framing
**What:** Update case study metadata titles and subtitles to use architecture-ownership language.  
**Acceptance Criteria:**
- `2021-saso.md` — subtitle emphasises distributed state locking and scheduling engine design
- `2020-moi-egypt-traffic.md` — subtitle emphasises air-gapped deployment pipeline and Moodle enterprise governance
- `2009-wallety.md` — subtitle emphasises zero-to-one fintech architecture under hostile network conditions
- Each case study page uses language that would pass a "Principal Engineer portfolio review"

### F-05: Metadata, Schema.org & SEO Alignment
**What:** Update `layout.tsx` metadata and JSON-LD to reflect new title.  
**Acceptance Criteria:**
- `<title>` becomes: `Alex Seif | Principal Engineer & NGO Technical Partner`
- `jobTitle` in JSON-LD becomes: `"Principal Engineer & NGO Technical Partner"`
- `keywords` array includes: `"Principal Engineer"`, `"Staff Engineer"`, `"Air-Gapped Deployment"`, `"Distributed State Locking"`, `"NGO CTO"`
- `description` meta updated to reference hostile environments and architecture ownership
- `page.tsx` JSON-LD Person schema updated to match

### F-06: Source Documents Alignment
**What:** Update the source-of-truth markdown documents.  
**Acceptance Criteria:**
- `Resume.md` front-matter `title` updated to `"Principal Engineer & NGO Technical Partner"`
- `objective/alexseif-objective.md` section 1 updated to reflect the new primary title
- `alexseif_brand_identity.md` brand ethos and tagline updated to reflect new positioning
- `objective/seo-strategy.md` target personas updated to reflect new primary title

---

## 3. Tech Stack (Existing — No Changes)

| Layer | Technology |
|---|---|
| Framework | Next.js 16 (App Router) |
| Language | TypeScript 5 |
| Styling | TailwindCSS 4 + tw-animate-css |
| UI Primitives | shadcn/ui + Radix UI |
| Animation | Framer Motion |
| Fonts | Google Fonts: Amiri (Arabic), Inter (Sans), Playfair Display (Serif) |
| Analytics | Vercel Analytics + Google Tag Manager |
| Scheduling | Calendly widget (lazyOnload) |
| Content | Markdown files in `/projects/` |
| Deployment | Custom `deployer.sh` → DigitalOcean |

**Constraint:** No new dependencies introduced. Work within the existing stack only.

---

## 4. Code Style & Separation of Concern

- **Component boundaries:** One responsibility per file. No mixing of data-fetching logic with presentation.
- **Data mutation:** Project `.md` frontmatter changes are content changes — not code changes. Treat them separately.
- **Server vs Client:** `page.tsx` remains a Server Component. Any interactivity lives in `"use client"` components.
- **Tailwind utility discipline:** Use design tokens (`text-primary`, `bg-card`, `border-border`) — never raw hex values in component files.
- **Animation patterns:** All Framer Motion variants must come from `animations.ts`. No inline variant objects.
- **TypeScript:** No `any` types in new code. Existing `any` in `CaseStudiesSection.tsx` is tolerated but not extended.
- **Git commits:** One commit per feature (F-01 through F-06), conventional commit format: `feat(hero): update title to Principal Engineer positioning`.

---

## 5. Testing Strategy

| Test Type | Method | Scope |
|---|---|---|
| **Build verification** | `cd frontend && npm run build` | All tasks |
| **Type check** | `tsc --noEmit` | All tasks |
| **Lint** | `npm run lint` | All tasks |
| **Visual regression** | Browser subagent screenshot of homepage | F-01, F-02, F-03 |
| **SEO audit** | Manual browser check of `<title>`, `<meta description>`, JSON-LD | F-05 |
| **Mobile check** | Browser subagent at 390px width | F-01, F-03 |

No unit tests required for content/copy changes. Build must pass clean before any commit.

---

## 6. Boundaries

### Always Do
- Preserve the existing Arabic greeting, Rafiq branding, and Calendly integration
- Keep the dark-mode only design system (`#050505` background, `#B8860B` primary gold)
- Maintain all existing animation patterns (fadeInUp, stagger) from `animations.ts`
- Verify `npm run build` passes before committing each feature

### Ask First About
- Any new section added to the homepage (scroll order, padding, visual weight)
- Any changes to the Calendly link or contact methods
- Removing or deprioritising any existing case study from the elite slug list
- Changing the `deployer.sh` or `ship.sh` scripts

### Never Do
- Add new npm dependencies
- Change the deployment infrastructure
- Remove the "20+ years" narrative anchor — it is a key differentiator
- Alter existing URLs or page routes (SEO link equity protection)
- Use raw colour values (`#B8860B`) in TSX files — use `text-primary` tokens
