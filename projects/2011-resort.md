---
slug: 2011-resort
title: "Resort Sales & Management (La Manga Club Vacation Rentals)"
year: 2011
client_name: "MITCHDesigns (End-Client: Resort Sales & Management)"
client_type: "Hospitality & Property Management"
project_role: "Software Architect"
subtitle: "Architected a multi-portal property rental and operations engine for luxury holiday homes in La Manga Club, scaling booking operations to £1M/month."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL (Views & Transactional Locks)"
  - "Multi-Portal RBAC Architecture"
  - "Turnover & Inspection State Machine"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Software Architect | MITCHDesigns - Resort Sales & Management (2011 - 2012)

## Overview
Resort Sales & Management operated a property management and holiday rental business at the La Manga Club resort in Spain, partnering with private villa and apartment owners to market, manage, inspect, and book luxury accommodations for international travelers. The client engaged MITCHDesigns to overhaul their legacy processes and automate their entire property catalog, booking lifecycle, and maintenance operations.

As Software Architect, designed the core custom PHP MVC framework and multi-portal system architecture that powered three distinct operational workflows:
1. **Public Guest Booking Portal:** A consumer-facing catalog showcasing detailed property amenities, high-resolution photography, and real-time availability.
2. **Operations & Property Management Portal:** An administrative back-office to contract with property owners, set dynamic seasonal tariffs, schedule cleaning crews, and track mandatory pre- and post-stay physical inspections.
3. **Property Owner Portal:** A dedicated self-service channel allowing homeowners to block out private occupancy dates and review rental yield statements.

Automating these workflows eliminated double-booking conflicts and streamlined resort operations to handle over £1,000,000 GBP in monthly booking volume.

## Key Technical Challenges & Architecture

### 1. Multi-Portal Access Control & State Management
Designed a decoupled role-based architecture serving three distinct user domains from a unified database layer, ensuring strict data isolation between public guests, property owners, and resort management staff.

### 2. Operational Buffers & Maintenance State Machine
Integrated physical resort logistics directly into the availability engine. Programmed automated operational locks before and after each guest reservation to guarantee mandatory maintenance, cleaning, and inspection buffers before releasing properties back into the public availability pool.

### 3. Dynamic Yield & Database Query Optimization
Engineered seasonal rate calculations and multi-tier commission structures directly into optimized MySQL database views, offloading compute overhead from the application server and eliminating race conditions during high-volume booking periods.
