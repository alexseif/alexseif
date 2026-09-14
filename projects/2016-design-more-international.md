---
slug: 2016-design-more-international
title: "Design More International (Architectural Portfolio & Media Engine)"
year: 2016
client_name: "Design More International"
client_type: "Architecture & Conceptual Design Studio"
industry: "Architecture & Spatial Design"
project_role: "Full-Stack Engineer"
subtitle: "Engineered a high-performance architectural portfolio and media delivery pipeline on WordPress and PHP, optimizing high-resolution rendering delivery and asset caching for international audiences."
tech_stack:
  - "WordPress"
  - "PHP"
  - "MySQL"
  - "Linux / Nginx"
  - "JavaScript"
  - "CSS3 / Responsive Design"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Full-Stack Engineer | Design More International | 2016

### Context & Scale
Design More International is an architecture and conceptual design firm competing globally in commercial design competitions. The firm required a digital portfolio capable of showcasing high-resolution architectural renders, plans, and drawings to international design juries and prospective clients. Standard commercial themes introduced severe performance penalties when loading multi-megabyte image assets; the studio needed an engineer to deliver a bespoke, lightweight web platform from theme design to production hosting.

### Architectural Decisions
- **Custom Theme Architecture:** Engineered a bespoke WordPress theme from scratch in PHP, rejecting bloated commercial themes and visual page builders to minimize DOM complexity and eliminate redundant CSS and JavaScript payloads.
- **Multi-Tier Media Delivery Pipeline:** Implemented automated image downsampling routines on upload alongside client-side lazy loading, ensuring high-fidelity visual assets only load when entering the active viewport.
- **Nginx Caching and Asset Expiry:** Configured Nginx static asset caching headers and gzip compression to serve media assets efficiently across international networks.

### Engineering Execution
- **Structured Portfolio Modeling:** Designed custom WordPress post types and taxonomies for architectural projects, categorizing works by typology, award status, competition year, and scale.
- **Responsive Gallery and Media Viewer:** Built a custom CSS grid and lightweight JavaScript lightbox gallery tailored to ultra-wide architectural renders and technical elevations without third-party plugin dependencies.
- **Linux Server Deployment:** Provisioned and configured a Linux server running Nginx and PHP-FPM, implementing strict file permission boundaries and MySQL query optimization.

### Measurable Impact
- **Eliminated Builder Overhead:** Removed all external builder dependencies, reducing page payload and script execution overhead compared to standard agency themes.
- **Optimized Media Loading:** Viewport-based lazy loading reduced initial page weight across image-heavy project galleries, maintaining high visual fidelity during design competition evaluations.
- **Independent Delivery:** Successfully delivered the complete solution from frontend templating to production infrastructure deployment.
