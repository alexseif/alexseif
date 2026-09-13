---
slug: 2014-odious
title: "Odious (Electronic Press Kit & Official Band Portal)"
year: 2014
client_name: "Odious"
client_type: "Music & Entertainment"
project_role: "Senior Full-Stack Engineer"
subtitle: "Official artist portal, interactive EPK, and streaming media architecture on WordPress and DigitalOcean for an international touring metal band."
tech_stack:
  - "WordPress"
  - "PHP"
  - "Media Integration (Bandcamp & YouTube)"
  - "Electronic Press Kit (EPK)"
  - "MediaTemple to DigitalOcean Migration"
  - "Linux / Nginx"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Odious | 2014 - Present

## Context & Scale
Odious is an internationally touring progressive metal band founded in Alexandria, Egypt, performing at European festivals and publishing studio releases worldwide. As their technical partner since 2014, engineered their official web presence and digital press kit, serving global record labels, festival promoters, and international listeners over a 10+ year operational lifespan.

## Architectural Decisions
* **Interactive Electronic Press Kit (EPK) Architecture:** Designed a dedicated, high-speed press kit section giving festival promoters and music journalists instant access to stage plots, technical riders, bio photography, and press releases without download gate friction.
* **Embedded Streaming & Media Offloading:** Decoupled heavy audio and video streaming from the origin server by integrating Bandcamp audio embeds and YouTube API video feeds, keeping page payloads lean and preventing bandwidth exhaustion during international album launches.
* **Zero-Downtime Infrastructure Migration:** Executed a live infrastructure migration from legacy MediaTemple hosting to a dedicated DigitalOcean Linux droplet, configuring Nginx caching rules and Let's Encrypt SSL.

## Engineering Execution
* **Frontend:** Standards-compliant semantic HTML5, responsive CSS3, and vanilla JavaScript interaction handlers for discography navigation and media playback.
* **CMS & Backend:** Custom WordPress theme and PHP template logic modeling discography tracks, tour schedules, and press archives.
* **Data Layer:** MySQL relational database storing concert dates, discography metadata, and merchandise inquiry records.
* **Infrastructure & Maintenance:** DigitalOcean Linux droplet running Nginx, PHP-FPM, and MySQL with automated database backup routines and operating system patch cycles.

## Measurable Impact
* Maintained continuous operational availability (99.9%+ uptime) across a 10+ year production lifespan (2014 to present).
* Provided international festival promoters with immediate, friction-free access to stage plots and technical documentation.
* Completely offloaded media streaming bandwidth to distributed audio/video platforms, protecting origin server resources during release surges.
