# Implementation Plan: Package Security Updates & Security Advisor

## Objective
Update root and frontend Node.js packages to patch security vulnerabilities and install an automated high-severity audit script ("security advisor") in each project manifest.

## Scope & Constraints
- Decoupled Symfony/Composer is not present; no PHP/Composer packages to update.
- Option 1 (Conservative): Non-breaking updates via `npm audit fix`, targeted Next.js patch update (`>=16.4.3`), and native npm audit scripts.
- Avoid breaking changes (e.g. avoid forced Zod 4 migration unless non-breaking).

## Tasks
1. Root Package Security Fixes:
   - Run `npm audit fix` in `/var/www/alexseif.com`.
   - Add `"audit": "npm audit --audit-level=high"` in `package.json`.
   - Verify validation scripts and audit.
   - Commit changes.
2. Frontend Package Security Fixes:
   - Run `npm audit fix` in `/var/www/alexseif.com/frontend`.
   - Update `next` to patched 16.x version (`>=16.4.3`) to address critical Next.js CVEs.
   - Add `"audit": "npm audit --audit-level=high"` in `frontend/package.json`.
   - Verify production build (`npm run build`) and audit.
   - Commit changes.
