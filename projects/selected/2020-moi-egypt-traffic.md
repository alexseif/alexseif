---
slug: 2020-moi-egypt-traffic
title: National Air-Gapped Driver Testing LMS (Ministry of Interior)
year: 2021
client_name: Egyptian Ministry of Interior (via iSoft)
client_type: Public Sector / Federal
project_role: Software Architect & Full-Stack Developer
subtitle: Air-gapped driver instruction and certification LMS operating under complete physical network isolation on Oracle Linux.
tech_stack:
  - PHP 7.0.33
  - Bash Automation
  - Moodle LMS
  - Oracle Linux 7.6 (Air-Gapped)
  - MySQL 5.7
  - Local USB RPM Repositories
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | Egyptian Ministry of Interior (2021)

## Executive Summary
Architected and engineered a national, mandatory driver instruction and testing platform for the Egyptian Ministry of Interior Traffic Police Department. The system operates under strict physical and logical network isolation with zero internet connectivity, zero external software repositories, and zero developer presence during live deployments.

---

## 1. Context & Problem
* **Client / Domain:** Egyptian Ministry of Interior (Traffic Police Department)
* **Timeline:** 2021-2022
* **Project Role:** Software Architect & Full-Stack Developer

### The Challenge
Federal security mandates required testing centers across Egypt to operate in complete isolation from the public internet. The platform needed to support standardized driver examinations for candidates with varied literacy levels, run on an immutable legacy runtime (PHP 7.0.33 and MySQL 5.7 on Oracle Linux 7.6), and allow non-technical ministry officers to execute updates reliably.

---

## 2. Technical Stack & Systems Infrastructure
* **Operating System:** Hardened Oracle Linux 7.6 running on physical air-gapped on-premise hardware.
* **Application Core:** Moodle LMS platform adapted for non-verbal iconography workflows.
* **Automation:** Idempotent Bash scripts with embedded rollback triggers and SHA-256 validation.
* **Database:** MySQL 5.7 relational database with localized migration scripts.

---

## 3. Architectural Decisions & Engineering Challenges
* **Zero-Network Package Mirroring:** Engineered custom Oracle Linux repository configurations that mounted encrypted physical USB drives as localized RPM package mirrors, allowing system bootstrapping and security patching without external internet access.
* **Idempotent Operator Automation:** Authored self-validating Bash automation suites that executed database backups, Git bundle merges, schema migrations, and health checks with automated rollbacks, enabling non-technical security personnel to perform deployments safely.
* **Iconography-Driven Testing Interface:** Designed an interface workflow centered on standardized visual symbols to accommodate diverse literacy backgrounds while complying with statutory testing regulations.
* **Offline Fee Verification:** Built a cryptographic voucher generation and verification subsystem that validated testing fees locally on the intranet without connecting to remote payment gateways.

---

## 4. Operational & Institutional Impact
* **Air-Gapped Compliance:** Maintained 100% compliance with federal security mandates across all nationwide testing facilities.
* **Zero Deployment Failures:** Ministry operators executed multi-branch updates and database migrations with zero runtime failures and zero external developer access.
* **Nationwide Standardization:** Standardized driver instruction and examination across all licensing centers in Egypt.
