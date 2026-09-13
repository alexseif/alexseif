---
slug: 2020-dubai-police-academy
title: Dubai Police Academy LMS Upgrade
year: 2021
client_name: Dubai Police Academy (via iSoft)
client_type: Public Sector / Law Enforcement
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Modernized and upgraded the Dubai Police Academy Moodle LMS, preserving historical student training audit records and enforcing Linux infrastructure baselines."
tech_stack:
  - "Moodle LMS Enterprise"
  - "PHP"
  - "MySQL (Schema Migration & Audit Integrity)"
  - "Linux / Apache HTTP Server"
  - "Role-Based Access Control (RBAC)"
  - "Infrastructure Governance"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Dubai Police Academy (via iSoft) | 2021

### Context & Scale
The Dubai Police Academy (contracted via iSoft) operates a mission-critical Learning Management System (LMS) for law enforcement training and officer academic curricula. The platform was running on an obsolete Moodle distribution encumbered by technical debt, unvetted core hacks, and unvalidated database schemas. Ahead of an external DevOps operational handoff, the client faced a proposal to migrate the stack to Windows Server, which risked severe PHP runtime performance penalties and cron scheduler failures. Retained as Lead Full-Stack Engineer and Architect to execute a zero-data-loss core upgrade, modularize custom UI components, and govern infrastructure baselines.

### Architectural Decisions
- **Upstream Core Decoupling:** Refactored hardcoded core modifications and legacy template overrides into isolated, hook-driven Moodle plugins and sub-themes, restoring compatibility with future upstream security patches.
- **Linux Infrastructure Governance:** Evaluated the proposed hosting roadmap, successfully vetoing the planned Windows Server deployment by quantifying PHP process manager limitations and file locking overhead, mandating a stable enterprise Linux and Apache HTTP Server baseline.
- **Audit Trail Data Migration:** Engineered and verified multi-step MySQL schema migrations to preserve all historical cadet gradebooks, certification progression logs, and disciplinary training audit trails with zero data loss.
- **Modular Presentation Architecture:** Integrated custom academy portal landing pages and examination workflows directly into the theme layer, ensuring full isolation from underlying framework controllers.

### Engineering Execution
- **Staged Version Upgrades:** Executed incremental core upgrade paths through intermediate Moodle releases within an isolated staging environment, resolving deprecated API dependencies and database schema changes sequentially.
- **Runtime Optimization:** Fine-tuned Apache virtual host configurations, PHP OPcache memory ceilings, and cron runner intervals to handle high-concurrency cadet testing sessions without CPU degradation.
- **DevOps Handover Runbook:** Authored technical architecture runbooks, environment variable manifests, and maintenance protocols for the receiving infrastructure operations team.

### Measurable Impact
- **100% Audit Data Integrity:** Successfully migrated all historical training records, cadet certifications, and legal compliance logs without corruption or loss.
- **Prevented Deployment Architecture Failure:** Blocked an incompatible Windows hosting migration, averting recurring runtime instability and operational overhead.
- **Sustainable Codebase:** Clean separation between core Moodle code and custom extensions enabled standard maintenance and seamless upstream patch application.
