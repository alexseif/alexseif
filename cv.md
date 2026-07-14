# Eskandar (Alex) Seif
**Software Architect & NGO Technical Partner**

- **Email:** alex.seif@gmail.com
- **Phone:** +201004006332
- **Location:** Cairo, Egypt | Open to Contract, Remote, and Relocation (EU / Gulf)
- **LinkedIn:** [linkedin.com/in/alexseif](https://linkedin.com/in/alexseif)
- **GitHub:** [github.com/alexseif](https://github.com/alexseif)
- **Website:** [alexseif.com](https://alexseif.com)

---

## Summary
> "I build the systems behind the systems — and I've been doing it for 20 years."
>
> I am a Software Architect & NGO Technical Partner operating at the intersection of architecture ownership and technical problem solving. I solve the hard problems that come before the code — understanding what's actually needed, designing how it fits together, and building systems that survive contact with reality. 
>
> I've spent 20 years doing this under real constraints — air-gapped government ministries, fragile bank networks, national payment gateways under distributed load, and regulatory frameworks that couldn't be argued with. 
>
> Most people come to me when they need to build something that doesn't exist yet, when they have something that works but can't scale or change, or when they need someone to own the technical function instead of just advising on it. My approach is approachable, human, and honest ("Whatever the problem is, I've probably solved a harder one.").
>
> **What I don't do:** manual testing. I design the quality gates, define the validation requirements, and establish the QA process. I don't man the gates myself.

---

## Skills

### Languages & Core Frameworks
- **PHP:** Symfony, Laravel, Core, Drupal Enterprise, Moodle
- **JavaScript/TypeScript:** Node.js, React
- **Scripting:** Bash

### Data Layer & Optimization
- **Databases:** MySQL/MariaDB, Master-Slave Replication
- **Optimization:** Query Optimization, Advanced Database Views, Relational Schema Normalization, Third Normal Form (3NF), Star Schema

### Infrastructure & Deployment
- **Systems:** Linux Systems Administration (CentOS), Nginx, Load Balancing
- **Automation & DevOps:** Custom Bash Automation, CI/CD Pipelines (GitHub Actions, Jenkins), Docker

### Engineering Governance
- Requirements Elicitation, Architecture Documentation (Wikis), Technical Debt Remediation, Test/QA Workflow Standardization, Mitigating Key-Person Risk ("Bus Factor")

---

## Experience

### Principal Software Architect & Technical Lead
**iSoft (IdealSoft Emirates)** | *Contract Retainer*  
*2020 – 2024*

Contracted by iSoft to deliver ministry-level digital infrastructure, high-concurrency transactional routing engines, and API architectures for federal and municipal public sector clients across Egypt and the GCC region.

#### Key Projects:

* **National Vehicle Inspection Infrastructure (Aman Portal & Egyptian Ministry of Interior)**
  * *Role:* Technical Lead for a public-private national initiative web ecosystem designed to offload vehicle inspections from traditional traffic departments to mobile vans and commercial hubs.
  * *System Evolution:* Directed a multi-phase implementation from an initial informational Drupal enterprise core to a dynamic geo-location routing system.
  * *API Integration:* Engineered a secure, high-availability back-to-back API integration with the state-level backend to map real-time point-of-service availability based on user-requested compliance services and citizen feedback loops.

* **Air-Gapped Intranet Training Portal (Egyptian Ministry of Interior - Traffic Police Dept.)**
  * *Role:* Architected and deployed a highly locked-down Moodle enterprise training portal running on a state intranet for the mandatory licensing courses of civilian and commercial heavy-machinery drivers nationwide.
  * *Frontend UX Remediation:* Resolved severe user literacy challenges by advising on specialized UX flows tailored for a high-illiteracy demographic, ensuring accessibility and strict compliance with legal testing mandates.
  * *Deterministic Air-Gapped DevOps:* Solved absolute security clearance constraints by engineering a zero-network, turn-key deployment pipeline. Custom-patched an Oracle Linux 7.6 distribution to utilize a physical USB drive as a localized package provider and repository source.
  * *Automated Intranet Upgrades:* Authored fault-tolerant bash automation scripts allowing non-technical personnel with high-level site clearance to execute complex, multi-branch Git merges, schema migrations, and configuration state updates blindly and flawlessly without direct developer server access.

* **National Inspection Scheduling Infrastructure (SASO - Saudi Ministry of Standards, Metrology and Quality)**
  * *Role:* Architected and scaled the vehicle inspection and modification scheduling infrastructure from zero to production launch, managing nationwide traffic across multi-lane facilities within strict 15-minute scheduling blocks.
  * *Unified CMS & Knowledge Base:* Leveraged an enterprise Drupal setup to combine high-concurrency transactions with an effective public-facing content management system, delivering public news, compliance guides, and operational documentation seamlessly.
  * *Distributed State Locking Engine:* Solved severe data collision and race conditions where three independent clients—the public web portal, the state internal backend, and the mobile application—competed simultaneously for identical 15-minute scheduling slots.
  * *Optimized Booking Pipeline:* Engineered a transactional API lock-state system that deferred heavy validation by pushing slot selection to the absolute end of the user workflow. Implemented a deterministic 5-minute buffer lock on chosen time slots; if registration fields were not completed within the window, the state machine automatically released the slot back to the global pool.
  * *Database Refactoring & Performance:* Remediated a sluggish API layer by restructuring data models into 3rd Normal Form (3NF) for transactional safety, combined with a Star Schema design for rapid analytical queries, driving heavy calendar and drop-down dataset loads to near-instant execution.
  * *Headless React Evolution:* Led the multi-phase migration of the monolithic architecture into a Headless ecosystem. Decoupled the validated core business workflows and securely exposed them via versioned APIs to a modern, high-performance React frontend.

* **State-Licensed Cooperative Insurance Platform (Salama Portal, Saudi Arabia)**
  * *Role:* Lead Engineer for the initial foundational project under the iSoft partnership, deploying an enterprise Drupal platform to manage high-volume, compliant digital car insurance registrations for one of the largest Shariah-compliant insurers in the MENA region.
  * *Architectural Blueprint:* Engineered the primary data registration workflows, validation mechanics, and secure transaction-handling layers that were later adopted and scaled across subsequent federal Saudi Arabian public portals.
  * *Regulatory Integration:* Structured data capture payloads and secure external API handshakes to ensure strict compliance with regional cooperative insurance regulations and legal security standards.

---

### Integration Architect & Technical Lead (Contract)
**Meem Development (SEF Academy)**  
*January 2024 – December 2024*

* **SSO Federation & Keycloak Integration:** Configured and stabilized SAML 2.0 Single Sign-On (SSO) between Keycloak and Moodle, resolving critical metadata and realm authentication blockages preventing user login.
* **LMS Infrastructure Stabilization:** Stabilized automated certificate delivery (via PHPMailer/SMTP), resolved server failures through file permission audits and deep debug log analysis, and completed Microsoft Teams plugin integration.
* **Engineering Standards & Security:** Defined release notes templates and release candidate processes to standardize deployment handoffs. Established secure MySQL access protocols via SSH tunnels for the distributed development team.

---

### Co-Founder & Chief Technology Officer (CTO)
**Wallety (Fintech Platform)**  
*December 2009 – July 2015*

Architected, launched, and scaled Egypt’s first comprehensive secure online payment gateway from a solo-engineered MVP to a high-concurrency national infrastructure processing 33% of all domestic air travel ticketing throughput.

* **Zero-to-One Product Delivery:** Solely engineered and launched the initial production platform utilizing PHP and Symfony to solve critical banking infrastructure gaps regarding online fraud and regulatory non-compliance.
* **National Scale & GDS Integration:** Secured direct infrastructure integrations with all domestic acquiring banks, 200+ enterprise merchants within year one, and the Amadeus global distribution system (GDS).
* **Engineering Leadership & Scale:** Post-funding, scaled and directed a 30-person engineering organization, establishing technical roadmaps, architectural standards, and security-first development practices.
* **Defensive Transaction Routing:** Built transactional state mechanics to safely cache, retry, and commit atomic financial updates, mitigating systemic database latency and network dropouts across fragile legacy bank networks.

---

### Software Architect & Technical Consultant
**Independent Consultancy & Retainers**  
*2006 – Present*

A continuous thread of direct personal engagement with organizations — running since 2006, predating and never deprioritizing any concurrent contracted or retainer role held simultaneously. Between 2015 and 2021, this consultancy was my primary focus, delivering full-stack architecture, database optimization, and team scaling for international clients.

* **Lead Software Architect & Technical Partner (North South Consultants Exchange - NSCE | 2025–2026):** Technical partner for a donor transparency platform used by institutional funders (UN, GIZ, EU) to evaluate regional development programs. Unified multilingual database records into a normalized ACF metadata schema and developed geographic filtering displaying Egyptian governorate-level data granularity.
* **Systems Stabilization Engineer & Consultant (Saaed via Softech | 2018):** Engaged to stabilize and maintain a fragile multi-network WordPress car insurance portal in the UAE. Manually patched CentOS OS repositories to pin old versioned PHP packages and debugged hidden role permissions across multi-site networks.
* **Software Architect & Embedded Technical Lead (Mitchdesigns | 2009–2014):** Served as de facto Software Architect for a boutique digital design agency over five continuous years, embedded full-time on-site. Established the core PHP framework and architectural standards adopted across all client project deliveries. Owned architecture decisions end-to-end, led code reviews and QA processes, engineered DevOps pipelines, and delivered structured Git workflow training sessions — mentoring and systematically upskilling the in-house team on engineering discipline, version control standards, and software craftsmanship.
* **Hyper-Scale Mass Media (Ajel.sa via NileTech | 2017–2019):** Managed the technical infrastructure for Saudi Arabia's #2 news outlet. Configured enterprise Varnish edge caching on an Acquia Cloud environment and tuned relational database indexing to absorb massive traffic spikes during breaking national news cycles. Built asynchronous background parsing pipelines to safely pull and ingest data feeds from global networks like the BBC without blocking main-thread application delivery.
* **B2B Marketplace Evolution (Esorus Ecosystem | 2020):** Designed a highly scalable relational database schema using Symfony to pivot a content platform into a commercial B2B marketplace indexing over 15,000+ specialized products and multi-party workflows.

---

## Education

### Computer Engineering Curriculum
**Arab Academy for Science, Technology and Maritime Transport (AASTMT)**  
*Completed 5-year core engineering coursework and technical syllabus through final year.*

* **Core Focus:** Operating System Design & Implementation, Relational Database Design, SCADA Systems, and Advanced Algorithms.

---

*Note: This document serves as a high-density chronological technical execution summary. To review the complete, interactive multi-decade project database, raw input validation structures, and detailed architectural use-case records, access the dynamic digital directory via: [alexseif.com/case-studies](https://alexseif.com/case-studies)*
