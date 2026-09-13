---
slug: 2011-agazatmasr
title: "Agazat Masr (Tourico)"
year: 2011
client_name: "MITCHDesigns (End-Client: Agazat Masr / Tourico)"
client_type: "Tourism & Hospitality"
industry: "Travel Tech & Tourism"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Architected a domestic tourism aggregation engine on custom PHP MVC and MySQL, structuring multi-tier package pricing and asynchronous offline booking orchestration."
tech_stack:
  - "PHP (Custom MVC Framework)"
  - "MySQL (Indexed Relational Views)"
  - "JavaScript / AJAX"
  - "Asynchronous State Serialization"
  - "Apache / Linux"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Agazat Masr) | 2011 - 2014

### Context & Scale
Contracted through digital agency MITCHDesigns for Agazat Masr (operated by Tourico), a domestic tourism aggregation platform in Egypt operating across a 36-month active lifecycle. The regional tourism market lacked digital booking infrastructure; independent hotel operators lacked reservation APIs, relying on paper rate sheets with complex seasonal rules, room occupancy multipliers, and mandatory gala dinner surcharges. Owned the end-to-end platform architecture and full-stack development, extending dynamic relational pricing models to aggregate hotel accommodations, guided excursions, and private transfers into unified, bookable vacation packages.

### Architectural Decisions
- **Multi-Tier Inventory Relational Model:** Structured normalized database schemas to aggregate heterogeneous inventory categories (hotel room types, seasonal excursion tariffs, and vehicle transfers) into a unified query-time pricing pipeline.
- **Asynchronous Booking State Machine:** Compensated for the absence of supplier APIs by serializing booking payloads with immutable receipt tokens and asynchronous state transitions, allowing back-office operators to confirm reservations via structured email workflows without data corruption.
- **Encapsulated Server-Side Calculation:** Kept pricing yield algorithms and contract multiplier logic strictly on the backend, preventing competitor scraping and client-side pricing tampering.
- **Non-Locking Schema Management:** Executed database index updates and schema migrations on live production tables without table locks or service downtime across three years of continuous feature releases.

### Engineering Execution
- **Custom MVC Architecture:** Implemented an object-oriented custom PHP MVC framework enforcing strict domain separation between booking controllers, inventory calculation services, and presentation templates.
- **Indexed Database Views:** Configured computed, indexed MySQL views to evaluate multi-variable rate matrices (dates, occupancy, supplier tiers) with sub-second execution.
- **Dynamic Booking Interface:** Built an asynchronous AJAX booking flow enabling customers to combine rooms, transfers, and excursion add-ons with real-time price updates without full page reloads.

### Measurable Impact
- **Market Reference Platform:** Established the platform as the primary digital pricing and package booking reference in the Egyptian domestic tourism market within 6 months of launch.
- **36 Months of High Availability:** Maintained continuous operational uptime across 36 months of active traffic and seasonal holiday promotional spikes.
- **Zero Transaction Corruption:** Processed thousands of multi-tier dynamic vacation bookings without state synchronization failures or duplicate reservation errors.
