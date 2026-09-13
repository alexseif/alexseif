---
slug: 2005-arabic-medical-social-website
title: Arabic Medical Social & Diagnostic Platform
year: 2005
client_name: Dr. Ahmed Filistini
client_type: Medical Directory / Community
industry: "Healthcare & Medical Directory"
project_role: Senior Full-Stack Engineer
subtitle: Anatomical symptom navigator and physician discussion forum for Arabic-speaking doctors.
tech_stack:
  - PHP 4/5
  - MySQL
  - HTML ImageMaps
  - JavaScript
  - phpBB
  - Apache
selected: false
interview_completed: true
tags:
  - case-study
---

# Senior Full-Stack Engineer | Dr. Ahmed Filistini | 2005

## Context & Scale
Early Arabic-language digital health reference directory and physician community portal commissioned by Dr. Ahmed Filistini. In 2005, regional Arabic medical resources and practitioner networks were largely absent from the web. The objective was to deliver a dual-purpose platform: an intuitive anatomical symptom lookup tool for patients and an integrated discussion forum for licensed medical professionals.

## Architectural Decisions
* **Hierarchical Diagnostic Data Model:** Designed a normalized MySQL relational schema linking anatomical regions, reported symptoms, and potential diagnoses in a structured query tree.
* **Dual-Application Topology:** Hosted custom dynamic PHP diagnostic scripts alongside an isolated phpBB forum instance under a unified domain on an Apache LAMP stack.
* **Spatial Coordinate Mapping:** Utilized HTML `<map>` coordinate handlers and client-side JavaScript to translate interactive diagram clicks into relational queries without external frontend framework overhead.

## Engineering Execution
* **Backend:** PHP 4/5 procedural and modular handlers processing user inputs, request sanitization, and database queries.
* **Data Layer:** MySQL 4.x tables indexing diagnostic mappings and practitioner directory entries.
* **Community Engine:** Configured and integrated a phpBB discussion forum, managing path routing and Apache web server configurations.
* **Frontend:** Semantic HTML, CSS, JavaScript, and asset optimization for early web browsers and dial-up/low-bandwidth connections.

## Measurable Impact
* Successfully deployed an early interactive Arabic anatomical symptom navigator on the web.
* Maintained low page payload footprint, ensuring fast render times on constrained shared hosting environments.
* Concluded with turnkey production handover and client deployment.
