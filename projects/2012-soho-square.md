---
slug: 2012-soho-square
title: "SOHO Square Sharm El Sheikh (Event Ticketing & E-Commerce Engine)"
year: 2012
client_name: "MITCHDesigns (End-Client: SOHO Square)"
client_type: "Entertainment & Hospitality Destination"
project_role: "Software Architect & Lead Full-Stack Developer"
subtitle: "Architected a high-concurrency concert and festival ticketing e-commerce platform and embeddable widget engine for Sharm El Sheikh's premier entertainment hub."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "MySQL (InnoDB Row-Level Locking & TTL Holds)"
  - "Online Payment Gateway Integration"
  - "Embeddable JavaScript Widget & Cross-Domain Handshake"
  - "Apache / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Software Architect & Lead Full-Stack Developer | MITCHDesigns - SOHO Square (2012)

## Overview
SOHO Square is a premier dining, shopping, and nightlife entertainment square located in Sharm El Sheikh, Egypt, renowned for hosting international concerts, theatrical performances, and major seasonal festivals. Contracted through digital agency MITCHDesigns, this project engineered a dedicated subdomain e-commerce platform to handle high-demand concert ticket reservations and online payment processing.

Served as Software Architect and Lead Full-Stack Developer across the entire project lifecycle, from initial requirement gathering through architecture, development, payment integration, and production deployment. Built on the proprietary custom PHP MVC framework and MySQL, the platform featured a standalone ticketing checkout engine alongside a lightweight embeddable widget integrated into SOHO Square's primary marketing portal.

## Key Technical Challenges & Architecture

### 1. High-Concurrency Ticket Holds & Race Condition Elimination
During high-traffic concert announcements, multiple users attempted to purchase limited VIP and general admission tickets simultaneously. Implemented database row-level locking (`SELECT ... FOR UPDATE`) and a time-to-live (TTL) inventory hold mechanism that locked selected tickets for 8 minutes during checkout, automatically releasing uncompleted reservations back to the public pool without overselling.

### 2. Embeddable Widget & Cross-Domain Integration
Engineered an embeddable client-side booking widget embedded directly into SOHO Square's main content portal. Designed a secure cross-domain communication handshake between the marketing site and the dedicated ticketing subdomain, maintaining cart state and routing users to a secure checkout.

### 3. Online Payment Gateway Integration
Integrated direct acquiring bank payment gateway interfaces with transactional validation checks, ensuring atomic order completion, immediate ticket issuance, and automated confirmation dispatches upon payment settlement.
