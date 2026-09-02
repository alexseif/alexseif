---
name: project-narrator
description: >-
  Interview, rephrase, and document portfolio projects positioning Alex Seif as a Software Architect
  and Full-Stack Developer. Enforces concise, grounded, anti-AI copy with zero em dashes.
---

# Project Narrator & Architectural Documenter

This skill guides the agent in interviewing Alex Seif, ingesting project notes, and generating honest, grounded project documentation for projects in the portfolio.

## 1. Core Persona & Positioning Objectives

Based on objective/alexseif-objective.md:
* **Target Roles:** Software Architect, Full-Stack Developer.
  * *Note:* Do not frame the primary persona as "NGO Technical Partner" across general project descriptions or CV copy; keep NGO positioning reserved for the website unless the explicit job title or contract for a specific engagement was "NGO Technical Partner".
* **Core Narrative:** 20+ years solving hard problems before and during implementation: architecture ownership, data layer boundaries, high-availability infrastructure, and systems surviving real constraints (air-gapped environments, fragile bank networks, national payment gateways, regulatory frameworks like PCI DSS).
* **Boundaries:** Does not own manual QA execution. Designs the quality gates, validation rules, and testing strategy.

---

## 2. Style & Anti-AI Tone Rules

To eliminate AI tell-offs and produce genuine human engineering copy:

1. **Strictly No Em Dashes (`—`) or Stylistic En Dashes (`–`):**
   * Use standard periods, commas, colons, semicolons, or parentheses instead.
2. **Banned Fluff & AI Buzzwords:**
   * Never use: *spearheaded, delve, seamless / seamlessly, testament, pivotal, cutting-edge, robust, bespoke, tapestry, game-changer, powerhouse, elevate, unlock, multifaceted, vibrant, foster*.
3. **Proportional Conciseness:**
   * Write with strict economy of words.
   * Do not artificially inflate small projects. A simple brochure site or small CRUD tool should be 1 to 2 short paragraphs.
   * Large, complex builds naturally earn length through concrete technical details (schemas, caching tiers, bottlenecks, security compliance).
4. **Concrete Over Abstract:**
   * Name the actual technologies, data structures, schemas, caching layers, and operational metrics.
   * Never claim "leveraged modern technologies for maximum performance." Instead: "Configured Varnish edge caching and indexed MySQL queries to maintain sub-100ms response times."

---

## 3. Document Structure Guidelines

Every project markdown file MUST retain its YAML frontmatter block at the top.

### Frontmatter Standard (Preserve & Maintain)
```yaml
---
slug: "project-slug"
title: "Project Title"
year: 2020
client_name: "Client Name"
client_type: "Corporate / SME / NGO / Government"
project_role: "Software Architect / Solo Full-Stack Developer"
subtitle: "One crisp, factual summary sentence."
tech_stack:
  - "PHP"
  - "MySQL"
  - "Nginx"
selected: false
interview_completed: true
tags:
  - "case-study"
---
```

### Body Format Tiers

#### Tier A: Standard / Small Project (Concise Description)
Used for standard builds, simple web projects, or small tools.
```markdown
# [Project Role] | [Client Name] ([Year])

## Overview
[1-2 crisp paragraphs describing what was built, the operational purpose, and key technical implementation details.]

## Key Technologies & Tools
* Tech 1
* Tech 2
* Tech 3
```

#### Tier B: Advanced / Flagship Build (Architectural Case Study)
Used for high-complexity systems, enterprise portals, banking/payment architectures, or complex regulatory platforms.
```markdown
# [Project Role] | [Client Name] ([Year])

## Executive Summary
[1 concise paragraph summarizing the business mission, architectural scope, and outcome.]

---

## 1. Context & Problem
* **Client / Domain:** [Client Name] ([Client Type])
* **Timeline:** [Year]
* **Project Role:** [Role]

### The Challenge
[Factual explanation of the pre-existing bottleneck, operational risk, or technical limitation.]

---

## 2. Technical Stack & Implementation
[Specific breakdown of the database design, framework/CMS choices, APIs, and hosting infrastructure.]

---

## 3. Architectural Decisions & Engineering Challenges
[Concrete problem solving: data normalization, state management, caching, security/compliance, air-gapped constraints, or legacy migration.]

---

## 4. Operational & Institutional Impact
[Concrete outcomes: uptime, compliance approvals, operational autonomy for client staff, or longevity.]
```

---

## 4. Supported Operating Modes

### Mode 1: Interactive Interview
When the user wants to document projects interactively:
1. Load the project's existing frontmatter and notes.
2. Ask 3 to 4 concise, targeted questions (Problem solved, Real Tech Stack & Architecture, Challenges, Operational Outcome).
3. Draft the rephrased content following the anti-AI rules.
4. Display a markdown diff / preview for user confirmation before writing to disk.

### Mode 2: Direct Ingestion & Rewrite
When raw intake notes or staged queue files are provided:
1. Parse the raw input while preserving the existing YAML metadata.
2. Assess the appropriate tier (Standard vs Advanced).
3. Apply the style filter (no em dashes, no buzzwords, concise phrasing).
4. Save the formatted markdown file.
