# SPEC.md — alexseif.com

> **Version:** 1.5 | **Date:** 2026-07-01
> **Purpose:** Source of truth for all work on this repository. Agnostic to any specific LLM.
> **Scope:** This file covers ONLY alexseif.com. freeworld-job-finder and php-jobspy have their own specs.

---

## 1. Professional Objective & Brand Identity

`alexseif.com` is Alex Seif's professional anchor — the canonical place where identity, experience, and credibility live. It is not a product, not a startup, not a side project.

**Targeted Professional Title:**
Software Architect & NGO Technical Partner

**Tiered Professional Objectives:**
1. **Primary Objective (European/Global Placement):** Secure a high-quality Software Architecture or Senior PHP/Full-Stack Engineering role (contract, remote, or permanent) with a strong preference for relocation to the Netherlands.
2. **Secondary Objective (NGO Sector):** Attract NGOs seeking a Technical Partner for specific software needs, including: secure web portals, Data Sovereignty compliance, custom RAG pipelines, AI workflow integration, and staff training on AI prompting/configuration.
3. **Tertiary Objective (Market Value):** Capture highly compensated remote Software Architecture, Senior PHP Engineer, or Principal Engineer contracts/roles globally.

**Brand Ethos & Positioning (Sourced from `alexseif_brand_identity.md`):**
*Tagline:* "Two decades of owning architecture decisions at national scale."
*Core Concept:* Operating at the intersection of architecture ownership and technical problem solving in hostile environments. The brand positions Alex as senior enough to own architecture decisions, hands-on enough to implement them, and experienced enough to have done it at scale (air-gapped ministries, legacy bank networks, high-concurrency scheduling systems).
*Keywords:* Architecture Ownership, Hostile-Environment Infrastructure, Operational Stability, Technical Authority, Reliability.

**Target Audiences (SEO Personas):**
*   **Persona A — European / Global Engineering Leaders:** Hiring managers (Directors/VP of Engineering) seeking an expert PHP/Symfony Architect capable of owning decisions, implementing them, and navigating complex legacy or high-concurrency environments.
*   **Persona B — NGO Decision-Makers:** Organisations needing an embedded fractional technical lead to modernize infrastructure, integrate production-ready AI, and ensure strict data sovereignty.

---

## 2. Scope & Resume Compilation Pipeline

**In scope:**
- Professional identity, title, and positioning copy
- Case studies (`/case-studies/`) — rendered from `/projects/*.yaml`
- Professional experiences — rendered from `/experiences/*.yaml`
- Selected projects (for resume) — pulled via `/selected_projects/`
- Homepage sections (Hero, Technical Grid, NGO section, World Map, CTA)
- SEO metadata and JSON-LD schema (Targeting "Principal Engineer", "NGO Technical Partner", "Software Architect")

**Resume Compilation Architecture (`/resume`):**
The precise compilation pipeline, data structures, and schemas for `Resume.md` are documented in `RESUME_SPEC.md`. It strictly uses a pure YAML data store approach (Path B).

---

## 3. Tech Stack (No changes without approval)

| Layer | Technology |
|---|---|
| Framework | Next.js 16 (App Router) |
| Language | TypeScript 5 |
| Styling | TailwindCSS 4 + tw-animate-css |
| UI Primitives | shadcn/ui + Radix UI |
| Animation | Framer Motion |
| Analytics | Vercel Analytics + GTM |
| Data/Content | `.yaml` (Experiences, Projects) + Base `.md` files |
| Deployment | `deployer.sh` → DigitalOcean |

---

## 4. Content Structure

### Projects format (`projects/*.yaml`)
```yaml
project_id: "string"
client_name: "string"
client_type: "string"
project_role: "string"
timeline:
  start_year: integer
  end_year: integer
architectural_context: "string"
technical_stack:
  languages: ["string"]
  frameworks: ["string"]
  infrastructure_cloud: ["string"]
  data_layers: ["string"]
core_competencies: ["string"]
quantifiable_engineering_impact:
  - "string"
edge_cases_managed:
  - "string"
```

### Experiences format (`experiences/*.yaml`)
```yaml
company_agency: "string"           
timeline:
  start_year: integer
  end_year: integer
primary_role: "string"             
agency_level_impact:               
  - "string"
```

### Selected Projects format (`selected_projects/*.yaml`)
References to `projects/*.yaml` items that are specifically highlighted in the generated `Resume.md`.

---

## 5. Resolved Decisions

**Q1 — CTA Strategy:** Path B — Brevo + existing direct contacts.
Keep Email and WhatsApp buttons in the Hero. All section-level CTA buttons trigger the Brevo conversation widget.

---

## 6. Code Style & Design System (Brand Alignment)
> **Rule:** All design and UI implementation must adhere strictly to the identity rules laid out in `@alexseif_brand_identity.md`.

**Typography:**
*   **Primary Arabic / Serif (Amiri):** Used for large greetings (أهلاً و سهلاً) and brand initials (أ. س.).
*   **Primary Sans-Serif (Inter):** Used for body copy, descriptions, and functional UI elements (clean aesthetic).
*   **Secondary Serif (Playfair Display):** Reserved for English headings to match the Amiri tone.
*   **Monospace (Geist Mono / System Mono):** Used for technical UI accents, metadata, subheadings (e.g., `// The Stack`), and uppercase text to reinforce the engineering focus.

**Color Palette:**
*   **Background (Dark):** Deep blacks `#050505` and very dark greys.
*   **Foreground (Light):** Crisp whites `#e8e8e8` and light greys for text readability.
*   **Signature Accent (Dark Goldenrod - `#B8860B`):** Strategic use for map points and key interactive elements.
*   **Muted Elements:** Translucent greys (`text-foreground/70`) for secondary text, borders, and grid lines.

**Visual Motifs & UI Elements:**
*   **The Blueprint Grid:** A background motif (`blueprint-grid`) reinforcing the systems design theme.
*   **Spacing:** Extensive use of negative space.
*   **Minimalist Badges & Outlines:** Technical specifications and buttons use thin borders and uppercase monospace text.

---

## 7. Testing Standards

| Type | Command | Required |
|---|---|---|
| Build | `npm run build` (Also generates `Resume.md`) | Every commit |
| Lint | `npm run lint` | Every commit |
| Visual | Browser screenshot | UI changes |
| SEO | DevTools: title + JSON-LD | Metadata changes |

---

## 8. Boundaries

**Always:** Preserve Arabic greeting, Rafiq concept, dark-mode palette. Align with Brand Tone of Voice.
**Ask first:** Any new homepage section. Altering case study slugs.
**Never:** Add npm deps without approval. Use raw hex values in TSX. Commit AI-generated resume content without human review.
