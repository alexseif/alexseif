---
slug: 2015-the-greek-community-of-alexand
title: "The Greek Community of Alexandria (Portal & Transparency Engine)"
year: 2015
client_name: "The Greek Community of Alexandria (EKA)"
client_type: "NGO & Historic Diaspora Institution"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Multilingual institutional publishing portal, transparency archive, and long-term Linux infrastructure for a historic civic diaspora body."
tech_stack:
  - "WordPress"
  - "PHP"
  - "MySQL (UTF-8 MB4 Multilingual Schema)"
  - "Digital Newsletter Engine"
  - "Linux / Nginx"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | Greek Community of Alexandria | 2015 - 2026

## Context & Scale
The Greek Community of Alexandria (Ελληνική Κοινότητα Αλεξανδρείας - EKA) is a historic civic institution founded in 1843 governing schools, hospitals, cultural centers, and charitable endowments for the Greek diaspora in Egypt. In 2015, established a long-term engineering partnership to build, scale, and maintain EKA's official digital communications, transparency archives, and community gazette platform, supporting global diaspora readership across 11 continuous years of operation.

## Architectural Decisions
* **Tri-Script Database Architecture & UTF-8 MB4 Normalization:** Configured strict UTF-8 MB4 database schema collations across all content tables to eliminate character corruption and truncation across mixed Greek alphabet, Arabic script (RTL), and Latin English text.
* **Institutional Transparency & Archival Taxonomy:** Designed a structured publication taxonomy separating presidential decrees, board transparency announcements, and digitized historical PDF community newsletters for diaspora members worldwide.
* **Edge Caching & Infrastructure Hardening:** Configured Nginx reverse-proxy FastCGI micro-caching, SSL/TLS encryption, and strict upload directory execution restrictions on Linux VPS hosting, sustaining reliable global performance with zero critical security incidents.

## Engineering Execution
* **Frontend:** Responsive, cross-browser layout templates supporting Greek, Arabic (RTL), and English typography.
* **CMS & Backend:** Custom WordPress theme and PHP application logic with automated categorization, newsletter indexing, and editorial media workflows.
* **Data Layer:** MySQL relational database with composite indexes on publication dates, post status, and multilingual taxonomy keys.
* **Operations & Security:** Long-term Linux server administration, automated off-site database snapshot backups, and staff enablement for non-technical administrative editors.

## Measurable Impact
* Maintained 11 years of continuous institutional publishing and operational availability with zero critical downtime.
* Digitized and cataloged over a decade of community gazettes, board resolutions, and historical diaspora publications into an accessible public archive.
* Prepared the platform's data layer for subsequent programmatic AST migration and Full Site Editing modernization in 2026.
