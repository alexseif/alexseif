---
title: "Egyptian Ministry of Interior - Traffic Department"
year: 2020
url: "Intranet System"
client_type: "Public Sector"
agency: "Software Architect & Systems Technical Partner"
subtitle: "Driver Licensing LMS Engine (2020)"
tech_stack: ["Moodle LMS", "PHP 7.0.33", "Oracle Linux 7.6", "MySQL 5.7", "Apache 2.4", "Intranet Deployment", "Offline Voucher Auth", "Shell Scripting"]
---

#  Project Dossier
Architected and implemented a driver instruction and certification LMS for the Egyptian Ministry of Interior (Traffic Department) during the 2020 operational mandate. The system was customized to support a wide range of user literacy levels across vehicle licensing tiers. Engineered to run entirely within a closed intranet network without external internet dependencies.

###  Core Architecture & System Engineering
- **Offline Deployment Orchestration:** Managed core code modifications and database schema migrations within offline network constraints. Designed a multi-stage sandbox environment: developed migration procedures locally, engineered a bash script suite to execute code and database upgrades, and ran dry-runs to ensure stability when delivered via physical storage to the intranet.
- **Asynchronous Offline Authentication:** Addressed the lack of live network links to the central billing department by building an offline verification engine. Integrated with physical cash-collection points to translate printed financial receipt numbers into valid, single-use system entry access vouchers inside Moodle, without live API cross-checks.
- **UX Optimization:** Re-engineered the Moodle frontend layout and course navigation loops to support multimedia-driven educational milestones, allowing users with varying literacy levels to navigate mandatory training paths.

###  Engineering Notes / Edge Cases
Managed the Moodle application upgrade lifecycle within an offline environment. The deployment scripts functioned as state-machines to prevent file conflicts and ensure successful database execution on the intranet servers without direct developer access.

#  Use Case Case Study
### 1. Objective & Scope
The mandate required executing a driver certification platform for the Egyptian Traffic Department within an offline security infrastructure. The solution needed to handle millions of citizens of varying literacy levels while operating independently of the public internet.

### 2. Technical Decisions & Implementation
- **Deterministic Upstream Migrations:** Bypassed the lack of remote server access by implementing a local replication schema matching the server specifications (Oracle Linux 7.6, Apache 2.4, PHP 7.0.33, MySQL 5.7). Moodle git patches and file updates were wrapped into deterministic deployment packages.
- **Sequential Curricular Constraints:** Enforced linear course tracking within the application database, locking subsequent training modules and certification triggers until explicit multimedia completion criteria were met.