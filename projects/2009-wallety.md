---
title: "Wallety"
year: 2009
url: "https://wallety.com"
client_type: "Fintech Enterprise"
agency: "Chief Technology Officer (CTO) & Co-Founder"
subtitle: "Core Fintech & Airline Transaction Routing Infrastructure"
tech_stack: ["PHP", "Symfony Framework", "AWS Ecosystem", "Load Balancers", "Asynchronous Queues", "PCI-DSS Hardening", "MySQL (Master-Slave)", "CLI Daemons", "AJAX"]
tags: ["#System-Decoupling", "#Concurrency-Optimization", "#Asynchronous-Processing", "#Data-Layer-Hardening", "#High-Availability-Clustering", "#Database-Replication", "#Infrastructure-Tiering", "#Compliance-By-Design", "#SLA-Preservation", "#Protocol-Rationalization", "#Identity-Federation", "#Component-Abstraction", "#Schema-Modeling"]
---

# Project Dossier
Served as Co-Founder, Chief Technology Officer (CTO), and Principal Architect, leading a 6-month bootstrap phase that secured external venture investment. Scaled the technical and corporate organization to over 40 employees and onboarded 200 commercial merchants within the first 12 months.

Engineered decoupled transactional layers and fault-tolerant routing systems to handle high volume, processing a significant portion of domestic air travel ticketing throughput nationwide. Implemented technical risk mitigation strategies to address regulatory compliance for early-stage online payment systems while maintaining structural compliance with national Know Your Customer (KYC) requirements.

### Core Architecture & System Engineering
- **High-Concurrency Transaction Pipeline:** Architected a payment routing engine designed to process booking spikes and maintain state. Implemented asynchronous queues and worker clusters to absorb concurrent payloads.
- **Enterprise Infrastructure & Security Hardening:** Engineered the AWS topology utilizing load balancers, database replication, and IAM privilege matrix models. Configured the ecosystem to meet corporate audit, national KYC mandates, and PCI-DSS compliance requirements.
- **Decoupled API Orchestration:** Designed microservice boundaries separating user-facing web layers from core processing layers, insulating the transactional engine from network interruptions.

### Engineering Notes / Edge Cases
Sustained operations where systemic failure or database latency carried material transactional costs, establishing an architecture optimized for continuous availability.

---

# Use Case Case Study: Wallety Engine (Concurrency Management)

### 1. Objective & Scope
Engineered the technical core, business logic models, and distributed infrastructure layout as CTO and Co-Founder, managing high domestic air travel transactional throughput under concurrent conditions.

### 2. Technical Decisions & Implementation
* **Concurrency Processing:** Handled transaction spikes by implementing a 1-second cron loop combined with asynchronous AJAX for long-running processes, preventing incoming data from blocking the main server thread.
* **Service Framework Design:** Organized the underlying framework with independent services, which were exposed to CLI commands to offload web execution overhead.
* **Data Layer Optimization:** Optimized a MySQL instance by deploying a lightweight table dedicated to concurrent write actions.
* **Horizontal Scaling & Continuity:** Scaled the environment horizontally across multiple servers behind a load balancer. Maintained session states and transaction persistence by configuring a master-slave MySQL replication cluster. This isolated the payment pipeline while integrating with bank payment gateways, Amadeus ticketing nodes, and active merchant settlement endpoints.