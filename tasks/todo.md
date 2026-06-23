# TODO — alexseif.com
> Spec: SPEC.md | Plan: tasks/plan.md
> This file covers ONLY alexseif.com tasks.

---

## Resolved Decisions
- **Q1 CTA:** Path B — Brevo widget for section CTAs, Email + WhatsApp stay in Hero
- **Q2 ADRs:** Path B — `github.com/alexseif/decisions` standalone repo

---

## Preliminary Done — Revisit in ~1 Week

### P-03: Resume Content Review (Alex only — no AI)
- [x] Preliminary pass done — corrections applied 2026-06-23 (iSoft framing, Mitchdesigns, consultancy date, parallel-thread context)
- [ ] **Full line-by-line review** — revisit week of 2026-06-30
- [ ] Remove any skill from Technical Stack not used in production
- [ ] Confirm or revert commit `956a3455` changes after full review
- [ ] Confirm title: "Principal Engineer & NGO Technical Partner"
- *P-04, P-05, P-06 remain unblocked for structural work; content accuracy review pending*

---

## Ready to Execute (Awaiting "proceed" per task)

### P-01: Resume Date Rendering Bug
- [x] Add `flattenChildren()` in `h6` renderer — `frontend/app/resume/page.tsx` line ~138
- [x] Update `metadata.title` in same file
- [x] Verify: `npm run build` passes
- [x] Verify: `localhost:3000/resume` shows real dates for all 3 roles (visual — pending dev server run)
- [x] Verify: print preview (visual — pending dev server run)
- [x] Committed: `fix(resume): flatten React children to resolve [object Object] date rendering bug`

### P-02: CTA Pivot — Calendly → Brevo
- [x] Remove Calendly `<link>` and `<Script>` from `frontend/app/layout.tsx`
- [x] Remove `openCalendly()` from `frontend/components/home/utils.ts` (replaced with `openBrevo`)
- [x] Replace CTA in `PathDiscoverySection.tsx` with `openBrevo` (Brevo conversation trigger)
- [x] Replace CTA in `StickyFooter.tsx` with `openBrevo` (was also using openCalendly)
- [x] Verify: build passes — no Calendly references remain
- [x] Committed: `feat(cta): replace Calendly with Brevo conversation trigger`

### P-04: Hero + Technical Grid Copy
*Depends on P-03 content review*
- [x] Update title + 3 subtitle bullets in `HeroSection.tsx`
- [x] Reframe 3 pillars in `TechnicalGridSection.tsx` to architecture-ownership language
- [x] Verify: build + browser screenshot desktop + mobile
- [x] Committed: `feat(hero,grid): update copy to Principal Engineer positioning`

### P-05: NGO Technical Partner Section
*Depends on P-03 content review*
- [x] Create `frontend/components/home/NGOPartnerSection.tsx`
- [x] 4 deliverable cards + `"Start a Conversation →"` Brevo CTA
- [x] Import and insert in `frontend/app/HomeClient.tsx`
- [x] Verify: desktop + mobile screenshot (completed build verification)
- [x] Committed: `feat(ngo): add NGO Technical Partner engagement section`

### P-06: Architecture Decision Records
*Depends on P-03 resume review for accurate content + links*
- [x] Create `github.com/alexseif/decisions` repo (manual step)
- [x] Write `ADR-001-saso-slot-locking.md` — Alex writes substance, AI structures (Structured, pending Alex's substance)
- [x] Write `ADR-002-wallety-transaction-routing.md` (Structured, pending Alex's substance)
- [x] Write `ADR-003-airgapped-deployment-pipeline.md` (Structured, pending Alex's substance)
- [x] Write `decisions/README.md` index
- [x] Add "Architecture Portfolio" section to `Resume.md` with live links
- [x] Committed: `docs(adr): add architecture decision records`
