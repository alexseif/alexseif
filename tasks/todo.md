# TODO — alexseif.com Persona Repositioning
> Run /build auto to execute all tasks in one approved pass.

## Phase 1 — Source Documents (F-06)
- [ ] Update `Resume.md` front-matter title → "Principal Engineer & NGO Technical Partner"
- [ ] Update `Resume.md` Professional Profile opening sentence
- [ ] Update `objective/alexseif-objective.md` Primary Target & Alternative Track
- [ ] Update `alexseif_brand_identity.md` Brand Ethos tagline and Core Concept
- [ ] Update `objective/seo-strategy.md` target personas and keyword list
- [ ] Git commit: `docs: align source documents to Principal Engineer positioning`

## Phase 2 — SEO & Metadata (F-05)
- [ ] Update `frontend/app/layout.tsx` title, description, keywords, JSON-LD jobTitle + knowsAbout
- [ ] Update `frontend/app/page.tsx` JSON-LD jobTitle + knowsAbout
- [ ] Verify: `npm run build` passes
- [ ] Git commit: `feat(seo): update metadata to Principal Engineer positioning`

## Phase 3 — Hero Section (F-01)
- [ ] Update `HeroSection.tsx` primary title `<li>` text
- [ ] Update 3 subtitle `<li>` items to architecture-ownership language
- [ ] Verify: `npm run build` passes + browser screenshot
- [ ] Git commit: `feat(hero): update title and subtitle to Principal Engineer positioning`

## Phase 4 — Technical Grid (F-02)
- [ ] Update `TechnicalGridSection.tsx` section label and h2
- [ ] Rewrite Pillar 01: Hostile-Environment Infrastructure
- [ ] Rewrite Pillar 02: Distributed State Engineering
- [ ] Rewrite Pillar 03: Agentic Systems & Decoupling
- [ ] Update tech badges for all 3 pillars
- [ ] Verify: `npm run build` passes + browser screenshot
- [ ] Git commit: `feat(grid): reframe technical pillars to architecture ownership`

## Phase 5 — NGO Partner Section (F-03)
- [ ] Create `frontend/components/home/NGOPartnerSection.tsx`
- [ ] Add 4 deliverable cards and Calendly CTA
- [ ] Import and insert `<NGOPartnerSection />` in `HomeClient.tsx`
- [ ] Verify: desktop + mobile (390px) browser screenshots
- [ ] Git commit: `feat(ngo): add NGO Technical Partner engagement section`

## Phase 6 — Case Study Subtitles (F-04)
- [ ] Update `projects/2021-saso.md` agency + subtitle frontmatter
- [ ] Update `projects/2020-moi-egypt-traffic.md` agency + subtitle frontmatter
- [ ] Update `projects/2009-wallety.md` subtitle frontmatter
- [ ] Verify: subtitle cards render correctly in browser
- [ ] Git commit: `feat(case-studies): reframe subtitles to architecture ownership language`

## Final Verification
- [ ] `npm run lint` → exit 0
- [ ] `npm run build` → no errors
- [ ] `document.title` check in browser DevTools
- [ ] JSON-LD `jobTitle` check
- [ ] Full homepage scroll test desktop + mobile
