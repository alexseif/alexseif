# Plan — alexseif.com
> Spec: SPEC.md | Updated: 2026-06-23
> This file covers ONLY alexseif.com tasks.

---

## Resolved Decisions

**Q1 — CTA:** Path B. Brevo + Email/WhatsApp. Keep direct contacts in Hero. Remove Calendly. Section CTAs trigger Brevo widget.

**Q2 — ADRs:** Path B. Standalone repo `github.com/alexseif/decisions`.

---

## Dependency Order

```
[Human] P-03 Resume Review → P-01 Date Bug Fix
[Q1]    P-02 CTA Decision  → P-05 NGO Section
[Q2]    P-06 ADR Location  → P-06 ADR Writing + Resume links
        P-04 Hero + Grid   → (after P-03 content verified)
```

P-03 is a **human review task** — not an AI task.

---

## Tasks

### P-01: Resume Date Rendering Bug
**Status:** Ready — no decisions needed
**File:** `frontend/app/resume/page.tsx`
**Root cause:** `props.children?.toString()` at line ~138 fails when React children contain nested markdown (italic dates). Returns `[object Object]`.
**Fix:** Add `flattenChildren(children: React.ReactNode): string` utility in the h6 renderer to recursively extract text from node arrays.
**Also:** Update `metadata.title` to reflect current title positioning.
**Verify:** `npm run build` + `localhost:3000/resume` shows real dates for all 3 roles + print preview.
**Commit:** `fix(resume): flatten React children to resolve [object Object] date rendering bug`

---

### P-02: CTA Pivot — Calendly → Brevo
**Status:** Ready (Q1 resolved)
**Files:** `frontend/app/layout.tsx`, `frontend/components/home/PathDiscoverySection.tsx`, `components/home/utils.ts`
**Fix:** Remove Calendly script + CSS from layout. Remove `openCalendly()`. Replace all section CTA buttons with Brevo widget trigger: `window.BrevoConversations?.('openChat', true)`. Hero Email + WhatsApp buttons stay untouched.
**Verify:** No Calendly network requests. Brevo opens from Path Discovery CTA.
**Commit:** `feat(cta): replace Calendly with Brevo conversation trigger`

---

### P-03: Resume Content Review
**Status:** Human task — cannot be delegated to AI
**File:** `Resume.md`
**Task:** Review every line:
- Professional Profile paragraph — accurate?
- Technical Stack — remove any skill not used in production
- Each role bullet — describes real work?
- Title "Principal Engineer & NGO Technical Partner" — confirmed?

> [!WARNING]
> Commit `956a3455` (this session) already changed Resume.md, objective/, and brand files to "Principal Engineer" framing. Review those changes and confirm or request revert.

---

### P-04: Hero + Technical Grid Copy
**Status:** Blocked on P-03 completion
**Files:** `frontend/components/home/HeroSection.tsx`, `frontend/components/home/TechnicalGridSection.tsx`
**Fix:** Update hero title + 3 subtitle bullets. Reframe 3 grid pillars to architecture-ownership language (verified against real experience).
**Verify:** Build + browser screenshot desktop + mobile.
**Commit:** `feat(hero,grid): update copy to Principal Engineer positioning`

---

### P-05: NGO Technical Partner Section (New Component)
**Status:** Ready (Q1 resolved — pending P-03 content verification)
**Files:** `frontend/components/home/NGOPartnerSection.tsx` (NEW), `frontend/app/HomeClient.tsx`
**Fix:** New panel: 4 NGO deliverable cards. CTA button: `"Start a Conversation →"` → triggers Brevo widget.
**Verify:** Desktop + mobile screenshot.
**Commit:** `feat(ngo): add NGO Technical Partner engagement section`

---

### P-06: Architecture Decision Records
**Status:** Ready (Q2 resolved — pending P-03 content verification for resume links)
**Repo:** `github.com/alexseif/decisions` (standalone — to be created)
**Files:** `decisions/ADR-001-saso-slot-locking.md`, `decisions/ADR-002-wallety-transaction-routing.md`, `decisions/ADR-003-airgapped-deployment-pipeline.md`, `decisions/README.md`
**Resume link base URL:** `https://github.com/alexseif/decisions/blob/main/`
**Content rule:** Alex writes the substance (Options Considered, Rationale, What I’d do differently). AI assists structure and prose clarity only.
**Resume update:** Add "Architecture Portfolio" section to `Resume.md` with live links.
**Verify:** All 3 URLs render on GitHub. Links work from resume page.
**Commit:** `docs(adr): add architecture decision records for SASO, Wallety, air-gapped`

---

## Token Cost Estimate

| Task | Files | Claude Sonnet 4.5 | GPT-4o | Gemini 1.5 Pro | Aider + Ollama (local) |
|---|---|---|---|---|---|
| P-01 date bug | 1 TSX | ~800 tok / ~$0.01 | ~900 tok / ~$0.01 | ~800 tok / ~$0.01 | ~1,200 tok / $0 |
| P-02 CTA pivot | 3 TSX | ~2,000 tok / ~$0.03 | ~2,200 tok / ~$0.03 | ~2,000 tok / ~$0.01 | ~3,000 tok / $0 |
| P-04 hero + grid | 2 TSX | ~2,000 tok / ~$0.03 | ~2,200 tok / ~$0.03 | ~2,000 tok / ~$0.01 | ~3,000 tok / $0 |
| P-05 NGO section | 2 TSX | ~3,000 tok / ~$0.05 | ~3,300 tok / ~$0.05 | ~3,000 tok / ~$0.02 | ~4,500 tok / $0 |
| P-06 ADRs (3) | 4 MD | ~6,000 tok / ~$0.10 | ~6,600 tok / ~$0.10 | ~6,000 tok / ~$0.04 | ~9,000 tok / $0 |
| **Total** | **12 files** | **~13,800 / ~$0.22** | **~15,200 / ~$0.22** | **~13,800 / ~$0.09** | **~20,700 / $0** |

> Industry standard rates (June 2026): Claude Sonnet 4.5 ~$3/M input + $15/M output. GPT-4o ~$5/M input + $15/M output. Gemini 1.5 Pro ~$3.5/M input + $10.5/M output. Ollama (Qwen2.5-Coder 32B) = compute only.

---

## Commit Policy
- No commit without explicit "proceed" from Alex
- One commit per task — never `git add -A`
- Build must pass before every commit
