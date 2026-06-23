# Plan — alexseif.com Persona Repositioning
> See full implementation plan in conversation artifact.

## Phases & Dependency Order

```
F-06 (Source Docs) → F-05 (Metadata/SEO) → F-01 (Hero) → F-02 (Tech Grid) → F-03 (NGO Section) → F-04 (Case Study Subtitles)
```

## Phase 1 — Source Document Alignment (F-06)
Files: Resume.md, objective/alexseif-objective.md, alexseif_brand_identity.md, objective/seo-strategy.md
Commit: `docs: align source documents to Principal Engineer positioning`

## Phase 2 — SEO & Metadata (F-05)
Files: frontend/app/layout.tsx, frontend/app/page.tsx
Commit: `feat(seo): update metadata to Principal Engineer positioning`

## Phase 3 — Hero Section (F-01)
Files: frontend/components/home/HeroSection.tsx
Commit: `feat(hero): update title and subtitle to Principal Engineer positioning`

## Phase 4 — Technical Grid (F-02)
Files: frontend/components/home/TechnicalGridSection.tsx
Commit: `feat(grid): reframe technical pillars to architecture ownership`

## Phase 5 — NGO Partner Section (F-03)
Files: frontend/components/home/NGOPartnerSection.tsx (NEW), frontend/app/HomeClient.tsx
Commit: `feat(ngo): add NGO Technical Partner engagement section`

## Phase 6 — Case Study Subtitles (F-04)
Files: projects/2021-saso.md, projects/2020-moi-egypt-traffic.md, projects/2009-wallety.md
Commit: `feat(case-studies): reframe subtitles to architecture ownership language`

## Verification
- `npm run lint` → exit 0
- `npm run build` → no errors
- Browser screenshot: desktop + mobile homepage
- Browser DevTools: `document.title`, JSON-LD jobTitle
