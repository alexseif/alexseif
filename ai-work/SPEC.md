# System Bible Spec: alexseif.com

This file inherits from and references the root `/var/www/alexseif.com/SPEC.md`.

## Key Architectural Invariants
- **Framework**: Next.js App Router (`frontend/app/`).
- **Styling**: Tailwind CSS, monospace typography accents, blueprint-grid background styling, Lucide icons.
- **Copywriting**: Anti-AI writing rules (no em dashes `—`, direct, unembellished, honest tone).
- **Structure**:
  - Landing pages exist as dedicated route folders under `frontend/app/`.
  - JSON-LD structured data included inline via `<script type="application/ld+json">`.
  - Routes registered in `frontend/app/sitemap.ts`.
