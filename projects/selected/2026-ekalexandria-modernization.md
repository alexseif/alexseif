---
slug: 2026-ekalexandria-modernization
title: Greek Community of Alexandria Modernization
year: 2026
client_name: Greek Community of Alexandria (EKA)
client_type: Non-Profit / Community Organization
project_role: Software Architect & Full-Stack Developer
subtitle: Modernization of a legacy WordPress portal into a block-native architecture using Full Site Editing and script-first AST parsing.
tech_stack:
  - PHP 8.2
  - SCSS
  - JavaScript / ES6
  - WordPress FSE (Block Themes)
  - Gutenberg Block API
  - MySQL 8.0
  - Polylang Translation Mapping
  - Nginx Reverse Proxy
  - Playwright (Visual Regression)
  - AST Block Serialization Parser
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | Greek Community of Alexandria (2026)

## Executive Summary
Led the programmatic modernization of the primary digital portal for the Greek Community of Alexandria (EKA). Refactored a legacy monolithic portal burdened by third-party page builders (BeTheme, WPBakery, LayerSlider) into a lightweight Full Site Editing (FSE) block theme, achieving visual parity without manual content re-entry.

---

## 1. Context & Problem
* **Client / Domain:** Greek Community of Alexandria / EKA (Community Organization)
* **Timeline:** 2026
* **Project Role:** Software Architect & Full-Stack Developer

### The Challenge
The legacy portal suffered from high server response times (TTFB) and database bloat caused by nested visual page-builder shortcodes across 15 years of archives. The platform required a modern PHP 8.2 runtime upgrade, bidirectional (RTL/LTR) multilingual layout support (Greek, English, Arabic), and preservation of historical publication records without manual data re-entry.

---

## 2. Technical Stack & Architecture
* **Runtime & Framework:** PHP 8.2, custom FSE block theme components, and native Gutenberg Block API.
* **Data Layer:** MySQL 8.0 with normalized tri-lingual schema mapping via Polylang.
* **Infrastructure:** Nginx reverse proxy streaming production media assets to local and staging environments.
* **Testing & Validation:** Playwright automated end-to-end visual regression suite and AST shortcode parser.

---

## 3. Architectural Decisions & Engineering Challenges
* **Programmatic Shortcode AST Parsing:** Built a script-driven migration pipeline utilizing an AST parser (`@wordpress/block-serialization-default-parser`) to transform proprietary nested shortcodes into native core blocks, eliminating third-party rendering engines.
* **Multilingual Template Routing & RTL Engine:** Implemented locale-explicit block template files (`header-ar`, `front-page-el`, `header-en`) to handle typography and alignment rules cleanly across Greek, English, and Arabic without brittle runtime PHP filters.
* **Historical Newsletter Date Parsing:** Extracted 15 years of legacy publications from unformatted HTML and transformed unstructured Greek date strings (such as `"Μάρτιος 2026"`) into standardized MySQL `DATETIME` records using a custom regex transformer.
* **Zero-Downtime Media Virtualization:** Configured Nginx reverse proxy rules to stream 60GB of production media assets on demand during local and staging development, reducing staging disk storage requirements and sync setup times.

---

## 4. Operational & Institutional Impact
* **Visual Parity:** Maintained 1:1 visual layout fidelity verified through automated Playwright visual regression DOM diffs.
* **Performance Gain:** Completely removed third-party page-builder overhead, cutting memory allocation per request and improving page load speeds.
* **Automated Data Migration:** Migrated historical archives and multilingual relationships without manual content re-entry.
