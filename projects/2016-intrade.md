---
slug: 2016-intrade
title: "Intrade (Global Import & Export Product Catalog)"
year: 2016
client_name: "Intrade"
client_type: "International Trade & Import/Export"
project_role: "Senior Full-Stack Engineer"
subtitle: "Delivered a structured B2B trade catalog and inquiry routing system on WordPress and PHP, optimizing product specification delivery for low-bandwidth global commercial partners."
tech_stack:
  - "WordPress"
  - "PHP"
  - "MySQL"
  - "Linux / Apache"
  - "JavaScript"
  - "CSS3 / Responsive Design"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Intrade | 2016

### Context & Scale
Intrade is an international import and export trading firm managing multi-category commodity distribution and cross-border commercial transactions. The company required a structured digital platform to present product lines, technical specifications, and downloadable commercial brochures to wholesale partners worldwide. The primary engineering challenge was delivering an intuitive catalog experience that remained fast and accessible across international networks and low-bandwidth trade environments without introducing bulky e-commerce overhead.

### Architectural Decisions
- **Lightweight Catalog Architecture:** Structured product data using WordPress custom post types, custom taxonomies, and custom fields rather than installing heavyweight e-commerce plugins that would add unnecessary transactional overhead to a pure B2B catalog.
- **Low-Bandwidth Asset Strategy:** Enforced lightweight CSS styling and minimal JavaScript dependencies to keep page weights low, ensuring responsive browsing for international trade partners operating over high-latency network connections.
- **Contextual RFQ Lead Routing:** Designed a custom Request for Quote (RFQ) pipeline that automatically bound product identification and specification metadata to submission forms, routing inquiries directly to relevant trade desk officers.

### Engineering Execution
- **Specification Tables and Document Delivery:** Built structured product detail templates displaying technical attribute matrices and direct download handlers for high-resolution PDF data sheets and trade brochures.
- **Responsive Catalog Layout:** Developed responsive grid templates ensuring clear legibility of tabular commodity data across desktop, tablet, and mobile devices.
- **Server Configuration and Caching:** Configured Apache virtual hosts on Linux, implementing Gzip compression, browser cache expiration headers, and MySQL database index tuning.

### Measurable Impact
- **Optimized Lead Qualification:** Automatic attachment of SKU and product attributes to RFQ submissions eliminated manual inquiry follow-ups by internal trade desk teams.
- **Reliable International Delivery:** Lightweight codebase and efficient caching maintained sub-second page loads across international commercial users with variable network conditions.
- **Self-Contained Deployment:** Delivered the complete solution independently from data schema design to production hosting and domain configuration.
