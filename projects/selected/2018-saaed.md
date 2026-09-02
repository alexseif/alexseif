---
slug: 2018-saaed
title: Saaed Automotive Insurance Portal (Softech)
year: 2018
client_name: Softech / Saaed
client_type: Automotive Insurance / Public Sector Contractor
project_role: Software Architect & Full-Stack Developer
subtitle: System stabilization, OS dependency pinning, and multi-tenant RBAC remediation for a UAE automotive insurance portal.
tech_stack:
  - PHP
  - WordPress Multisite
  - CentOS
  - MySQL
  - RPM Packaging
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | Softech / Saaed (2018)

## Executive Summary
Led technical stabilization and security remediation for the Saaed UAE automotive insurance portal operating on an on-premise CentOS enterprise cluster. Stabilized a legacy multi-network architecture suffering from OS dependency conflicts, memory exhaustion, and multi-tenant privilege leakage across administrative scopes.

---

## 1. Context & Business Problem
* **Client / Domain:** Softech / Saaed (UAE Automotive Insurance)
* **Timeline:** 2018
* **Project Role:** Software Architect & Full-Stack Developer

### The Problem
The portal ran on an unpinned on-premise CentOS environment where upstream OS updates caused library mismatches and sudden runtime crashes. Additionally, the multi-tenant architecture suffered from privilege escalation bugs where insurance agents could inadvertently access cross-network administrative records.

---

## 2. Technical Stack & Implementation
* **Application Layer:** PHP custom modules on a multi-network WordPress architecture.
* **Operating System & Infrastructure:** Enterprise CentOS on physical on-premise hardware.
* **Data Layer:** MySQL relational database with tenant-scoped indexing.
* **Deployment Workflow:** Local RPM package pinning and staging regression environments.

---

## 3. Architectural Decisions & Engineering Challenges
* **OS-Level Dependency Pinning:** Backported required runtime patches and locked versioned RPM packages within a dedicated local repository, eliminating host-level execution mismatches and server crashes.
* **Multi-Tenant RBAC Isolation:** Refactored permission inheritance across End-Clients, Insurance Agents, and System Administrators, enforcing context-scoped access checks to prevent data leaks between independent tenants.
* **Defensive Staging Workflows:** Built isolated staging environments mirroring production configurations, requiring test verification before promoting code changes to live servers.

---

## 4. Operational & Institutional Impact
* **System Uptime:** Neutralized cascade server crashes and achieved stable 24/7 runtime availability.
* **Security & Data Isolation:** Resolved all discovered privilege escalation vectors across multi-site boundaries.
* **Release Predictability:** Eliminated unverified production deployments by standardizing the staging and validation pipeline.
