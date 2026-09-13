---
slug: 2026-ekalexandria-modernization
title: Greek Community of Alexandria Modernization
year: 2026
client_name: Greek Community of Alexandria (EKA)
client_type: Non-Profit / Community Organization
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Modernized a 15-year legacy institutional portal into a block-native WordPress FSE architecture, parsing shortcode ASTs and automating tri-lingual RTL/LTR layout parity."
tech_stack:
  - "WordPress Full Site Editing (FSE)"
  - PHP 8.2
  - "Gutenberg Block API & JavaScript (ES6+)"
  - "AST Block Serialization Parser"
  - MySQL 8.0
  - Polylang
  - "Playwright (Visual Regression Testing)"
  - "Nginx (Reverse Proxy & Media Virtualization)"
selected: false
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Greek Community of Alexandria (EKA) | 2026

### Context & Scale
The Greek Community of Alexandria (EKA) is a historic community and diplomatic organization founded in Egypt in 1843. The primary portal held 15 years of institutional archives, community records, and historical newsletters locked in proprietary page builders (BeTheme, WPBakery, LayerSlider) and thousands of nested shortcodes. The portal suffered from high Time to First Byte (TTFB), database bloat, and manual overhead when managing tri-lingual content (Greek, English, Arabic) with complex bidirectional (RTL and LTR) typography. Retained as Lead Full-Stack Engineer and Architect to modernize the platform onto PHP 8.2, transform legacy page-builder content into native Gutenberg blocks programmatically, achieve 1:1 visual parity across all three languages without manual content re-entry, and virtualize 60GB of media assets.

### Architectural Decisions
- **Programmatic AST Shortcode Parsing:** Built a script-driven migration pipeline leveraging an Abstract Syntax Tree (AST) parser (@wordpress/block-serialization-default-parser) to parse nested commercial shortcodes and synthesize native WordPress block trees, removing all commercial builder dependencies.
- **Tri-Lingual & Bidirectional Layout Engine:** Implemented explicit locale-driven block templates (header-ar, front-page-el, header-en) to enforce typography and layout direction (RTL vs LTR) natively without fragile runtime PHP string filters.
- **Historical Newsletter Chronology Engine:** Extracted 15 years of legacy community newsletters from unformatted HTML snippets, parsing informal Greek date formats into standardized MySQL DATETIME records using regex tokenizers.
- **Media Virtualization via Nginx Reverse Proxy:** Configured Nginx reverse proxy streaming on local and staging environments to stream 60GB of production media on demand, cutting local disk usage and staging provisioning times.

### Engineering Execution
- **Custom Block Theme Development:** Built a lean block theme from scratch utilizing theme.json styling presets, eliminating hundreds of kilobytes of unused CSS and JavaScript assets.
- **Automated Visual Regression Testing:** Developed an automated Playwright test suite to compare pre- and post-migration DOM renders pixel-by-pixel, guaranteeing zero visual regression across responsive breakpoints.
- **MySQL 8.0 Schema Normalization:** Mapped tri-lingual taxonomy relationships and post translations via Polylang, ensuring atomic consistency across language switchers.

### Measurable Impact
- **100% Elimination of Commercial Builders:** Removed BeTheme, WPBakery, and LayerSlider completely, drastically reducing memory consumption and server response times.
- **Zero Manual Content Re-Entry:** Programmatically transformed 15 years of institutional archives and newsletters into native core blocks without manual editorial transcription.
- **1:1 Visual Parity Verified:** Playwright visual regression testing confirmed 1:1 layout fidelity across Greek, Arabic, and English viewports.
