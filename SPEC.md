# SPEC.md — alexseif.com

> **Version:** 1.5 | **Date:** 2026-07-01
> **Purpose:** Source of truth for all work on this repository. Agnostic to any specific LLM.
> **Scope:** This file covers ONLY alexseif.com. 
> **Planning Reference:** In any future phase of planning, ALWAYS reference `objective/alexseif-objective.md` and `alexseif_brand_identity.md` for core narrative and brand positioning.

---

## 1. Professional Objective & Brand Identity

`alexseif.com` is Alex Seif's professional anchor — the canonical place where identity, experience, and credibility live. It is not a product, not a startup, not a side project.

**Targeted Professional Title:**
Software Architect & NGO Technical Partner

**Tiered Professional Objectives:**
1. **Primary Objective:** Represent 20+ years of software architecture experience honestly and completely, including projects previously undocumented.
2. **Secondary Objective:** Secure a permanent Software Architect or Principal Engineer role in the Netherlands or EU, with relocation.
3. **Tertiary Objective:** Attract NGOs seeking an embedded Technical Partner for secure web portals, data sovereignty compliance, legacy system rescue, and staff technical capability building.

**Brand Ethos & Positioning (Sourced from `alexseif_brand_identity.md`):**
*Tagline:* "I build the systems behind the systems — and I've been doing it for 20 years."
*Core Concept:* Operating at the intersection of architecture ownership and technical problem solving. The brand positions Alex as a problem solver, not just a credential. It focuses on the hard realities of building systems: "You have a system that can't go down but needs to change." The tone should be human, approachable, and highly competent without being arrogant. The CTA barrier should be lowered from a formal engagement to an open conversation ("Tell me the problem. I'll tell you honestly.").
*Keywords:* Problem Solver, Architecture Ownership, Hostile-Environment Infrastructure, Operational Stability, Human Approachability, Technical Authority.
*Copywriting Source of Truth:* Refer to `HOMEPAGE_COPY.md` for the precise tone and structure of the homepage content.

**Target Audiences (SEO Personas):**
*   **Persona A — European / Global Engineering Leaders:** Hiring managers (Directors/VP of Engineering) seeking an expert PHP/Symfony Architect capable of owning decisions, implementing them, and navigating complex legacy or high-concurrency environments.
*   **Persona B — NGO Decision-Makers:** Organisations needing an embedded fractional technical lead to modernize infrastructure, integrate production-ready AI, and ensure strict data sovereignty.

---

## 2. Scope & Resume Compilation Pipeline

**In scope:**
- Professional identity, title, and positioning copy
- Professional experiences — rendered from `/experiences/*.yaml`
- Selected projects — pulled via `/selected_projects/` (used as the single source for both the Resume and the Case Studies section)
- Homepage sections (Hero, Technical Grid, NGO section, World Map, CTA)
- SEO metadata and JSON-LD schema (Targeting "Software Architect", "NGO Technical Partner", "Principle Engineer")

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

**Q1 — CTA Strategy:** Path B — Brevo + existing direct contacts (WhatsApp + Email).
*Reasoning:* To remain approachable and "chill". WhatsApp is how Egyptians and Gulf clients actually reach out. We shouldn't make them find a widget for primary contact. Keep Email and WhatsApp buttons in the Hero. All section-level CTA buttons trigger the Brevo conversation widget.

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
**Never:** Add npm deps without approval. Use raw hex values in TSX. Commit AI-generated resume content without human review. Own QA execution (design the strategy, but do not execute).
