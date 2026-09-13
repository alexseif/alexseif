# Eskandar (Alex) Seif
**Senior Full-Stack Engineer | Systems Architecture**  
*Specialization: High-Concurrency Web Platforms | Modern PHP (Symfony / Drupal / WordPress) | React / Python FastAPI | Database Architecture*

* **Location:** Cairo, Egypt (Available for Immediate Remote / B2B Contract | Open to Relocation to the Netherlands / EU)
* **Email:** alex.seif@gmail.com
* **Phone:** +201004006332
* **LinkedIn:** [linkedin.com/in/alexseif](https://linkedin.com/in/alexseif)
* **GitHub:** [github.com/alexseif](https://github.com/alexseif)
* **Portfolio & Case Studies:** [alexseif.com](https://alexseif.com)

---

## Professional Summary

Pragmatic Senior Full-Stack Engineer and Systems Architect with over 20 years of hands-on experience designing, scaling, and maintaining production web platforms, transactional engines, and data-intensive applications. Strong background in modern PHP (Symfony, Drupal Enterprise, WordPress FSE/ACF, Moodle), TypeScript and React, Python (FastAPI), and relational database architecture (MySQL, PostgreSQL/PostGIS).

Proven track record taking systems from initial design through zero-downtime production delivery, including nationwide public sector infrastructure, high-concurrency transactional routing engines, air-gapped intranet deployments, and decoupled Web GIS platforms. Focuses on pragmatic system architecture, 3NF/Star schema normalization, deterministic CI/CD automation, and GDPR/PCI-DSS compliance.

---

## Technical Stack & Architecture Competencies

* **Architecture & System Design:** Distributed Systems, Decoupled Architecture, High-Concurrency Routing, Transactional State Machines, Domain-Driven Design (DDD), REST & OpenAPI Contract Synchronization.
* **PHP Ecosystem:** Symfony Framework, Drupal Enterprise (Core, 8/9/10), WordPress (Full Site Editing, ACF Pro, Gutenberg Block API, Multisite), Moodle LMS, Custom MVC Frameworks, PHP 8.x OOP.
* **Full-Stack & Frontend:** TypeScript, React (React 19, Hooks), JavaScript (ES6+), Node.js, TailwindCSS, Vite, HTML5, CSS3 / SCSS.
* **Python & Geospatial:** Python 3.12, FastAPI, PostgreSQL 15+, PostGIS 3.3+ (Spatial Indexing, SRID 4326, GeoJSON, Viewport Vector Streaming).
* **Database & Data Layer Optimization:** MySQL / MariaDB (Master-Slave Replication, Query Optimization, 3NF Normalization, Star Schema Views, Indexed Views), Redis (Object Caching).
* **DevOps, Cloud & Infrastructure:** Docker / Docker Compose, Linux Administration (Debian, CentOS, Oracle Linux), Nginx (Reverse Proxy, Caching), AWS (EC2, ELB, S3, CloudFront), CI/CD (GitHub Actions), Air-Gapped Intranet Deployment, Bash Automation.
* **Security & Regulatory Compliance:** GDPR Compliance, PCI DSS Architecture, SAML 2.0 / Keycloak SSO Federation, SAMA Standards, Role-Based Access Control (RBAC).

---

## Professional Experience

### Lead Full-Stack Engineer & Architect
**Contract Engagements | Institutional & Digital Platforms** | *January 2025 - Present*

* **barincairo.com (2026):** Architected a decoupled Web GIS platform utilizing React 19, Python 3.12 FastAPI, and PostgreSQL/PostGIS. Implemented PostGIS GiST spatial indexing (SRID 4326) and sub-second GeoJSON bounding-box queries for dense vector map streaming. Engineered a multi-stage ingestion pipeline with spatial proximity deduplication (ST_DWithin < 15m), achieving 0% entity duplication across scraper harvest runs.
* **Greek Community of Cairo Modernization (2026):** Modernized an enterprise community portal into a block-native WordPress FSE architecture on PHP 8.2. Developed an automated AST serialization parser to transform 4,870 legacy post builder entries into core Gutenberg blocks with zero data loss. Purged database autoload bloat and integrated Redis object caching, reducing TTFB below 200ms with zero cutover downtime.
* **Greek Community of Alexandria Modernization (2026):** Modernized a 15-year WordPress portal into a lightweight Full Site Editing block theme on PHP 8.2 with full GDPR compliance. Engineered an AST shortcode migration pipeline, automated 15 years of legacy newsletter date parsing, and configured Nginx reverse proxy media streaming.
* **North South Consultants Exchange - NSCE (2025):** Modernized an institutional donor transparency platform for UN, GIZ, and EU development programs. Unified multilingual database records into a normalized WordPress ACF schema, built dual-tier spatial governorate filtering for Egypt, and optimized MySQL queries to increase organic search visibility to over 20,000 monthly impressions.

### Integration Architect & Technical Lead
**Meem Development (SEF Academy)** | *January 2024 - December 2024*

* **SAML 2.0 & Keycloak SSO Federation:** Architected and deployed enterprise SAML 2.0 Single Sign-On (SSO) via Keycloak across Moodle LMS, a custom student registration web app, and an administrative portal, resolving authentication token failures and unifying identity management.
* **Secure Database Topology:** Configured role-isolated SSH tunneling protocols for distributed engineering teams, enabling secure concurrent database administration on Test and UAT instances without public port exposure.
* **Transactional Relays & Integrations:** Configured authenticated SMTP relays for deterministic course certificate dispatch and validated enterprise Microsoft Teams integration hooks.

### Principal Software Architect & Technical Lead
**iSoft (IdealSoft Emirates) | Retainer & Contract** | *2020 - 2024*

Contracted to deliver ministry-level digital infrastructure, high-concurrency transactional routing engines, and API architectures for federal and municipal public sector clients across Egypt and Saudi Arabia.

* **National Vehicle Inspection Scheduling (SASO - Saudi Ministry of Standards, Metrology and Quality):** Architected the nationwide vehicle inspection booking system managing multi-lane facilities. Engineered a distributed transactional state-locking engine with a deterministic 5-minute buffer that eliminated race conditions across competing web, mobile, and backend channels for 15-minute appointment slots. Remodeled database schemas into 3NF for transactional safety and Star Schema for real-time reporting. Decoupled Drupal core to expose versioned REST APIs to a high-performance React client.
* **Air-Gapped Intranet Certification Platform (Egyptian Ministry of Interior - Traffic Police Dept.):** Architected and deployed an enterprise Moodle training portal on a restricted state intranet for mandatory licensing courses nationwide with zero internet access. Engineered a deterministic zero-network deployment pipeline using a custom-patched Oracle Linux OS repository on physical USB storage with fault-tolerant Bash migration scripts and offline cryptographic fee verification.
* **National Vehicle Inspection Digital Ecosystem (Aman Portal):** Designed the digital booking and dispatch engine for nationwide vehicle inspections, redirecting citizen volume from congested municipal police departments to commercial hubs and mobile inspection vans via high-availability backend API integration.
* **State-Licensed Cooperative Insurance Platform (Salama Portal - Saudi Arabia):** Engineered core registration workflows, pre-ingestion validation mechanics, and secure transaction-handling layers for compliant digital automotive insurance under Saudi Central Bank (SAMA) regulatory standards.
* **Enterprise Governance & Deployment Reliability:** Enforced a strict 4-tier environment topology (Dev, Testing, Staging, Preproduction) and a Tuesday-only production deployment schedule, eliminating weekend critical failures.

### Lead Full-Stack Engineer & Architect
**NileTech & Digital Media Retainers** | *2016 - 2019*

* **High-Concurrency Digital News Network (Ajel.sa | 2017 - 2019):** Architected and scaled Saudi Arabia's premier digital newspaper on Drupal Enterprise and Acquia Cloud Enterprise. Engineered a multi-tier caching hierarchy combining Varnish edge caching with Redis persistent object caching, offloading over 85% of dynamic database read queries and preserving sub-50ms response times during breaking news traffic surges. Implemented a 3-tier automated CI/CD release pipeline that eliminated cutover downtime.
* **Strangler-Fig News Broadcast Migration (218TV.net | 2016):** Executed a Strangler-Fig pattern migration for high-traffic broadcast news operations into an enterprise Drupal architecture, configuring Varnish reverse-proxy caching sustaining 15,000 active concurrent connections.
* **Civic & Cultural Heritage Platform (Turathuna | 2017):** Architected a bilingual Drupal platform for the Abu Dhabi Cultural Programs & Heritage Festivals Committee with broadcast TV archives, festival calendars, and native Arabic RTL typography.
* **Hospitality Space Allocation Platform (HSP | Focus Media Group | 2017):** Architected a 3-tier event booking, meeting room allocation, and real-time hallway digital signage wayfinding system deployed across luxury hotels (Hilton) and corporate venues.
* **Automotive Insurance Portal Stabilization (Saaed via Softech | 2018):** Stabilized an on-premise CentOS WordPress Multisite insurance portal, backporting and pinning legacy RPM packages to eliminate host crashes and refactoring multi-tenant RBAC permissions.

### Co-Founder & Software Architect
**Wallety (Fintech Payment Gateway)** | *December 2009 - July 2015*

Architected, launched, and scaled an early online payment gateway in Egypt, processing 33% of all domestic air travel ticketing volume.

* **PCI DSS Compliant Core Engine:** Solely engineered the core payment gateway in PHP and Symfony adhering to PCI DSS security standards, handling online payment settlements under unstable telecommunications infrastructure.
* **GDS & Banking Integrations:** Built direct integrations with domestic acquiring banks, 200+ enterprise merchants, and the Amadeus Global Distribution System (GDS) for atomic flight seat reservations.
* **Master-Slave Replication & CLI Daemons:** Clustered MySQL separating master ACID writes from slave read-reporting, and engineered 1-second CLI background daemon loops to process transaction batches asynchronously.

### Lead Software Engineer & Web Architect
**MITCHDesigns** | *2009 - 2014*

Embedded Software Architect for a boutique digital design agency, establishing backend architecture standards across commercial client platforms.

* **Custom PHP MVC Framework:** Architected a modular PHP MVC framework that served as the technical foundation for over 15 client platforms, eliminating boilerplate and delivering sub-100ms response times.
* **Dynamic Contract Pricing & Booking Engines:** Engineered dynamic pricing rules and reservation engines for travel tech platforms including Smash Holidays and Agazat Masr (Tourico).
* **Data Modeling & Team Enablement:** Designed normalized relational schemas and compound MySQL indexing strategies for high-inventory retail clients (The Giftery, Bouri Center). Established agency Git workflows, requirements elicitation SOPs, and developer training.

---

## Education & Foundations

* **Completed 5-Year Engineering Curriculum Coursework in Computer Engineering (AASTMT):** Operating Systems Design, Relational Database Theory, Algorithms & Data Structures, SCADA Systems.
* **Continuous Specialization:** Low-level LLM architecture (*AI Engineering from Scratch*), agentic CLI engineering (Antigravity), and open-source data pipelines (`php-jobspy`, `freeworld-job-finder`).
