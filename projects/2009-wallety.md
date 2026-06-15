---
title: "Core Fintech & Transaction Routing Infrastructure — Wallety"
year: 2009
client_type: "Fintech Enterprise"
agency: "Co-Founder & Chief Technology Officer (CTO)"
tech_stack: ["PHP", "Symfony Framework", "MySQL (Master-Slave)", "AWS Ecosystem", "Load Balancers", "Asynchronous Queues", "CLI Daemons"]
---

# Use Case: Engineering a Highly Available Payment Gateway Under Market Restrictions

### 1. Objective & Scope
Co-founded and sole-engineered the MVP of Egypt’s first comprehensive secure online payment gateway from the ground up. The platform resolved severe national banking infrastructure anxieties regarding online fraud and capital flight, eventually scaling post-funding to command 33% of all domestic air travel ticketing throughput across Egypt.

### 2. Technical Decisions & Implementation
* **Solo Launch to Organised Scale:** Built and launched the primary payment processing engine completely alone to secure market traction, subsequently growing and managing a funded 30-person engineering department to handle enterprise expansions.
* **1-Second Asynchronous Queue Loops:** Managed extreme transaction spikes by deploying high-velocity 1-second background cron loops paired with asynchronous AJAX processing. This offloaded long-running payment gateway communications from the main HTTP thread, completely preventing incoming user traffic from blocking the application servers.
* **Master-Slave Database Clustering:** Isolated the core payment pipelines by configuring a master-slave MySQL replication cluster behind high-availability load balancers. Deployed a specialized, lightweight transactional write table to process rapid, active ledger changes with minimal disk I/O overhead.
* **Defensive State Machine Retries:** Developed a defensive transactional state machine within PHP/Symfony that safely cached, isolated, and committed atomic financial ledger rows during sudden external bank gateway timeouts or local network dropouts, preserving SLA compliance.
* **GDS and Amadeus Integrations:** Built and maintained direct backend connection layers into the Amadeus Global Distribution System (GDS), matching real-time flight seat allocations with direct credit and debit acquiring bank protocols.