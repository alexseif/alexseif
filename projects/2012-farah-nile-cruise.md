---
slug: 2012-farah-nile-cruise
title: "Farah Nile Cruise (Luxury Hospitality & Booking Engine)"
year: 2012
client_name: "MITCHDesigns (End-Client: Farah Nile Cruise)"
client_type: "Luxury River Hospitality & Tourism"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Luxury river cruiser portal, multi-day itinerary scheduling, and direct cabin reservation architecture on custom PHP MVC."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL"
  - "Cruise Itinerary & Cabin Booking Engine"
  - "Administrative CMS Back-Office"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Farah Nile Cruise) | 2012

## Context & Scale
Farah Nile Cruise is a premier luxury river hospitality vessel operating sailing itineraries between Luxor and Aswan in Upper Egypt. Contracted through digital agency MITCHDesigns, this engagement engineered Farah's inaugural web presence and reservation engine, requiring multi-day sailing itinerary management (3, 4, and 7-night cruises), cabin tier pricing, and seasonal calendar coordination for international travelers.

## Architectural Decisions
* **Relational Itinerary & Seasonal Tariff Schema:** Modeled complex cruise sailing schedules across multiple departure ports (Luxor and Aswan), seasonal pricing brackets, and cabin categories into a normalized MySQL schema with deterministic availability checking.
* **Decoupled Operations Back-Office CMS:** Engineered an administrative management panel allowing cruise coordinators to independently schedule departure dates, block out maintenance windows, and manage booking inquiries without developer intervention.
* **Non-Blocking High-Resolution Media Delivery:** Optimized high-resolution ship photography, cabin layouts, and deck plan assets using browser caching headers, progressive rendering, and static asset minification to ensure fast load times across international travel source markets.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core with modular controllers handling trip date validation, cabin occupancy calculations, and booking dispatch workflows.
* **Data Layer:** Normalized MySQL relational database with foreign key constraints across sailing schedules, cabin tiers, rate rules, and customer inquiries.
* **Frontend:** Standards-compliant semantic HTML, modular CSS layouts, and vanilla JavaScript interaction handlers for itinerary selection and cabin tour previews.
* **Infrastructure:** Apache web server running on Linux with URL rewriting for SEO-optimized cruise package paths and gzip asset compression.

## Measurable Impact
* Delivered Farah Nile Cruise's initial digital reservation channel, capturing direct international traveler inquiries without intermediary booking platform fees.
* Eliminated manual booking reconciliation by giving cruise operations staff autonomous administrative control over sailing schedules and tariffs.
* Sustained fast page load times globally for high-resolution visual deck plans and cabin galleries.
