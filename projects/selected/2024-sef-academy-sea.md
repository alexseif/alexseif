---
slug: 2024-sef-academy-sea
title: Meem Development (SEF Academy)
year: 2024
client_name: Meem Development (SEF Academy)
client_type: EdTech / Corporate Training
industry: "EdTech & Professional Training"
project_role: "Lead Full-Stack Engineer & Architect"
subtitle: "Stabilized a corporate Moodle LMS on Keycloak SAML 2.0 SSO federation, encrypted remote database tunneling, and transactional graduation certificate delivery."
tech_stack:
  - "Keycloak (Identity Provider)"
  - "SAML 2.0 & Single Sign-On (SSO)"
  - "Moodle LMS Enterprise"
  - "PHP"
  - MySQL
  - "SSH Bastion & Port Forwarding"
  - "SMTP Relay & Microsoft Teams Integration"
selected: true
interview_completed: true
tags:
  - case-study
---

# Lead Full-Stack Engineer & Architect | Meem Development (SEF Academy) | 2024

### Context & Scale
Meem Development operates the SEF Academy corporate learning platform, delivering certified executive education and professional curricula to corporate learners across the Middle East. The academy suffered critical login blockages caused by metadata schema mismatches between their Keycloak Identity Provider (IdP) and Moodle Service Provider (SP). Simultaneously, distributed engineering teams required direct database access across Test and UAT environments without exposing database listening ports to the public internet, while automated student course completion emails failed intermittently under unauthenticated mail transports. Retained as Lead Full-Stack Engineer and Architect to resolve authentication failures, secure database access, and stabilize transactional delivery pipelines.

### Architectural Decisions
- **SAML 2.0 / Keycloak Federation Alignment:** Re-engineered and aligned XML metadata schemas, signing certificate bindings, and attribute mapping assertions between Keycloak and Moodle, eliminating assertion verification errors and restoring corporate Single Sign-On (SSO).
- **Zero-Public-Ingress Database Bastion:** Architected role-isolated SSH tunneling and port-forwarding bastions for remote engineers, enabling secure, concurrent schema operations on Test and UAT databases without exposing MySQL port 3306 publicly.
- **Transactional SMTP Delivery Pipeline:** Replaced unauthenticated mail calls with an authenticated SMTP relay transport incorporating delivery retries and error logging, ensuring deterministic delivery of graduation certificates and PDF credentials.
- **Enterprise Tool Integration:** Engineered integration webhooks between Moodle and Microsoft Teams, synchronizing live webinar sessions and course deadline notifications for enterprise learners.

### Engineering Execution
- **Identity Assertion Debugging:** Profiled SAML assertion attributes and NameID formats to resolve clock-skew tolerances and attribute mismatch bugs blocking federated authentication.
- **Bastion Host Hardening:** Configured hardened Linux bastion hosts with mandatory SSH key authentication, disabling password logins and restricting tunnel egress strictly to internal database sockets.
- **Release Protocols and Runbooks:** Authored standardized release candidate checklists, environment configuration manifests, and disaster recovery playbooks for operations handoff.

### Measurable Impact
- **100% SSO Login Reliability:** Restored uninterrupted Single Sign-On accessibility for enterprise learners across all participating corporate organizations.
- **Zero Database Exposure:** Closed all public database listening ports across Test and UAT environments, achieving strict network isolation without hindering developer access.
- **Deterministic Certificate Dispatch:** Eliminated graduation notification drops, guaranteeing reliable automated dispatch of accredited course completion credentials.
