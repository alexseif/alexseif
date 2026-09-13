---
slug: 2010-orthodox-botswana
title: "Orthodox Mission in Botswana"
year: 2010
client_name: "Orthodox Mission in Botswana"
client_type: "NGO & Community Outreach"
project_role: "Senior Full-Stack Engineer"
subtitle: "Lightweight community portal and publishing platform engineered for an NGO in Southern Africa using a custom PHP MVC architecture."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL"
  - "Web Accessibility"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Orthodox Mission in Botswana | 2010

## Context & Scale
Independent community outreach and non-profit publishing platform for the Orthodox Mission in Botswana, supporting regional initiatives and operational communications across Southern Africa. The primary technical constraint was sustaining accessibility across low-bandwidth, high-latency mobile networks and diverse legacy hardware.

## Architectural Decisions
* **Lightweight PHP MVC Topology:** Developed a compact custom MVC framework without external runtime dependencies, ensuring low server memory usage and fast execution on entry-level hosting.
* **Relational Schema & Media Segregation:** Designed a normalized MySQL database for articles, schedules, and outreach records while storing binary media directly on the filesystem to avoid database bloat.
* **Low-Bandwidth Payload Optimization:** Engineered streamlined DOM trees, minified static assets, and optimized vector graphics to maintain initial page payloads strictly below 500 KB.

## Engineering Execution
* **Backend:** PHP 5 modular controllers and routing logic handling administrative content authoring and public requests.
* **Data Layer:** MySQL relational schema with index optimization on category taxonomies and publication dates.
* **Frontend:** Accessible, standards-compliant semantic HTML and CSS built for cross-browser stability across early desktop and mobile browsers.
* **Operations:** Deployed on an Apache/Linux LAMP stack with automated scheduled cron backup routines for application state and assets.

## Measurable Impact
* Kept initial page weights under 500 KB, ensuring functional load performance on regional 2G/3G connections.
* Successfully digitized organizational communication workflows, eliminating reliance on physical print distribution.
* Delivered an administrative workflow that enabled non-technical staff to publish updates autonomously.
