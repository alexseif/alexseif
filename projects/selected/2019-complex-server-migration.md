---
slug: 2019-complex-server-migration
title: Enterprise Cloud Infrastructure Migration (AHCC)
year: 2019
client_name: AHCC
client_type: Enterprise
project_role: Software Architect & Full-Stack Developer
subtitle: Zero-downtime database replication, containerization, and AWS infrastructure-as-code migration.
tech_stack:
  - AWS (ECS, Aurora PostgreSQL, S3, CloudFront, Route 53)
  - Docker
  - Terraform
  - PostgreSQL 11
  - PgBouncer
  - Redis
  - PHP / Node.js / Go
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | AHCC (2019)

## Executive Summary
Re-architected and migrated an enterprise server infrastructure from legacy on-premise monolithic servers to a high-availability AWS cloud topology. Designed an asynchronous multi-phase database delta sync protocol to migrate a 550 GB relational database cluster with zero customer-facing downtime.

---

## 1. Context & Business Problem
* **Client / Domain:** AHCC (Enterprise)
* **Timeline:** 2019
* **Project Role:** Software Architect & Full-Stack Developer

### The Problem
The client ran core business operations on single-point-of-failure on-premise servers with co-located relational databases and local disk storage dependencies. System backups caused severe performance drops, deployments required manual intervention, and scaling during traffic peaks was constrained by physical hardware limits.

---

## 2. Technical Stack & Infrastructure Architecture
* **Cloud Infrastructure:** AWS ECS (containerized application tasks), S3 (media object storage), and CloudFront CDN.
* **Database & Caching:** AWS Aurora Multi-AZ PostgreSQL 11 with PgBouncer connection pooling and Redis caching.
* **Automation & Provisioning:** Declarative Terraform manifests for VPC networking, security policies, and container task definitions.

---

## 3. Architectural Decisions & Engineering Challenges
* **Multi-Phase Database Delta Sync:** Configured asynchronous logical replication between on-premise PostgreSQL and cloud Aurora PostgreSQL, running row-level checksum verification scripts until replication lag stabilized below 15ms prior to DNS cutover.
* **Connection Spike Management:** Placed PgBouncer in transaction pooling mode in front of the database cluster, allowing the system to handle bursts up to 4,500 concurrent connections without exhausting backend connection limits.
* **Split-Brain Prevention during Cutover:** Lowered DNS TTL to 60 seconds 72 hours prior to migration and applied temporary read-only constraints on the source database at T-0 to reject stale write attempts during the final delta flush.
* **Stateless Application Decoupling:** Migrated local media asset pipelines to S3 with pre-signed upload URLs and CloudFront distribution.

---

## 4. Operational & Institutional Impact
* **Zero Downtime Migration:** Completed the production cutover within a scheduled sub-minute DNS switchover without data loss.
* **Database Latency:** Reduced query response times substantially through Aurora indexing and read-replica distribution.
* **Automated Scalability:** Reduced infrastructure provisioning time from days of manual setup to automated Terraform deployments.
