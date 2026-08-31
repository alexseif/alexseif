---
slug: 2005-arabic-medical-social-website
title: Arabic Medical Social & Diagnostic Platform
year: 2005
client_name: Dr. Ahmed Filistini
client_type: NGO / Medical Initiative
project_role: Freelance Full-Stack Web Developer
subtitle: WebMD-style anatomical symptom navigator and physician forum for Arabic-speaking doctors
tech_stack:
  - PHP (PHP 4/5)
  - MySQL
  - HTML ImageMaps
  - JavaScript
  - Open-Source PHP Forum (phpBB/vBulletin)
  - Apache / GoDaddy Hosting
selected: false
interview_completed: true
tags:
  - case-study
---

# Freelance Full-Stack Web Developer | Dr. Ahmed Filistini (2005)

## Executive Summary
Built an early Arabic-language medical information and community platform combining an interactive, image-based symptom-to-diagnosis lookup tool with an integrated physician discussion forum using PHP, MySQL, and HTML ImageMaps.

---

## 1. Context & Business Problem
* **Client / Domain:** Dr. Ahmed Filistini (NGO / Medical Initiative)
* **Timeline:** 2005
* **Project Role:** Freelance Full-Stack Web Developer

### The Problem
In 2005, the Arabic web lacked centralized digital medical resources and community hubs for Arabic-speaking physicians. The client needed a dual-purpose platform: an intuitive diagnostic reference tool for users and a community discussion forum for medical practitioners.

---

## 2. Technical Stack & Implementation Details
- **Frontend & Interaction:** Built custom interactive anatomy diagrams utilizing HTML `<map>` / `coords` tied to JavaScript handlers, allowing users to visually click body regions to trigger diagnosis lookups.
- **Backend & Database:** Developed custom PHP scripts backed by a normalized MySQL schema mapping `Symptoms -> Anatomical Regions -> Potential Diagnoses`.
- **Community Integration:** Deployed and integrated an open-source PHP forum engine within a sub-path of the application on a GoDaddy LAMP hosting environment.

---

## 3. Architectural Decisions & Engineering Challenges
- **Hierarchical Data Modeling:** Structured early relational database relationships to support multi-step medical categorizations cleanly.
- **Multi-System Routing:** Coordinated static HTML, dynamic PHP diagnostic routing, and standalone forum routing under a single shared-hosting environment.
- **Bandwidth & Compatibility Constraints:** Optimized graphical asset weights and ensured cross-browser rendering reliability during the early web standards era.

---

## 4. Operational & Institutional Impact
- Delivered a functional prototype bridging visual user interaction with a relational medical database.
- Project concluded upon final deliverable handover and deployment.

---

## 5. Ground Truth & Architectural Evolution
Demonstrated early foundational experience in domain data modeling (hierarchical lookups) and multi-component web integration under early shared-hosting infrastructure constraints.
