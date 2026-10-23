# Todo: PHP Emergency Patching & php2shell Remediation Landing Page

- [x] **Task 1: Implement Landing Page Component**
  - **Prerequisites**: Approved `ai-work/spec/php-patching-landing-page-spec.md`.
  - **File**: `frontend/app/php-emergency-patch/page.tsx`
  - **Validation**: File exists, adheres to design system tokens, contains valid JSON-LD schemas and complete technical copy without em dashes.

- [x] **Task 2: Configure Route Redirection for /php2shell**
  - **Prerequisites**: Task 1 complete.
  - **File**: `frontend/next.config.mjs`
  - **Validation**: `/php2shell` redirects with status 307/308 or rewrites to `/php-emergency-patch`.

- [x] **Task 3: Register Route in Sitemap**
  - **Prerequisites**: Task 2 complete.
  - **File**: `frontend/app/sitemap.ts`
  - **Validation**: `/php-emergency-patch` is present in `staticRoutes`.

- [x] **Task 4: Build Verification & Lint Check**
  - **Prerequisites**: Tasks 1-3 complete.
  - **Commands**: `npm run build` inside `frontend/`.
  - **Validation**: Clean build with zero TypeScript or route resolution errors.

- [ ] **Task 5: Git Commit & Outcome Sign-Off**
  - **Prerequisites**: Task 4 passes.
  - **Commands**: `git add . && git commit -m "feat(web): add php-emergency-patch landing page and php2shell redirect"`
  - **Validation**: Clean git working tree, ready for deployment.
