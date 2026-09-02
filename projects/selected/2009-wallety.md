---
slug: 2009-wallety
title: Wallety Payment Gateway
year: 2009
client_name: Wallety
client_type: Fintech / Payment Gateway
project_role: Co-Founder & Chief Technology Officer (CTO)
subtitle: Scaled Egypt's early online payment infrastructure, handling 33% of national domestic flight ticketing volume.
tech_stack:
  - PHP
  - Symfony Framework
  - AWS (EC2, ELB)
  - MySQL (Master-Slave)
  - Asynchronous Queues
  - CLI Daemons
  - Amadeus GDS API
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | Wallety (2009)

## Executive Summary
Engineered an online payment gateway built to handle high-concurrency payment settlements in Egypt under unstable telecommunications infrastructure. The platform integrated directly with banking gateways and the Amadeus Global Distribution System (GDS), scaling to process 33% of all domestic air travel ticketing volume across Egypt.

---

## 1. Context & Business Problem
* **Client / Domain:** Wallety (Fintech / Payment Gateway)
* **Timeline:** 2009
* **Project Role:** Software Architect & Full-Stack Developer

### The Problem
During 2009, regional banking APIs in Egypt suffered from high timeout rates and lack of standardized payment interfaces. Airlines and merchants required a fault-tolerant intermediary payment engine that could guarantee transactional consistency without losing booking state during network interruptions.

---

## 2. Technical Stack & Systems Infrastructure
* **Application Framework:** Symfony (PHP), enforcing domain separation and isolated payment state machines.
* **Data Layer:** MySQL with Master-Slave replication separating write-heavy transaction processing from read-heavy reporting.
* **Infrastructure:** AWS compute nodes behind Elastic Load Balancers terminating SSL.
* **Background Processing:** Long-running CLI daemons executing asynchronous queue loops every second.

---

## 3. Core Architectural Decisions
* **Deterministic Transactional State Machine:** Implemented explicit state tracking (Pending, Authorized, Settled, Failed, Reconciled) with automated polling to reconcile dropped bank callbacks.
* **Master-Slave Database Topology:** Dedicated the master database node strictly to ACID-compliant writes while routing reporting and transaction audit queries to read replicas, eliminating disk I/O contention.
* **Atomic GDS Booking Alignment:** Enforced atomic database transactions that coupled flight seat reservation locks in Amadeus GDS with payment gateway authorization confirmations to prevent double bookings.
* **Asynchronous Queue Orchestration:** Decoupled synchronous HTTP request handling from slow upstream bank gateway settlements using background CLI queue workers.

---

## 4. Operational & Business Impact
* **Scale & Throughput:** Scaled payment processing throughput to support 33% of domestic air travel ticketing in Egypt.
* **System Resilience:** Maintained consistent transaction reconciliation despite frequent external bank network drops.
* **Queue Latency:** Sustained 1-second queue processing intervals during ticket sale spikes, insulating checkout flows from gateway latency.
