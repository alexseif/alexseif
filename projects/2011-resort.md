---
slug: 2011-resort
title: "Resort Sales & Management (La Manga Club Vacation Rentals)"
year: 2011
client_name: "MITCHDesigns (End-Client: Resort Sales & Management)"
client_type: "Hospitality & Property Management"
industry: "Hospitality & Property Management"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Multi-portal vacation rental architecture, turnover state machine, and concurrency control for luxury resort properties."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL (Views & Transactional Locks)"
  - "Multi-Portal RBAC Architecture"
  - "Turnover & Inspection State Machine"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Resort Sales & Management) | 2011 - 2012

## Context & Scale
Resort Sales & Management operated a luxury villa and apartment rental agency at the La Manga Club resort in Spain, handling over 1,000,000 GBP in monthly reservation volume. The business required a synchronized digital platform to eliminate scheduling conflicts across three competing domains: public vacationers, private villa owners, and on-site cleaning and inspection crews.

## Architectural Decisions
* **Multi-Portal RBAC Topology:** Engineered a decoupled role-based architecture serving three discrete user interfaces (public booking catalog, private homeowner calendar, and operational back-office) backed by a unified data layer.
* **Turnover State Machine:** Modeled an explicit database state machine enforcing mandatory pre- and post-stay turnover locks (cleaning schedules and physical inspection sign-offs) before releasing properties back into the public availability pool.
* **Concurrency Control & Row Locking:** Implemented pessimistic database row locking (SELECT ... FOR UPDATE) during reservation transactions, eliminating double-booking race conditions between public guest checkouts and owner date reservations.
* **Database-Driven Yield Engine:** Encoded dynamic seasonal pricing, length-of-stay discounts, and multi-tier commission structures directly into optimized MySQL database views, offloading compute overhead from the application layer.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core with modular controllers routing domain-specific workflows and transactional checkout pipelines.
* **Data Layer:** Normalized MySQL relational schema utilizing InnoDB transactional row locking and indexed foreign keys for property amenities, calendars, and audit logs.
* **Frontend:** Standards-compliant semantic HTML, modular CSS layouts, and JavaScript calendar controls for date-range selection.
* **Infrastructure:** Apache web server running on Linux with URL rewriting for canonical property URLs and HTTP caching for static image assets.

## Measurable Impact
* Scaled property rental and back-office management workflows to reliably process over 1,000,000 GBP per month in booking transactions.
* Completely eliminated cross-channel double-booking conflicts through strict database-level transactional locks.
* Automated on-site maintenance and cleaning dispatch schedules, removing manual spreadsheet tracking for operations teams.
