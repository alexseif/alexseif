---
slug: 2009-smash-holidays
title: Smash Holidays Booking & Pricing Engine
year: 2009
client_name: Smash Holidays
client_type: Tour Operator / Travel
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Architected a custom travel booking and multi-factor contract pricing engine on PHP and MySQL, eliminating a 6-minute query bottleneck into sub-second execution under strict shared memory limits."
tech_stack:
  - "PHP 5 (Custom MVC Framework)"
  - "MySQL (Optimized Schemas & Indexed Views)"
  - "JavaScript / AJAX"
  - "XML Feed Ingestion (GDS & Suppliers)"
  - "Apache / Media Temple Shared Linux"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Smash Holidays | 2009

### Context & Scale
Smash Holidays is a tour operator managing international holiday packages and bespoke hotel reservations. Built in 2009 prior to modern cloud booking APIs and package managers, the system faced extreme supplier fragmentation, as significant hotel inventory lacked Global Distribution System (GDS) connectivity. The platform had to evaluate dynamic pricing matrices at query time based on seasonal rate bands, party composition (adult vs child tiers), yield-driven early-bird/last-minute rates, compulsory gala surcharges, and real-time stop-sale availability signals. Initial multi-factor pricing queries suffered from severe performance degradation, taking up to 6 minutes across deep nested iterations in PHP and triggering host memory exhaustion (`kmemsize` limits) on shared Media Temple infrastructure.

### Architectural Decisions
- **Shift from Application Memory to Database Views:** Relocated nested calculation loops out of PHP application memory into pre-computed, indexed MySQL relational views, eliminating iterative memory ballooning on resource-constrained shared hosts.
- **Decoupled Custom MVC Framework:** Architected an object-oriented MVC framework that isolated core booking transactions and contract pricing logic from seasonal presentation templates, preventing regression risks during marketing updates.
- **Unified Supplier Ingestion Layer:** Built a resilient data ingestion pipeline standardizing disparate supplier inputs spanning automated GDS XML feeds, spreadsheet exports, and manual back-office CMS entries into a unified inventory ledger.
- **Database-Level Constraint Enforcement:** Shifted stop-sale signals, early-bird incentives, and mandatory surcharges into SQL query logic and views, ensuring deterministic calculation before payload rendering.

### Engineering Execution
- **Relational Pricing Schemas:** Structured normalized MySQL tables supporting multi-occupancy matrices, date-banded contract rates, and dynamic add-on packages with composite indexes.
- **Kernel Memory Constraint Mitigation:** Overcame shared-host `kmemsize` allocation ceilings by flattening query hierarchies and implementing stream-based dataset hydration in PHP 5.
- **Interactive Search and Booking UI:** Developed an asynchronous AJAX frontend for dynamic party composition selection, live room configuration, and instant price breakdowns without page reloads.

### Measurable Impact
- **Latency Reduction from 6 Minutes to Sub-Second:** Restructured queries and indexed database views reduced complex multi-factor pricing calculations from up to 6 minutes down to sub-second (<1s) execution.
- **Zero Memory Crashes on Shared Infrastructure:** Streamlined data hydration completely eliminated host memory exhaustion crashes under strict `kmemsize` limits on Media Temple.
- **Unified Inventory Operations:** Enabled seamless joint availability searches across automated GDS feeds and non-GDS hotel contracts within a single transaction engine.
