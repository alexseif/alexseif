---
title: "Wallety"
year: 2009
url: "https://wallety.com"
client_type: "Fintech Enterprise"
agency: "Chief Technology Officer (CTO) & Co-Founder"
subtitle: "High-Throughput Core Fintech & Airline Transaction Routing Infrastructure"
tech_stack: ["PHP", "Symfony Framework", "AWS Ecosystem", "High-Availability Load Balancers", "Asynchronous Queues", "PCI-DSS Hardening", "MySQL (Master-Slave)", "CLI Daemons", "AJAX"]
tags: ["#System-Decoupling", "#Concurrency-Optimization", "#Asynchronous-Processing", "#Data-Layer-Hardening", "#High-Availability-Clustering", "#Database-Replication", "#Infrastructure-Tiering", "#Compliance-By-Design", "#SLA-Preservation", "#Protocol-Rationalization", "#Identity-Federation", "#Component-Abstraction", "#Schema-Modeling"]
---

# Project Dossier
Served as Co-Founder, Chief Technology Officer (CTO), and Principal Architect, leading a successful 6-month bootstrap phase that secured immediate external venture investment. Within the first 12 months of live market operations, scaled the technical and corporate organization to over 40 employees and onboarded 200 commercial merchants to the leading bank in online payment gateways at the time. 

Engineered decoupled transactional layers and fault-tolerant routing systems capable of handling extreme continuous volume, securely commanding over 33% of all domestic air travel ticketing throughput nationwide. Effectively spearheaded technical risk mitigation strategies that eased the Central Bank and government regulatory apprehensions surrounding early-stage online payment systems while maintaining rigid structural compliance with all emerging national Know Your Customer (KYC) requirements.

### Core Architecture & System Engineering
- **High-Concurrency Transaction Pipeline:** Architected an enterprise-grade payment routing engine designed to process rapid booking spikes without state-drift. Implemented fail-safe asynchronous queues and isolated worker clusters to absorb concurrent payload bursts seamlessly.
- **Enterprise Infrastructure & Security Hardening:** Engineered the full AWS topology utilizing high-availability load balancers, multi-region database replication, and zero-trust IAM privilege matrix models. Hardened the entire ecosystem to meet strict corporate audit, national KYC mandates, and PCI-DSS compliance requirements.
- **Decoupled API Orchestration:** Designed microservice boundaries separating user-facing web layers from high-yield core processing layers, insulating the transactional engine from unexpected edge network interruptions or performance degradation.

### Engineering Notes / Edge Cases
Successfully sustained mission-critical operations where any systemic failure or database latency carried immediate, high-material transactional costs, cementing a long-term architecture that outpaced standard consumer platforms.

---

# Use Case Case Study: Wallety Engine (High-Concurrency Spike Management)

### 1. Objective & Scope
Engineered the technical core, business logic models, and distributed infrastructure layout as CTO and Co-Founder during the early web scaling era, capturing 33% of domestic air travel transactional throughput under extreme concurrency conditions.

### 2. Technical Decisions & Implementation
* **Concurrency Fix:** Handled sudden transaction spikes by implementing a high-frequency, 1-second cron loop combined with asynchronous AJAX for long-running processes. This approach prevented large batches of incoming data from choking the main server thread and causing timeout responses.
* **Service Framework Design:** This rapid fix was possible because the underlying framework was built with cleanly organized services. These services were instantly exposed to CLI commands to offload web execution overhead.
* **Data Layer Optimization:** Boosted the performance of an Oracle-licensed MySQL instance by deploying a lightweight, highly optimized table dedicated solely to concurrent write actions.
* **Horizontal Scaling & Continuity:** Once immediate system pressure was stabilized, scaled the environment horizontally across multiple servers behind a load balancer. Maintained absolute session states and transaction persistence by configuring a secure master-slave MySQL replication cluster. This design safely isolated the payment pipeline while concurrently integrating with bank payment gateways, Amadeus ticketing nodes, and active merchant settlement endpoints.