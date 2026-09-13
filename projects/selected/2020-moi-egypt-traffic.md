---
slug: 2020-moi-egypt-traffic
title: National Air-Gapped Driver Testing LMS (Ministry of Interior)
year: 2021
client_name: Egyptian Ministry of Interior (via iSoft)
client_type: Public Sector / Federal
industry: "Government & Public Sector"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Architected an air-gapped national driver examination LMS on hardened Oracle Linux, engineering zero-network USB package mirroring and idempotent operator automation."
tech_stack:
  - "Oracle Linux 7.6 (Air-Gapped & Hardened)"
  - "Moodle LMS Enterprise"
  - "PHP 7.0.33"
  - "MySQL 5.7"
  - "Bash (Idempotent Deployment & Rollbacks)"
  - "Local USB RPM Repositories & Cryptographic Verification"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Egyptian Ministry of Interior (Traffic Police) | 2021 - 2022

### Context & Scale
The Egyptian Ministry of Interior Traffic Police Department (contracted via iSoft) oversees all statutory driver instruction, examination, and certification nationwide. Under strict national security directives, examination servers across all testing facilities were mandated to operate under complete physical and logical network isolation: zero internet connectivity, zero access to external package registries, and zero developer presence permitted during production runs. The system had to execute on an immutable legacy runtime (Oracle Linux 7.6, PHP 7.0.33, MySQL 5.7), support candidates of varied literacy levels through visual workflows, and enable non-technical police officers to perform releases safely. Retained as Lead Full-Stack Engineer and Architect to design the air-gapped platform architecture, author operator automation tooling, and deliver the system.

### Architectural Decisions
- **Zero-Network USB Package Mirroring:** Engineered custom Oracle Linux repository configurations that mounted encrypted physical USB drives as localized RPM package mirrors, allowing complete offline OS bootstrapping, patch deployment, and dependency resolution.
- **Idempotent Operator Automation:** Designed and authored self-validating Bash automation suites that executed environmental preflight checks, database snapshots, Git bundle unpacks, and schema migrations with automated rollbacks, enabling non-technical police personnel to perform updates safely.
- **Non-Verbal Iconography Testing Engine:** Refactored the examination interface within Moodle to rely on standardized visual iconography and auditory prompts, ensuring rigorous compliance with statutory traffic testing standards regardless of candidate literacy.
- **Offline Cryptographic Voucher Verification:** Implemented an asymmetric key voucher validation subsystem that verified candidate examination fee payments locally on the isolated LAN without connecting to external banking gateways.

### Engineering Execution
- **Hardened Shell Automation:** Built Bash automation with strict error trapping (set -euo pipefail), atomic lockfiles, and SHA-256 payload verification to prevent partial states during unattended updates.
- **Database Snapshot and Migration Workflows:** Engineered deterministic MySQL 5.7 schema migration scripts paired with pre-execution database snapshots, guaranteeing automated recovery if hardware power was interrupted.
- **Operating System Hardening:** Configured SELinux enforcing policies, restricted user shells, and disabled unneeded OS daemons to comply with federal physical facility security baselines.

### Measurable Impact
- **100% Air-Gap Mandate Compliance:** Achieved total compliance with national security physical isolation directives across all governorate examination facilities.
- **Zero Field Deployment Failures:** Police personnel successfully performed nationwide updates and database migrations with zero runtime failures and zero civilian developer on-site intervention.
- **Nationwide Licensing Standardization:** Unified driver instruction, testing, and certification scoring across every licensing facility in Egypt.
