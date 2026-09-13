---
slug: 2015-visallc
title: "VisaLLC, MeVisa & TravelBox (Multi-Brand Visa Portals & Centralized miniERP)"
year: 2015
client_name: "VisaLLC (TravelBox / MeVisa)"
client_type: "Travel & Consular Visa Services"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Multi-brand visa intake portals and custom centralized miniERP with bidirectional webhook synchronization."
tech_stack:
  - "PHP"
  - "Custom miniERP Architecture"
  - "WordPress & WooCommerce"
  - "Bidirectional State Machine & Webhooks"
  - "Russian Cloud Infrastructure & Yandex SEO"
  - "MySQL"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | VisaLLC Ecosystem | 2015 - Present

## Context & Scale
VisaLLC operated a high-volume travel agency facilitating UAE tourist and entry visas for travelers across the Russian and CIS markets. The business managed multiple branded consumer intake storefronts (VisaLLC, MeVisa, TravelBox.ru) and required a central operational platform to process thousands of visa applications, coordinate consular document submissions, track multi-currency financial ledgers, and synchronize customer status updates.

## Architectural Decisions
* **Decoupled Multi-Storefront & Central miniERP Architecture:** Segregated consumer-facing marketing and payment collection (isolated WordPress and WooCommerce instances) from back-office operational processing. Built a custom PHP miniERP application acting as the unified processing nerve center for consular agents.
* **Bidirectional Deterministic State Machine:** Modeled an explicit application state machine (Documents Pending -> Under Review -> Consular Submission -> Visa Issued / Rejected). State mutations within the miniERP triggered secure HMAC-authenticated webhook calls to originating storefronts to update customer dashboards, send branded transactional emails, and deliver generated PDF visas.
* **PII Security & Immutable Audit Logging:** Enforced strict data isolation and protected storage protocols for sensitive passport scans and biometric applicant records, combined with append-only database audit logs recording every administrative action.

## Engineering Execution
* **Backend & miniERP:** Object-oriented PHP application core powering the miniERP with multi-currency ledgers, automated PDF generation, and RESTful API endpoints.
* **Storefronts & Ingestion:** WordPress with WooCommerce for regional storefront checkouts and dynamic multi-step applicant intake forms.
* **Data Layer:** Normalized MySQL relational database using InnoDB transactional tables for financial ledgers, customer dossiers, and visa status logs.
* **Infrastructure:** Provisioned and managed Linux server instances in regional data centers configured with Nginx, PHP-FPM, and Let's Encrypt SSL.

## Measurable Impact
* Centralized operations across three distinct consumer visa brands into a single administrative console, eliminating cross-brand processing duplication.
* Automated application status synchronization and PDF visa dispatches, reducing customer support inquiry volumes.
* Maintained continuous operational stability and multi-currency ledger reconciliation across a multi-year production lifecycle (2015 to present).
