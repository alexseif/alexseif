# Plan: Remove php2shell Homepage Warning Banner

## Objective
Decommission the critical incident advisory warning banner (`EmergencyAlertBanner`) from the homepage (`alexseif.com`) while preserving the underlying `/php-emergency-patch` landing page and `/php2shell` routing for inbound links and SEO integrity.

## Architecture & Scope
- **Files to Modify**:
  - `frontend/app/page.tsx`: Remove `EmergencyAlertBanner` import and JSX render.
- **Files to Remove**:
  - `frontend/components/home/EmergencyAlertBanner.tsx`: Delete component file.
- **Preserved Assets**:
  - `frontend/app/php-emergency-patch/page.tsx`: Unchanged.
  - `frontend/next.config.mjs`: Unchanged (preserves `/php2shell` redirect).

## Tasks
1. **Task 1: Unmount and Remove EmergencyAlertBanner Component**
   - Remove `<EmergencyAlertBanner />` and its import from `frontend/app/page.tsx`.
   - Remove `frontend/components/home/EmergencyAlertBanner.tsx`.
   - Acceptance Criteria: Homepage renders without the ticker banner; no compilation errors.
2. **Task 2: Empirical Verification & Build**
   - Run production Next.js build (`cd frontend && npm run build`).
   - Acceptance Criteria: Build succeeds with code 0 and valid static route generation.
