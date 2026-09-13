---
slug: 2009-wallety
title: Wallety Payment Gateway
year: 2009
client_name: Wallety
client_type: Fintech / Payment Gateway
industry: "Fintech & Payment Systems"
project_role: "Co-Founder & Chief Technology Officer (CTO)"
subtitle: "Scaled Egypt's early online payment infrastructure, handling 33% of national domestic flight ticketing volume."
tech_stack:
  - "PHP (Symfony)"
  - "AWS (EC2, ELB)"
  - "MySQL (Master-Slave Replication)"
  - "CLI Queue Daemons & Background Workers"
  - "Amadeus GDS API"
  - "Banking & Payment Gateways"
selected: true
interview_completed: true
tags:
  - case-study
---

# Co-Founder & Chief Technology Officer (CTO) | Wallety | 2009

### Context & Scale
Wallety was an early payment gateway platform built to process high-concurrency online transactions in Egypt. Regional banking APIs suffered from frequent network drops, high timeout rates, and unreliable callback notifications under unstable national telecommunications infrastructure. Airlines and travel merchants required a fault-tolerant intermediary payment gateway that could guarantee transactional consistency without losing booking state or double-booking passenger seats. The platform scaled to handle 33% of all domestic air travel ticketing volume across Egypt, integrating directly with regional banking gateways and the Amadeus Global Distribution System (GDS).

### Architectural Decisions
- **Deterministic Transaction State Machine:** Implemented an explicit transactional state engine (Pending, Authorized, Settled, Failed, Reconciled) backed by automated polling routines to reconcile dropped bank callbacks deterministically.
- **Master-Slave Database Topology:** Dedicated the MySQL master database strictly to ACID-compliant transactional writes while routing read-heavy audit and reporting queries to read replicas, preventing disk I/O contention during peak sales.
- **Asynchronous Worker Pipelines:** Decoupled synchronous user-facing HTTP request cycles from slow upstream banking gateways by dispatching payment settlements to persistent CLI queue daemons operating on 1-second loops.
- **Atomic GDS Booking Alignment:** Designed transactional handshakes that coupled temporary seat holds in Amadeus GDS directly with payment pre-authorization confirmations, preventing race conditions and double bookings.

### Engineering Execution
- **Symfony Domain Layer:** Enforced clean separation of concerns in Symfony/PHP, isolating payment state logic, banking protocol drivers, and GDS interfaces into modular service boundaries.
- **AWS Infrastructure & Load Balancing:** Provisioned AWS EC2 compute instances behind Elastic Load Balancers (ELB) with SSL termination and automated health monitoring.
- **Continuous Reconciliation Daemons:** Built background CLI daemons that periodically audited pending payment states against bank transaction logs, resolving unacknowledged settlements without manual staff intervention.

### Measurable Impact
- **33% National Flight Volume:** Successfully handled high-concurrency payment throughput for one-third of Egypt's domestic airline ticketing volume.
- **Zero Inconsistent States:** Deterministic transaction state machine and background reconcilers eliminated dropped orders and double-booking errors during external banking outages.
- **High-Availability Checkout:** 1-second queue cycles insulated frontend checkout flows from external bank response latency, maintaining fast user response times during high-volume fare promotions.
