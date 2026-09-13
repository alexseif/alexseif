---
slug: 2012-myzouk
title: "MyZouk (Luxury Asset & Classifieds Marketplace)"
year: 2012
client_name: "MITCHDesigns (End-Client: MyZouk)"
client_type: "Luxury E-Commerce & Classifieds"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Extensible multi-category luxury asset catalog and dynamic attribute architecture on custom PHP MVC."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL"
  - "Dynamic Entity-Attribute-Value (EAV) Schema"
  - "High-Resolution Media Optimization"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (MyZouk) | 2012

## Context & Scale
MyZouk was an online marketplace and curated classifieds platform dedicated to high-value luxury assets across the Middle East, including exotic automobiles, marine yachts, luxury real estate, and fine collectibles. Contracted through digital agency MITCHDesigns, this project engineered the core platform architecture and multi-vertical listing engine.

## Architectural Decisions
* **Extensible Dynamic Attribute Schema:** Modeled a normalized Entity-Attribute-Value (EAV) schema within MySQL to support heterogeneous technical specifications across disparate asset verticals (such as mileage and horsepower for supercars versus hull draft and cabin counts for yachts) without requiring database alter-table migrations for new categories.
* **Secure Broker & Buyer Inquiry Routing:** Designed lead generation workflows routing prospective high-net-worth buyer inquiries to verified dealership brokers and private sellers without exposing direct personal contact data.
* **High-Fidelity Media Delivery Pipeline:** Engineered automated image compression and progressive lazy-loaded galleries to serve high-resolution asset photography smoothly across varying device screen resolutions.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core with modular controllers managing listing workflows, faceted search filters, and administrative verification queues.
* **Data Layer:** MySQL relational schema with targeted indexing on attribute types, categories, price brackets, and geographical listing locations.
* **Frontend:** Standards-compliant semantic HTML, modular CSS layouts, and vanilla JavaScript interaction handlers for multi-faceted search filters and image galleries.
* **Infrastructure:** Apache web server running on Linux with URL rewriting for canonical category paths and HTTP caching headers for static assets.

## Measurable Impact
* Delivered a unified multi-category luxury marketplace supporting vastly different asset specifications under a single relational database core.
* Enabled rapid introduction of new luxury product verticals without modifying database table structures or redeploying code.
* Provided agency developers with a clean, extensible architectural foundation that maintained query performance across complex faceted search filters.