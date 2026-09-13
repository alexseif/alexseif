---
slug: 2021-salama
title: Salama Cooperative Insurance Registration Gateway
year: 2021
client_name: Salama Cooperative Insurance (via iSoft)
client_type: Fintech / Regulated Financial Services
industry: "Fintech & Insurance"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Architected a Shariah-compliant motor insurance registration gateway on Drupal and PHP, enforcing SAMA regulatory compliance and multi-stage payload validation."
tech_stack:
  - Drupal Enterprise
  - "PHP"
  - "MySQL (ACID Compliance & Transaction Persistence)"
  - "RESTful Regulatory APIs"
  - "Layer 7 Load Balancing & Reverse Proxy"
  - "Saudi Central Bank (SAMA) Compliance"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Salama Cooperative Insurance (via iSoft) | 2021

### Context & Scale
Salama Cooperative Insurance (contracted via iSoft) is a leading provider of Shariah-compliant motor insurance in the Kingdom of Saudi Arabia. Operating under the regulatory oversight of the Saudi Central Bank (SAMA), customer policy registration required sub-second data validation against strict statutory schemas and external government insurance endpoints. Surges during national policy renewal cycles generated high concurrent traffic, while malformed user inputs risked tripping regulatory API rejections and audit compliance issues. Retained as Lead Full-Stack Engineer and Architect to engineer the registration gateway, implement strict pre-ingestion validation, and establish resilient API communication boundaries.

### Architectural Decisions
- **Pre-Ingestion Multi-Stage Validation:** Designed a multi-stage validation layer in PHP that verified customer data completeness, national identification formats, and vehicle parameters prior to dispatching requests to external insurance backends, halting invalid submissions at the ingress boundary.
- **Fault-Tolerant Resilient API Wrappers:** Built deterministic error-handling and timeout wrappers around third-party regulatory endpoints, ensuring network latency or temporary upstream downtime did not stall registration sessions or corrupt local state.
- **ACID-Compliant Transaction Persistence:** Enforced strict database transactions in MySQL to guarantee that policyholder profiles, identity verification tokens, and registration payloads were committed atomically.
- **Layer 7 Load Balancing Architecture:** Configured Layer 7 reverse proxies and load balancers to distribute incoming traffic across stateless PHP application nodes, insulating the core registration engine from renewal traffic spikes.

### Engineering Execution
- **Custom Drupal Service Architecture:** Developed bespoke Drupal services and controllers managing multi-step onboarding, identity verification tokenization, and secure registration callback handling.
- **Regulatory Schema Compliance:** Encoded SAMA regulatory validation rules into deterministic backend validators, rejecting non-compliant data before any external API egress.
- **Stateless Node Configuration:** Structured application sessions and file upload pipelines to run across stateless web nodes behind reverse proxies without session drift.

### Measurable Impact
- **SAMA Compliance Certification:** Passed all regulatory audits for Shariah-compliant financial software infrastructure under Saudi Central Bank standards.
- **Downstream Error Elimination:** Pre-ingestion validation filtered out malformed registration requests, dramatically reducing downstream processing rejections.
- **Reusable Enterprise Architecture:** The API integration patterns, validation architecture, and fault-tolerance wrappers served as the institutional blueprint for subsequent regulated Saudi public sector portal deployments.
