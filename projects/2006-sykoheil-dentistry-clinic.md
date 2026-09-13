---
slug: 2006-sykoheil-dentistry-clinic
title: SYKoheil Dentistry Clinic Modernization
year: 2006
client_name: Dr. Koheil
client_type: Private Healthcare / Dentistry Clinic
industry: "Healthcare & Clinical Services"
project_role: Senior Full-Stack Engineer
subtitle: Legacy modernization migrating Adobe Flash to standards-compliant PHP 5 and semantic web architecture.
tech_stack:
  - PHP 5
  - MySQL
  - Semantic HTML
  - CSS
  - JavaScript
  - Apache / Linux
selected: false
interview_completed: true
tags:
  - case-study
---

# Senior Full-Stack Engineer | Dr. Koheil | 2006

## Context & Scale
Private dental healthcare clinic in Alexandria, Egypt. The existing practice website was built as an Adobe Flash (.swf) application that suffered from frequent browser rendering crashes, zero search engine indexability, and total incompatibility with standards-compliant mobile and desktop web browsers.

## Architectural Decisions
* **Decompilation & Asset Decoupling:** Extracted media assets, layout structures, and textual content from compiled Flash binaries into decoupled, standards-compliant HTML and CSS templates.
* **Direct Server-Side Inquiry Architecture:** Replaced opaque client-side action scripts with server-side validated PHP request handlers backed by a normalized MySQL schema.
* **Semantic Discoverability Engine:** Restructured site markup into hierarchical semantic HTML with structured meta tags, heading hierarchies, and canonical URLs to establish organic search engine indexing.

## Engineering Execution
* **Backend:** PHP 5 server-side request processing with input sanitization and automated email dispatch alongside database writes.
* **Data Layer:** MySQL relational schema storing timestamped patient inquiries and appointment requests.
* **Frontend:** Standards-compliant semantic HTML, CSS, and vanilla JavaScript without third-party framework overhead.
* **Infrastructure:** Apache web server deployment on Linux shared hosting, configuring HTTP caching headers for static asset delivery.

## Measurable Impact
* Eliminated browser crash rates and third-party plugin dependencies by phasing out Adobe Flash completely.
* Achieved first-time organic search engine indexing for the clinic's specialized dental services.
* Automated direct appointment inquiry capture via relational database storage instead of fragile mailto links.
