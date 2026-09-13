---
slug: 2018-saaed
title: Saaed Automotive Insurance Portal (Softech)
year: 2018
client_name: Softech / Saaed
client_type: Automotive Insurance / Public Sector Contractor
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Stabilized a UAE automotive insurance portal on WordPress Multisite and on-premise CentOS, remediating cross-tenant privilege escalation and pinning OS runtime dependencies."
tech_stack:
  - "PHP"
  - "WordPress Multisite"
  - "CentOS / Linux (On-Premise)"
  - "MySQL"
  - "RPM Packaging & Dependency Pinning"
  - "Role-Based Access Control (RBAC)"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Softech (Saaed) | 2018

### Context & Scale
Saaed is the national traffic safety and automotive insurance claims service provider in the United Arab Emirates. Operating via contractor Softech, the digital claims portal ran on on-premise CentOS enterprise server clusters. Automatic and unpinned upstream OS updates frequently introduced runtime C-library mismatches, resulting in severe service crashes. Simultaneously, the legacy WordPress Multisite implementation suffered from permission inheritance flaws that allowed insurance agents to inadvertently access cross-network administrative records and policyholder claims across independent tenant boundaries. Retained as Lead Full-Stack Engineer and Architect to stabilize the on-premise infrastructure, isolate multi-tenant data access, and resolve security vulnerabilities.

### Architectural Decisions
- **Multi-Tenant RBAC Boundary Enforcement:** Re-architected role and capability trees across end-clients, insurance agents, adjusters, and system administrators, injecting strict tenant-context checks into query handlers to prevent cross-tenant data leaks.
- **OS-Level Dependency Pinning:** Backported critical runtime library patches and locked versioned RPM packages within a dedicated local repository, preventing unexpected host-level package updates from destabilizing the production stack.
- **Production-Mirror Staging Pipeline:** Established an isolated staging environment physically mirroring the on-premise production server configuration, mandating full regression validation before promoting releases.
- **Tenant-Scoped Query Isolation:** Re-engineered database access routines to enforce tenant ID encapsulation on all claim queries, indexing tenant scopes to maintain high performance under concurrent access.

### Engineering Execution
- **Privilege Escalation Patching:** Audited custom modules and database query hooks, eliminating horizontal privilege escalation vectors across multi-site network boundaries.
- **RPM Packaging and Compilation:** Compiled and packaged custom-patched PHP and OpenSSL dependencies into version-locked RPMs distributed securely across the physical server cluster.
- **Release Control Protocols:** Replaced direct file modifications with Git-tracked release profiles and formal deployment checklists for on-premise operations teams.

### Measurable Impact
- **Zero Cross-Tenant Privilege Leaks:** Completely resolved all horizontal privilege escalation vectors, ensuring strict data isolation across independent insurance carriers.
- **100% Elimination of Library Crashes:** Version-locked RPM packages halted uncoordinated OS upgrades, securing 24/7 uptime on on-premise physical infrastructure.
- **Predictable Production Releases:** Mirror-staging verification eliminated deployment regressions and unverified runtime failures.
