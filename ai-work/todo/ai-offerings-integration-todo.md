# Todo: Enterprise AI Offerings Integration (Option A)

- [x] **Task 1: Build Dedicated /ai-systems Landing Page**
  - **Prerequisites**: Approved `ai-work/spec/ai-offerings-integration-spec.md`.
  - **File**: `frontend/app/ai-systems/page.tsx`
  - **Validation**: File exists, adheres to design tokens, contains valid JSON-LD schemas and complete technical copy with zero em dashes.

- [x] **Task 2: Integrate 3rd Pillar into SpecializedOfferingsSection**
  - **Prerequisites**: Task 1 complete.
  - **File**: `frontend/components/home/SpecializedOfferingsSection.tsx`
  - **Validation**: 3-card grid on `lg` breakpoints, clean card layout, links to `/ai-systems`.

- [x] **Task 3: Register Route in Sitemap & Update Page JSON-LD**
  - **Prerequisites**: Task 2 complete.
  - **Files**: `frontend/app/sitemap.ts`, `frontend/app/page.tsx`
  - **Validation**: `/ai-systems` is present in `staticRoutes`, AI competencies reflected in homepage schema.

- [x] **Task 4: Build Verification & Lint Check**
  - **Prerequisites**: Tasks 1-3 complete.
  - **Commands**: `npm run build` inside `frontend/`.
  - **Validation**: Clean build with zero TypeScript or route resolution errors.

- [x] **Task 5: Git Commit & Outcome Sign-Off**
  - **Prerequisites**: Task 4 passes.
  - **Commands**: `git add . && git commit -m "feat(ai): integrate enterprise AI offerings and landing page"`
  - **Validation**: Clean git working tree, ready for deployment.
