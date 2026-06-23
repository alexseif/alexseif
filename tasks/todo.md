# TODO — alexseif.com
> Spec: SPEC.md | Plan: tasks/plan.md
> This file covers ONLY alexseif.com tasks.

---

## Resolved Decisions
- **Q1 CTA:** Path B — Brevo widget for section CTAs, Email + WhatsApp stay in Hero
- **Q2 ADRs:** Path B — `github.com/alexseif/decisions` standalone repo

---

## Still Blocked — Human Task First

### P-03: Resume Content Review (Alex only — no AI)
- [ ] Read `Resume.md` line by line — confirm or correct each bullet
- [ ] Remove any skill from Technical Stack not used in production
- [ ] Review commit `956a3455` changes — confirm or request revert
- [ ] Confirm title: "Principal Engineer & NGO Technical Partner"
- *P-04, P-05, P-06 resume links depend on this being done first*

---

## Ready to Execute (Awaiting "proceed" per task)

### P-01: Resume Date Rendering Bug
- [ ] Add `flattenChildren()` in `h6` renderer — `frontend/app/resume/page.tsx` line ~138
- [ ] Update `metadata.title` in same file
- [ ] Verify: `npm run build` passes
- [ ] Verify: `localhost:3000/resume` shows real dates for all 3 roles
- [ ] Verify: print preview
- [ ] **→ Await "proceed"** then commit: `fix(resume): flatten React children to resolve [object Object] date rendering bug`

### P-02: CTA Pivot — Calendly → Brevo
- [ ] Remove Calendly `<link>` and `<Script>` from `frontend/app/layout.tsx`
- [ ] Remove `openCalendly()` from `frontend/components/home/utils.ts`
- [ ] Replace CTA in `PathDiscoverySection.tsx` with `window.BrevoConversations?.('openChat', true)`
- [ ] Verify: no Calendly network requests, Brevo opens
- [ ] **→ Await "proceed"** then commit: `feat(cta): replace Calendly with Brevo conversation trigger`

### P-04: Hero + Technical Grid Copy
*Depends on P-03 content review*
- [ ] Update title + 3 subtitle bullets in `HeroSection.tsx`
- [ ] Reframe 3 pillars in `TechnicalGridSection.tsx` to architecture-ownership language
- [ ] Verify: build + browser screenshot desktop + mobile
- [ ] **→ Await "proceed"** then commit: `feat(hero,grid): update copy to Principal Engineer positioning`

### P-05: NGO Technical Partner Section
*Depends on P-03 content review*
- [ ] Create `frontend/components/home/NGOPartnerSection.tsx`
- [ ] 4 deliverable cards + `"Start a Conversation →"` Brevo CTA
- [ ] Import and insert in `frontend/app/HomeClient.tsx`
- [ ] Verify: desktop + mobile screenshot
- [ ] **→ Await "proceed"** then commit: `feat(ngo): add NGO Technical Partner engagement section`

### P-06: Architecture Decision Records
*Depends on P-03 resume review for accurate content + links*
- [ ] Create `github.com/alexseif/decisions` repo (manual step)
- [ ] Write `ADR-001-saso-slot-locking.md` — Alex writes substance, AI structures
- [ ] Write `ADR-002-wallety-transaction-routing.md`
- [ ] Write `ADR-003-airgapped-deployment-pipeline.md`
- [ ] Write `decisions/README.md` index
- [ ] Add "Architecture Portfolio" section to `Resume.md` with live links
- [ ] **→ Await "proceed"** then commit: `docs(adr): add architecture decision records`
