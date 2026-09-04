---
slug: 2012-arts-mart
title: "Arts-Mart (Contemporary Art Marketplace & Custom Framing)"
year: 2012
client_name: "MITCHDesigns (End-Client: Arts-Mart)"
client_type: "Art Gallery & E-Commerce Enterprise"
project_role: "Software Architect & Lead Full-Stack Developer"
subtitle: "Architected the inaugural e-commerce platform and real-time interactive art framing preview engine for a premier contemporary art gallery."
tech_stack:
  - "PHP"
  - "Custom MVC Framework"
  - "JavaScript (Interactive Coordinate & Framing Engine)"
  - "MySQL"
  - "Rackspace Cloud / Linux"
selected: false
interview_completed: true
tags:
  - "case-study"
---

# Software Architect & Lead Full-Stack Developer | MITCHDesigns - Arts-Mart (2012)

## Overview
Arts-Mart is one of Egypt's prominent contemporary art galleries and online art marketplaces. Contracted through digital agency MITCHDesigns, this project engineered Arts-Mart's inaugural e-commerce platform, enabling collectors to purchase original paintings, sculptures, and limited-edition prints online.

Served as Software Architect and Lead Full-Stack Developer from requirement elicitation through full production rollout. Built on an advanced iteration of the proprietary custom PHP MVC framework and MySQL, the platform featured an interactive, browser-based art framing engine that allowed collectors to visualize artwork in custom frame permutations and virtual room settings in real time.

## Key Technical Challenges & Architecture

### 1. Interactive Client-Side Framing & Preview Engine
Engineered a client-side JavaScript rendering engine that dynamically composited artwork onto virtual background walls. Calculated relative visual scaling, matting borders, and frame textures dynamically in the browser, eliminating the need to pre-render and store thousands of static image permutations on the server.

### 2. Custom Framing Pricing & Cart State Decoupling
Structured relational data models to map custom framing materials, custom dimensions, and labor tariffs to catalog products. High-frequency user framing manipulations were contained in client memory, serializing finalized dimensional and pricing metadata strictly upon cart checkout to avoid redundant database write cycles.

### 3. Rackspace Cloud Optimization & Iterative Performance Tuning
Hosted on Rackspace Cloud Linux servers. Addressed initial performance bottlenecks across three distinct optimization iterations, fine-tuning asset compression pipelines, database query caching, and browser memory management to maintain high-resolution visual fidelity while ensuring fast interactive framing and sub-second page loads.
