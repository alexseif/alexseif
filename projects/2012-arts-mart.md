---
slug: 2012-arts-mart
title: "Arts-Mart (Contemporary Art Marketplace & Custom Framing)"
year: 2012
client_name: "MITCHDesigns (End-Client: Arts-Mart)"
client_type: "Art Gallery & E-Commerce Enterprise"
industry: "Fine Art & E-Commerce"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "E-commerce architecture and real-time browser framing preview engine for a premier contemporary art marketplace."
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

# Lead Full-Stack Engineer & Architect | MITCHDesigns (Arts-Mart) | 2012

## Context & Scale
Arts-Mart is one of Egypt's prominent contemporary art galleries and online marketplaces, selling original paintings, sculptures, and limited-edition fine art prints. The platform required an interactive e-commerce experience enabling collectors to preview artwork inside customizable frame mouldings, matting widths, and virtual room backgrounds in real time.

## Architectural Decisions
* **Client-Side Visual Composition Engine:** Engineered an in-browser JavaScript rendering engine that calculated aspect ratios, frame overlaps, and matting dimensions dynamically. This avoided the storage and compute overhead of pre-rendering millions of static image combinations on the server.
* **State Isolation & Transactional Decoupling:** Decoupled continuous client-side user manipulations from backend persistence. User framing parameters were serialized strictly upon adding items to the cart, preventing redundant database writes during interactive preview sessions.
* **Composite Relational Attribute Mapping:** Structured a normalized MySQL schema mapping modular framing materials, dimension-based labor rates, and artwork inventory attributes, allowing complete product configurations to be retrieved in a single optimized query.

## Engineering Execution
* **Backend:** Object-oriented PHP 5 MVC application core with Symfony components handling transactional checkout, dynamic pricing computation, and order state machines.
* **Frontend:** Vanilla JavaScript coordinate and DOM manipulation engine calculating visual scaling, frame border bevels, and room perspectives without heavy third-party runtime dependencies.
* **Data Layer:** Normalized MySQL relational database using InnoDB engine with composite indexing on product attributes, frame materials, and artist profiles.
* **Infrastructure & Tuning:** Deployed on Rackspace Cloud Linux servers with tuned static asset caching, opcode caching, and image compression pipelines across three iterative performance reviews.

## Measurable Impact
* Successfully launched Arts-Mart's initial digital marketplace, enabling online sales of high-value original artwork.
* Reduced server image storage overhead exponentially by storing modular asset fragments rather than pre-rendered frame combinations.
* Maintained zero backend database write overhead during user framing interactions, preserving high checkout throughput and responsive application performance.
