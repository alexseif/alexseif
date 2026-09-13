---
slug: 2016-zillion-home-buyers
title: "Zillion Home Buyers (Real Estate Lead Acquisition Page)"
year: 2016
client_name: "Zillion Home Buyers"
client_type: "Real Estate Investment"
industry: "Real Estate Investment"
project_role: "Senior Full-Stack Engineer"
subtitle: "Engineered a high-converting lead acquisition landing page with vanilla HTML5/CSS3 and secure PHP backend validation, minimizing page weight and latency for paid advertising traffic."
tech_stack:
  - "HTML5 / Semantic Markup"
  - "CSS3 / Responsive Design"
  - "JavaScript (Vanilla)"
  - "PHP (Form Processing & Mailer)"
  - "Nginx / Linux"
  - "Input Validation & Anti-Spam"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Senior Full-Stack Engineer | Zillion Home Buyers | 2016

### Context & Scale
Zillion Home Buyers was a real estate investment enterprise specializing in direct residential property acquisitions. The company ran targeted pay-per-click advertising campaigns but experienced friction and drop-offs when driving traffic to bloated corporate pages. The business required an ultra-fast, mobile-first lead acquisition page engineered to capture seller property details, contact info, and asking prices with minimal latency.

### Architectural Decisions
- **Zero-Dependency Static Architecture:** Developed the frontend using semantic HTML5 and vanilla CSS3 without third-party frameworks (such as Bootstrap or jQuery), completely eliminating render-blocking script overhead.
- **Asynchronous Form Handler:** Implemented an asynchronous PHP endpoint handling AJAX form submissions without full page reloads, incorporating honeypot spam protection and strict input sanitization.
- **Instant Lead Dispatch:** Configured transactional email delivery using authenticated SMTP to route structured inquiry details (property address, condition, contact timeline) directly to acquisitions managers within seconds of submission.

### Engineering Execution
- **Mobile-First Layout:** Engineered high-contrast touch targets, clean typographic hierarchy, and responsive input fields tailored for one-handed mobile interactions.
- **Dual-Stage Validation:** Applied client-side input masking for phone numbers and postal codes alongside server-side regex validation and XSS prevention on the PHP receiver.
- **Nginx Infrastructure:** Deployed the static assets and PHP handler on a Linux server configured with Nginx, Gzip compression, and aggressive cache-control headers.

### Measurable Impact
- **Sub-50KB Total Footprint:** Delivered an ultra-lightweight page weight under 50KB, ensuring near-instant first contentful paint over variable cellular connections.
- **Reliable Lead Capture:** Zero dropped inquiries through transactional SMTP delivery and local fallback error logging.
- **Rapid Turnaround:** Delivered, tested, and deployed the complete landing page into production within days, unblocking paid marketing spend.
