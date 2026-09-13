---
slug: 2017-cafe-supreme
title: "Cafe Supreme (Brand Platform & Franchisee Portal)"
year: 2017
client_name: "AlKawass Group (End-Client: Cafe Supreme)"
client_type: "Corporate / F&B Franchise"
project_role: "Senior Full-Stack Engineer"
subtitle: "Delivered a brand showcase, 34-store national branch locator, and prospective franchisee portal on a custom WordPress infrastructure for a prominent Canadian cafe chain in Egypt."
tech_stack:
  - "WordPress (Custom Theme & Post Types)"
  - "PHP"
  - "MySQL"
  - "JavaScript"
  - "CSS3 / Responsive Design"
  - "Nginx / Linux"
  - "Form Processing & SMTP Delivery"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Cafe Supreme (AlKawass Group) | 2017

### Context & Scale
Cafe Supreme is a Class A cafe franchise originally founded in Canada that expanded across Egypt under master franchisee AlKawass Group, operating up to 34 stores nationwide. To support its retail operations and continued commercial expansion, AlKawass Group contracted an independent full-stack build. The company required a centralized web platform to present brand quality standards, help customers locate regional stores, and provide a dedicated digital portal to capture and qualify prospective franchise applications.

### Architectural Decisions
- **Custom Post Type Architecture:** Structured store locations and menu highlights using custom WordPress post types and taxonomies rather than heavy off-the-shelf directory plugins, avoiding database bloat and maintaining fast page load times.
- **Dedicated Franchisee Intake Pipeline:** Designed a structured multi-step franchising inquiry panel that captured investor profiles, capital availability, and preferred territories, routing qualified leads directly to executive management via transactional SMTP.
- **Lightweight Front-End Delivery:** Implemented semantic HTML5, responsive CSS3 grids, and vanilla JavaScript without heavy third-party UI frameworks to ensure smooth browsing across mobile devices on 3G cellular connections.

### Engineering Execution
- **Store Directory & Filtering:** Built an interactive branch directory indexing 34 retail locations with geographic tagging, operating hours, and neighborhood filtering.
- **Server-Side Sanitization & Spam Defense:** Enforced server-side input validation, honeypot spam protection, and sanitization routines on the franchise application panel to safeguard submission integrity.
- **Production Server Deployment:** Deployed the WordPress environment on a Linux stack with Nginx, configuring browser caching headers and MySQL index optimization for consistent sub-second page rendering.

### Measurable Impact
- **Automated Investor Lead Capture:** Replaced fragmented manual inquiries with a structured digital intake panel, enabling AlKawass Group leadership to review and evaluate commercial franchise prospects efficiently.
- **Nationwide Store Discoverability:** Unified up to 34 regional branches into a single searchable directory accessible to retail consumers across Egypt.
- **Maintainable Publishing System:** Delivered an intuitive administrative dashboard allowing corporate communications staff to update store operating hours and seasonal promotions without ongoing developer intervention.
