---
title: "Egyptian Ministry of Interior - Traffic Department"
year: 2020
url: "Air-Gapped Intranet System"
client_type: "Government / Public Sector"
agency: "Technical Partner"
subtitle: "Air-Gapped, High-Accessibility Driver Licensing LMS Engine (2020)"
tech_stack: ["Moodle LMS", "PHP 7.0.33", "Oracle Linux 7.6", "MySQL 5.7", "Apache 2.4", "Air-Gapped Intranet Optimization", "Offline Voucher Auth", "Shell Scripting"]
---

# 🗂️ Project Dossier
Architected and implemented a secure, contactless driver instruction and certification LMS for the Egyptian Ministry of Interior (Traffic Department) during the 2020 operational mandate. The system was customized to accommodate extreme user-demographic variances (from highly literate to low-literacy drivers) across all vehicle licensing tiers. Engineered to run entirely within an air-gapped, high-security intranet network with zero external internet dependencies.

### 🧠 Core Architecture & System Engineering
- **Air-Gapped Delivery & Blind Deployment Orchestration:** Managed complex core code modifications and database schema migrations under absolute zero-trust network constraints. Designed a rigorous multi-stage sandbox environment: developed and ran migration procedures locally, engineered an automated bash script suite to execute the code and database upgrade state transitions, and ran dry-runs with deployment teams to guarantee single-execution stability when delivered physically via media storage to the intranet.
- **Asynchronous Offline Authentication Matrix:** Resolved an absolute lack of live network links to the central billing department by building an offline verification engine. Integrated with physical cash-collection points to translate printed financial receipt numbers into algorithmically valid, single-use system entry access vouchers inside Moodle, bypassing live API cross-checks entirely.
- **Low-Literacy Universal UX Optimization:** Re-engineered the Moodle frontend layout and course navigation loops to support multimedia-driven, friction-free educational milestones, allowing users with minimal literacy to successfully complete mandatory legal training paths without administrative overhead.

### 🚨 Engineering Notes / Edge Cases
Overcame the notorious instability of Moodle's application upgrade lifecycle within a completely blind environment. The operational success of the system required treating deployment scripts as rigid state-machines, as a single failed query or file conflict on the intranet would mean total lockdown without developer access.

# 🏛️ Use Case Case Study
### 1. Objective & Scope
The mandate required executing a contactless, high-throughput driver certification platform for the Egyptian Traffic Department within a strict, air-gapped security infrastructure. The solution needed to handle millions of citizens of varying literacy levels while maintaining absolute separation from the public internet.

### 2. Technical Decisions & Implementation
- **Deterministic Upstream Migrations:** Bypassed the lack of remote server access by implementing a local replication schema matching the server specifications (Oracle Linux 7.6, Apache 2.4, PHP 7.0.33, MySQL 5.7). All core Moodle git patches and file updates were wrapped into deterministic deployment packages.
- **Sequential Curricular Constraints:** Enforced linear course tracking directly within the application database, completely locking down subsequent training models and certification triggers until explicit scorm/multimedia completion criteria were met.