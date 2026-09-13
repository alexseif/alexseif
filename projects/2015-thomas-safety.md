---
slug: 2015-thomas-safety
title: "Thomas Safety (Industrial Safety Equipment Showcase)"
year: 2015
client_name: "Thomas Safety"
client_type: "Industrial Safety & Equipment Supplier"
project_role: "Senior Full-Stack Engineer"
subtitle: "B2B industrial safety equipment catalog, Request for Quote (RFQ) pipeline, and cloud deployment on WordPress and DigitalOcean."
tech_stack:
  - "WordPress"
  - "PHP"
  - "MySQL"
  - "B2B Product Catalog & RFQ Forms"
  - "DigitalOcean / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Thomas Safety | 2015

## Context & Scale
Thomas Safety is an industrial safety supplier in Egypt providing personal protective equipment (PPE), occupational health gear, and workplace safety devices. The enterprise required a digital catalog and structured quotation platform to streamline inbound procurement requests from industrial manufacturing plants and corporate safety officers.

## Architectural Decisions
* **Hierarchical B2B Product Taxonomy:** Designed a structured relational taxonomy within WordPress to classify diverse safety product categories (protective footwear, respiratory equipment, eye protection, hazard suits) alongside downloadable technical compliance specification sheets.
* **Request for Quote (RFQ) Pipeline:** Replaced consumer-style e-commerce shopping cart flows with an optimized B2B quotation inquiry workflow, allowing procurement clients to request tiered volume pricing on specific SKU batches with input validation.
* **Cloud Droplet Provisioning & Security Hardening:** Provisioned and configured a dedicated Linux cloud instance on DigitalOcean running Nginx and PHP-FPM, establishing automated snapshot backup schedules, SSL termination, and upload execution restrictions.

## Engineering Execution
* **Frontend:** Responsive semantic HTML5 and modular CSS layouts designed for fast navigation on factory floor tablets and corporate procurement desktops.
* **CMS & Backend:** Custom WordPress theme and PHP template logic modeling product attributes, safety compliance standards, and RFQ form dispatches.
* **Data Layer:** MySQL relational database storing catalog items, product categories, and quotation request records.
* **Infrastructure:** DigitalOcean Linux droplet configured with Nginx web server, PHP-FPM process management, and HTTP caching headers.

## Measurable Impact
* Automated the inbound quotation process, replacing manual telephone and paper-based inquiry intake with structured digital RFQs.
* Organized hundreds of safety equipment SKUs into an intuitive searchable catalog with instant access to compliance spec sheets.
* Maintained stable, low-maintenance cloud hosting infrastructure with zero critical downtime.
