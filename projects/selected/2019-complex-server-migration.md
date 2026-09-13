---
slug: 2019-complex-server-migration
title: Enterprise Cloud Infrastructure Migration (AHCC)
year: 2019
client_name: AHCC
client_type: Enterprise
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Architected and executed a zero-downtime enterprise migration to AWS using Terraform, ECS, Aurora PostgreSQL, and PgBouncer, syncing a 550 GB database cluster without data loss."
tech_stack:
  - AWS (ECS, Aurora PostgreSQL, S3, CloudFront, Route 53)
  - "Terraform (Infrastructure as Code)"
  - "Docker"
  - "PostgreSQL 11 & PgBouncer"
  - Redis
  - PHP / Node.js / Go
selected: false
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | AHCC | 2019

### Context & Scale
AHCC is an enterprise organization managing mission-critical business systems on single-point-of-failure on-premise physical infrastructure. Co-located relational databases and local disk storage dependencies caused acute operational bottlenecks: automated backups caused severe disk I/O degradation, system updates required risky manual intervention, and traffic surges were hard-bounded by bare-metal capacity. Retained as Lead Full-Stack Engineer and Architect to modernize the platform, author declarative Infrastructure as Code (IaC), containerize services, and execute a zero-downtime cloud migration of an active 550 GB PostgreSQL cluster to AWS.

### Architectural Decisions
- **Asynchronous Multi-Phase Database Sync:** Configured asynchronous logical replication between on-premise PostgreSQL and AWS Aurora PostgreSQL Multi-AZ, verifying consistency via row-level checksum verification until replication lag stabilized below 15ms prior to final cutover.
- **Split-Brain Prevention Protocol:** Reduced DNS TTL on Route 53 to 60 seconds 72 hours before cutover, enforcing temporary read-only database locks on the on-premise source at T-0 to reject stale writes during the final delta drain.
- **Connection Spikes with PgBouncer:** Deployed PgBouncer in transaction pooling mode in front of the Aurora PostgreSQL cluster, enabling the infrastructure to absorb bursts of up to 4,500 concurrent connections without backend process exhaustion.
- **Stateless Container Decoupling:** Decoupled local disk dependencies by migrating user asset pipelines to Amazon S3 with pre-signed upload URLs and CloudFront CDN distribution, packaging applications into stateless Docker containers on AWS ECS.

### Engineering Execution
- **Declarative Terraform Provisioning:** Authored modular Terraform manifests to provision VPC networking, multi-AZ subnets, security policies, ECS task definitions, and Aurora failover rules in version control.
- **Multi-Service Containerization:** Packaged multi-language services (PHP, Node.js, and Go) into lightweight multi-stage Docker images deployed to AWS ECS clusters.
- **Cutover Rehearsal & Validation:** Executed simulated staging cutovers to validate replication consistency, database foreign key constraints, and read/write failover procedures before live execution.

### Measurable Impact
- **Zero Customer Downtime:** Migrated the 550 GB enterprise PostgreSQL database and active services to AWS within a scheduled sub-minute DNS cutover window with zero data corruption.
- **4,500 Concurrent Connection Throughput:** PgBouncer transaction pooling prevented database pool exhaustion during high-concurrency traffic bursts.
- **Automated Provisioning:** Reduced infrastructure spin-up times from several days of manual server setup to automated, reproducible Terraform execution.
