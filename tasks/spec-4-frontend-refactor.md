# Task 4 Spec: Frontend UI Refactoring

## 1. Objective
Refactor the Next.js web application to consume case study data from the newly migrated `/projects/*.yaml` files instead of the legacy `/projects/*.md` files. 

## 2. Commands
- Dev server: `npm run dev`
- Type checking: `tsc --noEmit`
- Production build: `npm run build`

## 3. Project Structure
- Modified: `/lib/projects.ts` (or equivalent data fetching layer)
- Modified: `/app/case-studies/page.tsx`
- Modified: `/app/case-studies/[slug]/page.tsx`
- Modified: Various UI components in `/components/` that render project cards.

## 4. Code Style
- **Architecture:** Next.js App Router conventions. Server Components by default.
- **Design System:** Strict adherence to `alexseif_brand_identity.md`. No raw hex codes. Use `text-primary`, `bg-background`, etc.
- **Data Parsing:** Utilize a robust YAML parser to load project data. Map the new schema fields (`core_competencies`, `architectural_context`) to UI elements gracefully.

## 5. Testing Strategy
- **Build Verification:** The command `npm run build` MUST pass cleanly without TypeErrors or missing data errors.
- **Visual Verification:** Navigate through the case studies on localhost to ensure data renders correctly and aesthetics are preserved.

## 6. Boundaries
- **Always:** Verify that routing and slugs remain consistent with the old markdown files so SEO is not disrupted.
- **Ask First:** Before deleting the legacy markdown files completely.
- **Never:** Change the Tailwind configuration or add new UI dependencies without explicit approval.
