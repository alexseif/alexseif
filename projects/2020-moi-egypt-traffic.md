---
title: "Air-Gapped Driver Licensing LMS — Egyptian Ministry of Interior"
year: 2020
client_type: "Public Sector"
agency: "Senior Lead Engineer & Systems Analyst"
tech_stack: ["Moodle LMS", "PHP 7.0.33", "Oracle Linux 7.6", "MySQL 5.7", "Bash Shell Scripting", "Custom Git Release Packages"]
---

# Use Case: Zero-Network DevOps & UX Adaptation for High-Illiteracy Populations

### 1. Objective & Scope
Architected and implemented a mandatory driver instruction and certification system for all civilian and commercial heavy-machinery license applicants across Egypt. The system had to serve millions of citizens with diverse literacy levels and operate entirely within a completely air-gapped intranet network with zero internet access due to state security mandates.

### 2. Technical Decisions & Implementation
* **Hacked CentOS/Oracle Linux Deployment:** Solved absolute security clearance restrictions by customizing the server distribution to recognize a physical USB flash drive as the local package provider. This allowed the only technician with security clearance to plug in the drive, install required system dependencies, and pull the source code completely offline.
* **Deterministic Automated Upgrades:** Authored fault-tolerant bash automation scripts that functioned as state machines. This enabled non-technical on-site personnel to execute complex, multi-branch Git merges, Moodle database schema migrations, and configuration updates blindly without causing file conflicts or production downtime.
* **Asynchronous Offline Billing Vouchers:** Bypassed the total lack of network links to the central billing department. Built an offline engine that took printed receipt numbers from physical cash-collection points and translated them into valid, single-use access vouchers directly within Moodle's local database.
* **UX Transformation for Low Literacy:** Stripped down and re-engineered the Moodle frontend layout. Replaced dense text-heavy flows with clean iconographies and linear, multimedia-driven video loops to ensure that illiterate commercial drivers could independently navigate the mandatory safety paths and complete tracking blocks.