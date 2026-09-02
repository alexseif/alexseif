# Eskandar (Alex) Seif
**Software Architect & Full-Stack Developer**  
*Target Roles: Software Architect | Full-Stack Developer | Symfony Developer | Drupal Developer | WordPress Developer*

* **Location:** Cairo, Egypt (Open to Relocation to the Netherlands / EU, Remote, or Contract)
* **Email:** alex.seif@gmail.com
* **Phone:** +201004006332
* **LinkedIn:** [linkedin.com/in/alexseif](https://linkedin.com/in/alexseif)
* **GitHub:** [github.com/alexseif](https://github.com/alexseif)
* **Portfolio & Case Studies:** [alexseif.com](https://alexseif.com)

---

## Professional Summary

Pragmatic Software Architect and Full-Stack Developer with over 20 years of experience designing, scaling, and maintaining high-availability web applications and transactional infrastructure. Proven track record taking mission-critical systems from initial architecture to production, including national-scale public sector platforms serving millions of citizens, region-first online payment gateways, and decoupled spatial GIS engines.

Deep specialist in the PHP ecosystem (Symfony, Drupal Enterprise, WordPress Core/FSE/ACF, Moodle), JavaScript/TypeScript (React, Node.js), Python (FastAPI), and relational database architecture (MySQL 3NF/Star Schema replication, PostgreSQL/PostGIS). Focuses on pragmatic software architecture, zero-downtime database migrations, deterministic DevOps automation, and eliminating technical debt.

**Engineering Boundary:** Designs the testing strategy, defines validator requirements, and establishes automated CI/CD quality gates. Does not execute manual QA testing.

---

## Core Technical Competencies & ATS Keywords

* **Architecture & System Design:** Distributed Systems, Decoupled Monoliths, High-Concurrency Routing, Domain-Driven Design (DDD), Transactional State Machines, REST & OpenAPI Contract Synchronization.
* **PHP Ecosystem:** Symfony Framework, Drupal Enterprise (Core, 8/9/10), WordPress (VIP, Multisite, Full Site Editing, ACF Pro, Gutenberg API), Moodle LMS, Custom MVC Frameworks, PHP 8.x / Legacy 7.x.
* **Full-Stack & Frontend:** TypeScript, React (React 19, Hooks), JavaScript (ES6+), Node.js, TailwindCSS, Vite, HTML5, CSS3 / SCSS.
* **Python & Geospatial:** Python 3.12, FastAPI, SQLAdmin, PostgreSQL 15+, PostGIS (Spatial Indexing, SRID 4326, GeoJSON).
* **Database & Data Layer Optimization:** MySQL / MariaDB (Master-Slave Replication, Query Plan Optimization, 3NF Transactional Normalization, Star Schema Analytical Views, Indexed Views), Redis.
* **DevOps, Cloud & Infrastructure:** Docker / Docker Compose, Linux Administration (CentOS, Oracle Linux, Debian), Nginx (Reverse Proxy, Media Streaming), AWS (EC2, ELB, S3, CloudFront), CI/CD (GitHub Actions, Jenkins), Air-Gapped Offline Deployment, Bash Automation.
* **Identity & Security Compliance:** SAML 2.0 Federation, Keycloak SSO, PCI DSS Compliant Architecture, SAMA Financial Compliance, Role-Based Access Control (RBAC).

---

## Professional Experience

### Software Architect & Full-Stack Developer
**iSoft (IdealSoft Emirates) | Retainer & Contract**  
*2020-2024*

Contracted by iSoft to deliver ministry-level digital infrastructure, high-concurrency transactional routing engines, and API architectures for federal and municipal public sector clients across Egypt and the GCC region.

#### Key Projects:

* **National Vehicle Inspection Scheduling Infrastructure (SASO - Saudi Ministry of Standards, Metrology and Quality):**
  * *Architecture:* Architected and scaled a nationwide vehicle inspection and modification scheduling platform managing multi-lane facilities operating within strict 15-minute booking windows.
  * *Concurrency Control:* Engineered a distributed transactional state-locking engine with a deterministic 5-minute inactivity TTL buffer, eliminating booking collisions across web, mobile, and internal state clients.
  * *Data Architecture:* Structured database models into 3NF for transactional safety and Star Schema for real-time facility calendar queries, reducing dataset load times to sub-second responses.
  * *Decoupled React Head:* Led the multi-phase migration of the Drupal core into a decoupled micro-frontend, exposing versioned REST APIs to a high-performance React client.

* **Air-Gapped Intranet Certification Platform (Egyptian Ministry of Interior - Traffic Police Department):**
  * *Architecture:* Architected a national, mandatory driver instruction and testing LMS operating under physical and logical network isolation with zero internet connectivity and zero remote access.
  * *Zero-Network DevOps:* Custom-patched an Oracle Linux 7.6 OS distribution to bind to encrypted physical USB storage as localized RPM package repositories for system updates without WAN access.
  * *Idempotent Bash Automation:* Authored self-validating Bash automation suites with rollback triggers, enabling non-technical security personnel to execute Git bundle merges and database migrations safely.
  * *Offline Verification:* Built a cryptographic offline voucher subsystem to validate testing fees within the intranet perimeter without external payment gateways.

* **Aman National Vehicle Inspection Ecosystem (Egyptian Ministry of Interior):**
  * *Architecture:* Designed the digital booking and dispatch engine for nationwide vehicle inspections, redirecting citizen volume from congested municipal police departments to commercial hubs and mobile vans.
  * *System Evolution:* Directed the architectural transition from an informational Drupal portal into an interactive dispatch system using spatial proximity query optimization.
  * *State Backend Integration:* Engineered an authenticated back-to-back REST API interface connecting Drupal directly with central state vehicle databases.

* **Salama Cooperative Insurance Web Gateway (Saudi Arabia):**
  * *Architecture:* Delivered the enterprise Drupal registration gateway for Shariah-compliant motor insurance under Saudi Central Bank (SAMA) regulatory standards.
  * *Validation & Integration:* Built pre-ingestion payload validation pipelines and Layer 7 load balancing rules, establishing the integration blueprint for subsequent Saudi public sector portal deliveries.

---

### Software Architect & Full-Stack Developer (Contract)
**Meem Development (SEF Academy)**  
*January 2024 - December 2024*

* **SAML 2.0 & Keycloak SSO Federation:** Re-engineered metadata schemas and SAML attribute assertions between Keycloak Identity Provider (IdP) and Moodle Service Provider (SP), resolving authentication failures and stabilizing corporate Single Sign-On.
* **Secure Database Topology:** Configured role-isolated SSH tunneling protocols for distributed engineering teams, enabling secure concurrent database operations on Test and UAT instances without public port exposure.
* **Transactional Email & Integrations:** Configured authenticated SMTP relays for deterministic course certificate dispatch and validated enterprise Microsoft Teams integration.
* **Release Governance:** Standardized release candidate criteria and handoff documentation to eliminate deployment regression risks.

---

### Co-Founder & Software Architect
**Wallety (Fintech Platform)**  
*December 2009 - July 2015*

Architected, launched, and scaled an early online payment gateway in Egypt, taking the platform from a solo-engineered MVP to a high-concurrency transactional infrastructure processing 33% of all domestic air travel ticketing volume in Egypt.

* **Core Engine Delivery:** Solely engineered the core payment gateway using PHP and Symfony, resolving banking connectivity issues and handling online payment settlements under unstable telecommunications infrastructure.
* **GDS & Bank Integrations:** Built direct integrations with domestic acquiring banks, 200+ merchants, and the Amadeus Global Distribution System (GDS) for atomic flight seat reservations.
* **Master-Slave Replication:** Implemented a clustered MySQL topology separating ACID transactional writes on the master from reporting read queries on slave nodes, eliminating I/O disk contention.
* **Asynchronous Queue Workers:** Engineered 1-second CLI background daemon loops to process transaction batches asynchronously, insulating end users from third-party gateway latency.

---

### Software Architect & Full-Stack Developer
**Independent Technical Consultancy & Retainers**  
*2006 - Present*

Continuous technical advisory and hands-on systems architecture for international clients, enterprise platforms, and digital agencies:

* **North South Consultants Exchange - NSCE (2025-2026):** Modernized an institutional donor transparency platform for UN, GIZ, and EU development programs. Unified corrupted translation tables into a normalized WordPress Advanced Custom Fields (ACF) schema, built dual-tier spatial governorate filtering for Egypt, and optimized MySQL queries to increase organic search visibility to over 20,000 monthly impressions.
* **Greek Community of Alexandria - EKA Modernization (2026):** Modernized a 15-year monolithic WordPress portal into a lightweight Full Site Editing (FSE) block theme. Built an AST shortcode migration pipeline, automated 15 years of legacy newsletter date parsing, and configured Nginx reverse proxy media streaming to reduce staging storage requirements.
* **barincairo.com (2026):** Architected a decoupled Web GIS platform utilizing React 19, Python 3.12 FastAPI, and PostgreSQL/PostGIS. Built sub-second viewport vector tile streaming, spatial route calculations, and an automated 3-tier venue ingestion pipeline with proximity deduplication.
* **Saaed Automotive Insurance via Softech (2018):** Stabilized an on-premise CentOS WordPress Multisite insurance portal. Backported and pinned legacy RPM packages to eliminate host crashes, and refactored multi-tenant RBAC permissions to isolate data across agency nodes.
* **MITCHDesigns (2009-2014):** Embedded Software Architect for a digital agency. Created the core PHP MVC framework and dynamic contract pricing engines (Smash Holidays, Agazat Masr), designed MySQL indexed database views, and trained development teams in Git workflows.
* **Ajel.sa News Platform via NileTech (2017-2019):** Engineered high-availability caching infrastructure for a major Saudi news outlet on Acquia Cloud. Configured enterprise Varnish edge caching and tuned MySQL indexes to sustain high traffic spikes during breaking national news cycles.

---

## Continuous Specialization & Applied AI Engineering

* **Low-Level AI Systems Architecture (Active Deep-Dive):** In-depth engineering study of transformer mechanics, attention algorithms, tokenization, model weights, and local inference architectures (*AI Engineering from Scratch*).
* **Applied Agentic Tooling:** Applying deep systems concepts to build spec-driven agentic workflows (Antigravity CLI) and open-source data pipelines (`freeworld-job-finder`, `php-jobspy`).

---

## Education

### B.Sc. in Business Information Systems (BIS)
**Arab Academy for Science, Technology and Maritime Transport (AASTMT)**

* **Completed 5-Year Engineering Curriculum Coursework:** Operating Systems Design, Relational Database Theory, Algorithms & Data Structures, SCADA Systems.

---

*Interactive Case Studies & Architecture Vault: [alexseif.com/case-studies](https://alexseif.com/case-studies)*
