---
slug: 2012-soho-square
title: "SOHO Square Sharm El Sheikh (Event Ticketing & E-Commerce Engine)"
year: 2012
client_name: "MITCHDesigns (End-Client: SOHO Square)"
client_type: "Entertainment & Hospitality Destination"
industry: "Entertainment & Hospitality"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "High-concurrency concert ticketing architecture, TTL inventory holds, and embeddable booking widget for Sharm El Sheikh's entertainment hub."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL (InnoDB Row-Level Locking & TTL Holds)"
  - "Online Payment Gateway Integration"
  - "Embeddable JavaScript Widget & Cross-Domain Handshake"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (SOHO Square) | 2012

## Context & Scale
SOHO Square is a premier dining, shopping, and nightlife entertainment destination located in Sharm El Sheikh, Egypt, renowned for hosting international concerts, theatrical performances, and major seasonal festivals. Contracted through digital agency MITCHDesigns, this project engineered a dedicated ticketing platform and embeddable widget to process high-demand ticket reservations and online card payments during traffic bursts.

## Architectural Decisions
* **High-Concurrency Ticket Holds & Race Condition Elimination:** Implemented database row-level locking (SELECT ... FOR UPDATE) during reservation transactions to eliminate inventory overselling. Designed an automated 8-minute Time-To-Live (TTL) inventory hold mechanism that locked selected seats during checkout and automatically released abandoned reservations back to the public pool.
* **Cross-Domain Embeddable Widget Architecture:** Engineered a lightweight client-side booking widget embedded directly into SOHO Square's main portal. Designed a secure cross-domain handshake between the marketing domain and the ticketing subdomain, maintaining cart state during the transition to secure checkout.
* **Idempotent Payment Settlement Pipeline:** Engineered idempotent transaction handlers for acquiring bank payment webhooks, ensuring atomic order completion, preventing duplicate ticket generation on network retries, and issuing digital confirmation passes immediately upon settlement.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core handling ticket allocations, order state machines, and payment gateway interfaces.
* **Data Layer:** Normalized MySQL relational database using InnoDB transactional tables, separating events, ticket tiers, temporal holds, orders, and payment audit logs with covering indexes.
* **Frontend:** Standards-compliant semantic HTML, modular CSS layouts, and cross-domain vanilla JavaScript widget interactions.
* **Infrastructure:** Apache web server running on Linux with SSL termination and FastCGI process optimization.

## Measurable Impact
* Achieved zero inventory over-allocation or duplicate seat sales during peak concert on-sale traffic spikes.
* Completely isolated high-concurrency ticket purchasing traffic from the main marketing portal.
* Automated digital ticket issuance and payment reconciliation, replacing manual box-office booking procedures.
