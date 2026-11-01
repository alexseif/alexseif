# Todo: Package Security Updates & Security Advisor

- [x] Task 1: Root Node Package Updates & Security Advisor
  - [x] Run `npm audit fix` in root
  - [x] Add `"audit": "npm audit --audit-level=high"` script to root `package.json`
  - [x] Verify validation pipelines (`npm run validate:projects`, `npm run validate:experience`) and audit
  - [x] Commit task changes
- [x] Task 2: Frontend Package Updates & Security Advisor
  - [x] Run `npm audit fix` in `frontend/`
  - [x] Update `next` to secure release (`>=16.4.3`) to resolve critical advisories
  - [x] Add `"audit": "npm audit --audit-level=high"` script to `frontend/package.json`
  - [x] Verify frontend production build (`npm run build`) and audit
  - [x] Commit task changes
