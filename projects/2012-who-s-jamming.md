---
slug: 2012-who-s-jamming
title: "Who's Jamming (Coca-Cola Musician Social Network)"
year: 2012
client_name: "MITCHDesigns (End-Client: Coca-Cola)"
client_type: "Corporate Brand & Social Community"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Niche social network architecture, relational recommendation engine, and jam session booking workflows for a Coca-Cola campaign."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "JavaScript (Custom Component Packages)"
  - "MySQL (Social Graph & Recommendation Indexing)"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Coca-Cola Who's Jamming) | 2012

## Context & Scale
Who's Jamming was a nationwide youth campaign and digital community platform commissioned by Coca-Cola through digital agency MITCHDesigns. The platform connected amateur and professional musicians across Egypt, allowing artists to create rich media profiles, find peers based on complementary musical abilities, coordinate rehearsal sessions, and arrange commercial gig bookings.

## Architectural Decisions
* **Relational Recommendation & Matching Engine:** Modeled a normalized graph schema within MySQL linking musician profiles by primary instruments, skill proficiencies, genre affinities, and geographic locations to compute collaborative compatibility scores for jam sessions.
* **Jam Session Dispatch & Booking Workflows:** Engineered asynchronous state machines managing structured interaction pipelines, including peer jam invitations, rehearsal studio bookings, and live event booking inquiries with automated notification dispatches.
* **Modular Audio & Media Component Architecture:** Packaged reusable client-side JavaScript modules to power in-browser audio playback, dynamic portfolio media galleries, and real-time social activity feeds without third-party framework overhead.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core with modular controllers managing user authentication, social connections, messaging queues, and content moderation.
* **Data Layer:** Normalized MySQL relational database with composite indexing on musician attributes, genre taxonomy, location keys, and interaction logs.
* **Frontend:** Standards-compliant semantic HTML, modular CSS layouts, and vanilla JavaScript component packages for audio players and profile feeds.
* **Infrastructure:** Apache web server running on Linux with media streaming optimization and content moderation dashboards for campaign community managers.

## Measurable Impact
* Successfully launched Coca-Cola's nationwide music community campaign, supporting high volumes of concurrent user registrations and interaction feeds.
* Delivered a specialized matchmaking engine connecting musicians across Egypt without expensive third-party graph database overhead.
* Maintained stable platform performance and sub-second response times during peak national marketing broadcast pushes.
