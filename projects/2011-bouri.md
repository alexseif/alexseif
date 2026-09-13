---
slug: 2011-bouri
title: "Bouri Center (E-Commerce & Enterprise ERP Integration)"
year: 2011
client_name: "MITCHDesigns (End-Client: Bouri Center)"
client_type: "Retail Enterprise & Distribution"
industry: "Consumer Retail & Distribution"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Custom e-commerce architecture and asynchronous ERP inventory ledger integrating a retail storefront with legacy enterprise systems."
tech_stack:
  - "PHP"
  - "Custom MVC Framework & Rapid Application Development (RAD)"
  - "MySQL"
  - "Asynchronous Ingestion & Ledger Pipeline"
  - "REST API Integration"
  - "Rackspace Cloud / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Bouri Center) | 2011 - 2013

## Context & Scale
Bouri Center is a premier national retail distributor in Egypt representing global consumer household appliance brands (including Kenwood, De'Longhi, and Braun). Through agency MITCHDesigns, this project delivered Bouri's flagship direct-to-consumer e-commerce platform and synchronized digital transactions with their restrictive legacy corporate ERP back-office.

## Architectural Decisions
* **Virtual Branch ERP Ledger Architecture:** To resolve rigid legacy ERP interfaces and third-party vendor latency, modeled the digital storefront as an autonomous virtual retail branch. Designed a localized transactional inventory ledger that decoupled customer checkout processing from upstream ERP downtime and sync bottlenecks.
* **Asynchronous Catalog Ingestion & Data Remediation:** Built an asynchronous background pipeline to parse, normalize, and validate fragmented legacy product catalog feeds. Integrated human-in-the-loop validation triggers that quarantined malformed SKU attributes without interrupting background ingestion queues.
* **Rapid Application Development (RAD) Engine:** Engineered an object-oriented PHP MVC foundation featuring an in-house RAD tool that automated relational schema migrations alongside application logic, accelerating feature delivery while maintaining strict architectural quality gates.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 application core with Symfony components, REST API specifications, and transactional order state machines (inventory holds, payment validation, fulfillment).
* **Data Layer:** Normalized MySQL relational database using InnoDB transactional tables for orders, SKU variations, pricing rules, and inventory reconciliation logs.
* **Frontend:** Responsive semantic HTML, modular CSS, and vanilla JavaScript interaction handlers for shopping cart and checkout flows.
* **Infrastructure & DevOps:** Provisioned and managed Linux server environments on Rackspace Cloud with isolated staging and production tiers, automated deployment scripts, and automated database snapshot routines.

## Measurable Impact
* Ensured zero customer checkout interruption by isolating storefront transactions from upstream ERP downtime and network latency spikes.
* Automated catalog ingestion and synchronization across thousands of SKUs and product variations.
* Successfully migrated enterprise operations to Rackspace Cloud infrastructure, establishing reliable I/O throughput and high platform uptime.
