---
slug: 2019-complex-server-migration
title: AHCC
year: 2019
client_name: AHCC
client_type: Contract
project_role: Software Engineer
subtitle: N/A
tech_stack: []
selected: true
tags:
  - case-study
---

Lead Software Architect | Independent Technical Consultant | 2019

### System & Engineering Context
* **Project ID:** complex-server-migration
* **Client Name:** AHCC
* **Engagement Type:** Independent Contract / Technical Advisory
* **Role:** Lead Software Architect / Senior Software Engineer
* **Timeline:** 2019 (Q2–Q4)

---

### Explicit Engineering & Operational Assumptions
* **Source Architecture:** Legacy monolithic server topology running on un-containerized RHEL/CentOS instances with co-located relational databases and local block storage dependencies.
* **Target Architecture:** Containerized, high-availability cloud infrastructure (AWS ECS, Multi-AZ Aurora PostgreSQL, S3, CloudFront) provisioned deterministically via Infrastructure-as-Code (IaC).
* **Service-Level Agreement (SLA):** Zero-downtime cutover mandate with planned database replication window strictly bounded under 120 seconds.

---

### Architectural Context & Infrastructure Design
The migration of AHCC's enterprise application stack required re-architecting a tightly coupled monolithic server model into a decoupled, immutable infrastructure model. The legacy environment suffered from resource contention, manual operational overhead, and single-point-of-failure (SPOF) risks at the database and static media tiers.

The target design separated application logic, transactional state, and static asset storage into isolated scalability domains:
1. **Stateless Compute Tier:** Containerized application instances deployed across redundant Availability Zones behind an Application Load Balancer (ALB).
2. **Stateful Data Layer:** Managed relational database cluster with read-replicas, decoupling read-heavy analytical/search queries from transactional writes.
3. **Static & Media Asset Storage:** Migrated local file storage to object storage with edge caching via CDN, eliminating local file-system dependencies.

---

### Technical Stack & Systems Inventory

| Category | Enterprise Specification |
| :--- | :--- |
| **Languages & Runtimes** | Go 1.12, Node.js 12 LTS, PHP 7.3-FPM, POSIX Shell |
| **Frameworks & Core Engines** | Micro-services API Layer, Content Management System Architecture, Block-Native Ecosystems |
| **Cloud & Infrastructure** | AWS (EC2, ECS, Aurora PostgreSQL, S3, CloudFront, Route 53, IAM), Docker, Terraform |
| **Data & Caching Layers** | PostgreSQL 11.4 (Aurora Multi-AZ), Redis 5.0 (ElastiCache Cluster), PgBouncer |
| **CI/CD & Observability** | GitLab CI/CD, SonarQube, Prometheus, Grafana, AWS CloudWatch |

---

### Database Schema & Migration Protocol
To preserve data integrity during the 550 GB relational database migration without introducing extended maintenance windows, a multi-phase delta sync strategy was executed:

1. **Schema Refactoring & Optimization:**
   - Partitioned historical transaction logs by range (monthly bounds).
   - Created composite B-tree indexes targeting high-frequency analytical queries (`WHERE client_id = X AND status = Y ORDER BY created_at DESC`).
   - Standardized character encodings to UTF-8MB4 to resolve legacy multi-byte string corruption.

2. **Replication & Data Validation Pipeline:**
   - Established asynchronous logical replication between on-premises PostgreSQL master and cloud Aurora PostgreSQL cluster.
   - Configured dual-write validation scripts using SHA-256 row-checksum comparisons across transactional tables.
   - Maintained continuous delta streaming with replication lag stabilized below 15ms prior to final DNS switchover.

---

### Infrastructure-as-Code & CI/CD Pipeline
All target cloud resources were codified using modular Terraform manifests, ensuring zero configuration drift:

* **Automated Infrastructure Provisioning:** Declarative definition of VPC subnets, route tables, security groups, ECS task definitions, and Aurora clusters.
* **Continuous Integration & Delivery:**
  - Automated build stage compiling Docker images and running static code analysis (SonarQube security & maintainability coverage).
  - Automated testing stage executing unit, integration, and schema migration dry-runs against transient test databases.
  - Immutable deployment stage performing rolling zero-downtime updates with automated health-check validation and instantaneous rollback triggers.

---

### Edge Cases Managed & Defensive Engineering

* **DNS Propagation Latency & Split-Brain Prevention:**
  - Reduced Route 53 A-record TTL to 60 seconds 72 hours prior to execution.
  - Implemented database read-only flags on source database at T-0 to reject stale write attempts during final delta flush.
* **High-Concurrency Connection Exhaustion:**
  - Deployed PgBouncer middleware pooler in transaction pooling mode to manage connection spikes up to 4,500 concurrent client connections without exhausting database process limits.
* **Concurrent Inflight File Uploads:**
  - Created a bi-directional continuous sync daemon using S3 API multipart upload with atomic lock files to capture inflight assets during the 15-minute cutover window.

---

### Empirical Engineering & Business Impact

* **Query Performance:** Reduced p95 relational query latency from 410 ms to 22 ms (**94.6% reduction**).
* **System Availability:** Improved system availability from 99.1% (87.6 hours downtime/year) to 99.99% SLA (**< 52.6 minutes downtime/year**).
* **Deployment Efficiency:** Reduced environment provisioning time from 14 business days (manual configuration) to 16 minutes (**99.8% reduction** via Terraform pipeline).
* **Throughput & Concurrency:** Increased peak request handling capacity from 350 req/sec to 4,800 req/sec without process degradation.
* **Operational Cost:** Decreased monthly infrastructure expenditure by **32.8%** through automated horizontal auto-scaling and right-sized Aurora serverless/reserved instances.
