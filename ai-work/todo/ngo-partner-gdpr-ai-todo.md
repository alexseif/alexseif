# Todo: NGO Technical Partner GDPR Compliance & AI Proposal Offerings

- [x] **Task 1: Update frontend/app/ngo-technical-partner/page.tsx**
  - **Prerequisites**: Approved `ai-work/spec/ngo-partner-gdpr-ai-spec.md`.
  - **File**: `frontend/app/ngo-technical-partner/page.tsx`
  - **Validation**: Includes plain-English directory, dedicated GDPR section, AI proposal generation pillar and deliverables, and valid JSON-LD schema with zero em dashes.

- [x] **Task 2: Build Verification & Compilation Check**
  - **Prerequisites**: Task 1 complete.
  - **Commands**: `cd frontend && npx tsc --noEmit && npm run build`
  - **Validation**: Clean build with exit code 0.

- [x] **Task 3: Service Restart & Endpoint Verification**
  - **Prerequisites**: Task 2 complete.
  - **Commands**: `sudo systemctl restart alexseif-frontend && curl -I http://127.0.0.1:3000/ngo-technical-partner`
  - **Validation**: Service running active, returns HTTP 200 OK.

- [x] **Task 4: Git Commit & Outcome Sign-Off**
  - **Prerequisites**: Task 3 passes.
  - **Commands**: `git add . && git commit -m "feat(ngo): add GDPR compliance, plain-english directory, and AI proposal offerings"`
  - **Validation**: Clean working tree on `master`.
