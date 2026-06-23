# SPEC.md — alexseif.com

> **Version:** 1.2 | **Date:** 2026-06-23
> **Purpose:** Source of truth for all work on this repository. Agnostic to any specific LLM.
> **Scope:** This file covers ONLY alexseif.com. freeworld-job-finder and php-jobspy have their own specs.

---

## 1. What This Repository Is

`alexseif.com` is Alex Seif's professional anchor — the canonical place where identity, experience, and credibility live. It is not a product, not a startup, not a side project.

**Two target audiences:**

**Persona A — Principal / Staff Engineer Hiring Managers**
Senior enough to own architecture decisions, hands-on enough to implement them, proven at scale in hostile environments: air-gapped ministries, legacy bank networks, high-concurrency scheduling.

**Persona B — NGO Technical Partners**
Organisations needing an embedded fractional technical lead to own the full engineering function: architecture, delivery oversight, vendor evaluation, knowledge transfer.

---

## 2. Scope

**In scope:**
- Professional identity, title, and positioning copy
- Resume page (`/resume`) — rendered from `Resume.md`
- Case studies (`/case-studies/`) — rendered from `/projects/*.md`
- Homepage sections (Hero, Technical Grid, NGO section, World Map, CTA)
- SEO metadata and JSON-LD schema
- Architecture Decision Records — linked from resume once published

**Out of scope:**
- php-jobspy scraping logic
- freeworld-job-finder orchestrator
- Any backend API or server-side business logic

---

## 3. Tech Stack (No changes without approval)

| Layer | Technology |
|---|---|
| Framework | Next.js 16 (App Router) |
| Language | TypeScript 5 |
| Styling | TailwindCSS 4 + tw-animate-css |
| UI Primitives | shadcn/ui + Radix UI |
| Animation | Framer Motion |
| Fonts | Amiri, Inter, Playfair Display (Google Fonts) |
| Analytics | Vercel Analytics + GTM |
| Content | `Resume.md`, `/projects/*.md` |
| Deployment | `deployer.sh` → DigitalOcean |

---

## 4. Resolved Decisions

**Q1 — CTA Strategy:** Path B — Brevo + existing direct contacts.
Keep Email and WhatsApp buttons in the Hero (NGO contacts in the Gulf and Egypt reach for WhatsApp first). Remove Calendly. All section-level CTA buttons (Path Discovery, NGO section) trigger the Brevo conversation widget.

**Q2 — ADR Hosting:** Path B — Standalone public repo `github.com/alexseif/decisions`.
Cleaner resume URL. Signals intentional architectural documentation practice to Principal Engineer hiring managers.

---

## 5. Content Integrity Rule

> [!CAUTION]
> `Resume.md` content has been partially AI-generated and not fully reviewed for accuracy. Skills and experience must be human-verified before use in job applications. AI assists formatting only — it does not own content decisions.

---

## 6. Code Style

- Server Components in `app/` — no `"use client"` unless interactivity is required
- One responsibility per component file
- Design tokens only — no raw hex values in TSX (`text-primary` not `#B8860B`)
- All Framer Motion variants from `components/home/animations.ts` only
- `Resume.md` is the content source — TSX is a renderer only

---

## 7. Testing Standards

| Type | Command | Required |
|---|---|---|
| Build | `cd frontend && npm run build` | Every commit |
| Lint | `npm run lint` | Every commit |
| Visual | Browser screenshot | UI changes |
| SEO | DevTools: title + JSON-LD | Metadata changes |

---

## 8. Boundaries

**Always:** Preserve Arabic greeting, Rafiq concept, dark-mode palette. Build must pass before commit.

**Ask first:** Any new homepage section. Calendly/Brevo changes. Altering case study slugs.

**Never:** Add npm deps without approval. Use raw hex values in TSX. Commit AI-generated resume content without human review.
