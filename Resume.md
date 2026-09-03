---
name: "Eskandar (Alex) Seif"
title: "Software Architect & Full-Stack Developer"
location: "Cairo, Egypt | Remote / B2B Contract | Open to Relocation (Netherlands / EU)"
phone: "+201004006332"
email: "alex.seif@gmail.com"
website: "https://alexseif.com"
---

## Professional Summary

Pragmatic Software Architect and Full-Stack Developer with over 20 years of hands-on experience designing, scaling, and maintaining web platforms, transactional payment systems, and data-intensive applications. Strong background in modern PHP (Symfony, Drupal Enterprise, WordPress FSE/ACF, Moodle), JavaScript/TypeScript (React, Node.js), Python (FastAPI), and relational database modeling (MySQL, PostgreSQL/PostGIS).

Proven track record taking systems from initial design through production, including nationwide public sector infrastructure, high-concurrency payment gateways, and GIS routing platforms. Focuses on pragmatic software architecture, clean schema design, zero-downtime database migrations, deterministic deployment automation, and GDPR/PCI-DSS compliance.

---

## Technical Stack & Architecture Competencies

* **Architecture & System Design:** Distributed Systems, Decoupled Architecture, High-Concurrency Routing, Domain-Driven Design (DDD), Transactional State Machines, REST & OpenAPI Contract Synchronization.
* **PHP Ecosystem:** Symfony Framework, Drupal Enterprise (Core, 8/9/10), WordPress (Full Site Editing, ACF Pro, Gutenberg API, Multisite), Moodle LMS, Custom MVC Frameworks, PHP 8.x.
* **Full-Stack & Frontend:** TypeScript, React (React 19, Hooks), JavaScript (ES6+), Node.js, TailwindCSS, Vite, HTML5, CSS3 / SCSS.
* **Python & Geospatial:** Python 3.12, FastAPI, PostgreSQL 15+, PostGIS (Spatial Indexing, SRID 4326, GeoJSON).
* **Database & Data Layer Optimization:** MySQL / MariaDB (Master-Slave Replication, Query Optimization, 3NF Normalization, Star Schema Views, Indexed Views), Redis.
* **DevOps, Cloud & Infrastructure:** Docker / Docker Compose, Linux Administration (Debian, CentOS, Oracle Linux), Nginx (Reverse Proxy, Caching), AWS (EC2, ELB, S3, CloudFront), CI/CD (GitHub Actions), Air-Gapped Intranet Deployment, Bash Automation.
* **Security & Regulatory Compliance:** GDPR Compliance, PCI DSS Architecture, SAML 2.0 / Keycloak SSO Federation, SAMA Standards, Role-Based Access Control (RBAC).

---

## Professional Experience

### Software Architect & Full-Stack Developer (Contract)
**Meem Development (SEF Academy)** | *January 2024 - December 2024*

* **Centralized SAML 2.0 & Keycloak SSO Integration:** Re-engineered metadata schemas and SAML attribute assertions between Keycloak and 3 distinct web applications: Moodle LMS, a custom web app for student registration and payment processing, and a dedicated teacher/admin portal, resolving authentication failures and unifying corporate Single Sign-On.
* **Secure Database Topology:** Configured role-isolated SSH tunneling protocols for distributed engineering teams, enabling secure concurrent database operations on Test and UAT instances without public port exposure.
* **Transactional Email & Integrations:** Configured authenticated SMTP relays for deterministic course certificate dispatch and validated enterprise Microsoft Teams integration.

### Software Architect & Full-Stack Developer
**iSoft (IdealSoft Emirates) | Retainer & Contract** | *2020 - 2024*

Contracted to deliver ministry-level digital infrastructure, high-concurrency transactional routing engines, and API architectures for federal and municipal public sector clients across Egypt and Saudi Arabia.

* **National Vehicle Inspection Scheduling (Saudi Ministry of Standards, Metrology and Quality - SASO):** Architected the nationwide vehicle inspection booking system managing multi-lane facilities. Engineered a distributed transactional state-locking engine with a deterministic 5-minute buffer that eliminated race conditions across competing web, mobile, and backend channels for 15-minute appointment slots. Remodeled database schemas into 3NF for transactional safety and Star Schema for real-time reporting. Decoupled Drupal core to expose versioned REST APIs to a high-performance React client.
* **Air-Gapped Intranet Certification Platform (Egyptian Ministry of Interior - Traffic Police Dept.):** Architected and deployed an enterprise Moodle training portal on a restricted state intranet for mandatory licensing courses nationwide with zero internet access. Engineered a deterministic zero-network deployment pipeline using a custom-patched Oracle Linux OS repository on physical USB storage with fault-tolerant Bash migration scripts and offline cryptographic fee verification.
* **National Vehicle Inspection Digital Ecosystem (Aman Portal):** Designed the digital booking and dispatch engine for nationwide vehicle inspections, redirecting citizen volume from congested municipal police departments to commercial hubs and mobile inspection vans via high-availability backend API integration.
* **State-Licensed Cooperative Insurance Platform (Salama Portal - Saudi Arabia):** Engineered core registration workflows, pre-ingestion validation mechanics, and secure transaction-handling layers for compliant digital automotive insurance under Saudi Central Bank (SAMA) regulatory standards.

### Co-Founder & Software Architect
**Wallety (Fintech Payment Gateway)** | *December 2009 - July 2015*

Architected, launched, and scaled an early online payment gateway in Egypt, processing 33% of all domestic air travel ticketing volume.

* **PCI DSS Compliant Core Engine:** Solely engineered the core payment gateway using PHP and Symfony adhering to PCI DSS security standards, resolving banking connectivity issues and handling online payment settlements under unstable telecommunications infrastructure.
* **GDS & Bank Integrations:** Built direct integrations with domestic acquiring banks, 200+ enterprise merchants, and the Amadeus Global Distribution System (GDS) for atomic flight seat reservations.
* **Master-Slave Replication & CLI Daemons:** Clustered MySQL separating master ACID writes from slave read-reporting, and engineered 1-second CLI background daemon loops to process transaction batches asynchronously.

### Software Architect & Full-Stack Developer
**Independent Technical Consultancy & Retainers** | *2006 - Present*

* **barincairo.com (2026):** Architected a decoupled Web GIS platform utilizing React 19, Python 3.12 FastAPI, and PostgreSQL/PostGIS. Implemented viewport vector tile streaming, spatial route queries, and an automated 3-tier venue ingestion pipeline with proximity deduplication.
* **Greek Community of Alexandria - EKA Modernization (2026):** Modernized a 15-year WordPress portal into a lightweight Full Site Editing (FSE) block theme with full GDPR compliance. Built an AST shortcode migration pipeline, automated 15 years of legacy newsletter date parsing, and configured Nginx reverse proxy media streaming.
* **North South Consultants Exchange - NSCE (2025-2026):** Modernized an institutional donor transparency platform for UN, GIZ, and EU development programs with full GDPR compliance. Unified corrupted translation tables into a normalized WordPress Advanced Custom Fields (ACF) schema, built dual-tier spatial governorate filtering for Egypt, and optimized MySQL queries to increase organic search visibility to over 20,000 monthly impressions.
* **Saaed Automotive Insurance via Softech (2018):** Stabilized an on-premise CentOS WordPress Multisite insurance portal. Backported and pinned legacy RPM packages to eliminate host crashes, and refactored multi-tenant RBAC permissions to isolate data across agency nodes.
* **MITCHDesigns (2009-2014):** Embedded Software Architect for a digital agency. Created the core PHP MVC framework and dynamic contract pricing engines (Smash Holidays, Agazat Masr), designed MySQL indexed database views, and trained development teams in Git workflows.

---

## Education & Foundations

* **Completed 5-Year Engineering Curriculum Coursework in Computer Engineering (AASTMT):** Operating Systems Design, Relational Database Theory, Algorithms & Data Structures, SCADA Systems.
* **Continuous Specialization:** Low-level LLM architecture (*AI Engineering from Scratch*), agentic CLI engineering (Antigravity), and open-source data pipelines (`php-jobspy`, `freeworld-job-finder`).
