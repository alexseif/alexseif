---
slug: 2011-bouri
title: "Bouri Center (E-Commerce & Enterprise ERP Integration)"
year: 2011
client_name: "MITCHDesigns (End-Client: Bouri Center)"
client_type: "Retail Enterprise & Distribution"
project_role: "Software Architect & Lead Full-Stack Developer"
subtitle: "Architected a custom e-commerce platform and inventory synchronization pipeline integrating a digital storefront with a legacy corporate ERP."
tech_stack:
  - "PHP"
  - "Custom MVC Framework & Rapid Application Development (RAD)"
  - "MySQL"
  - "Asynchronous Ingestion & Ledger Pipeline"
  - "REST API Integration"
  - "Rackspace Cloud / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Software Architect & Lead Full-Stack Developer | MITCHDesigns - Bouri Center (2011 - 2013)

## Overview
Bouri Center is a leading distributor and retailer of premium household and kitchen appliances in Egypt (including Kenwood, De'Longhi, and Braun). Through MITCHDesigns, this project delivered Bouri's flagship e-commerce storefront and integrated it directly with their corporate enterprise resource planning (ERP) back-office.

Served as Software Architect and Lead Full-Stack Developer across the entire project lifecycle. Led requirement elicitation with corporate stakeholders, negotiated API contracts with third-party ERP vendors, architected the core custom PHP MVC framework, modeled relational schemas, built major backend systems, conducted code reviews, and managed DevOps provisioning on Rackspace Cloud infrastructure.

## Key Technical Challenges & Architecture

### 1. ERP Integration & Virtual Branch Ledger
Faced with restrictive legacy ERP constraints and rigid third-party vendor interfaces, modeled the e-commerce database layer to represent the digital storefront as an independent virtual retail branch. This architecture created a dedicated local inventory ledger that decoupled web checkout transactions from upstream ERP latency and outages.

### 2. Asynchronous Ingestion & Data Remediation
Engineered an asynchronous batch processing engine to parse, sanitize, and normalize fragmented legacy product catalog feeds. Integrated human-in-the-loop validation triggers that flagged malformed SKU attributes without halting background queue execution.

### 3. Rapid Application Development (RAD) Engine
Designed and implemented an object-oriented Rapid Application Development engine that synchronized schema migrations with application logic, accelerating feature delivery across the engineering team while maintaining strict architectural quality gates.

### 4. Cloud Infrastructure & DevOps Governance
Managed infrastructure provisioning on Rackspace Cloud Linux servers, establishing dedicated staging and production tiers, automated deployment scripts, and database backup routines to guarantee high uptime and transactional reliability.
