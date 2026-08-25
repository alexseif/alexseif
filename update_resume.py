#!/usr/bin/env python3
import os
from pathlib import Path

ROOT_DIR = Path(__file__).resolve().parent
RESUME_MD_PATH = ROOT_DIR / "Resume.md"

def build_resume():
    frontmatter = """---
name: "Eskandar (Alex) Seif"
title: "Senior Software Architect & Principal Systems Engineer"
location: "Cairo, Egypt | Remote (EU / GMT+2 Alignment) | Open to Relocation"
phone: "+201004006332"
email: "alex.seif@gmail.com"
website: "https://alexseif.com"
---
"""

    summary_text = """## Professional Summary

Pragmatic Software Architect with over 20 years of hands-on experience designing, scaling, and maintaining high-stakes, high-concurrency digital infrastructure. Proven track record taking mission-critical systems from zero to production, including national-scale public sector platforms serving millions of concurrent citizens, region-first online payment gateways, and decoupled spatial GIS engines. Deep specialist in the PHP/Symfony ecosystem, relational database optimization (PostgreSQL/MySQL), and high-availability systems architecture. Focuses on pragmatic engineering governance, zero-downtime deployments, and long-term technical debt reduction."""

    tech_stack_text = """## Technical Stack & Architecture Competencies

*   **Architecture & System Design:** Distributed Systems, Monolith Decoupling, High-Concurrency Routing, Domain-Driven Design (DDD), Fault-Tolerant State Machines, REST & OpenAPI Synchronization.
*   **Languages & Core Frameworks:** PHP 8.x (Symfony, Laravel, Core, Drupal Enterprise, Moodle), TypeScript / JavaScript (Node.js, React 19), Python 3.12 (FastAPI), Bash Automation.
*   **Data Layers & Spatial Indexing:** PostgreSQL 15+ / PostGIS (Spatial Indexing, SRID 4326), MySQL / MariaDB (Master-Slave Replication, Query Optimization, 3NF Normalization, Star Schema).
*   **Cloud, DevOps & Infrastructure:** Docker / Docker Compose, Linux Systems Administration, Nginx Reverse Proxy, AWS (EC2, ELB, S3), CI/CD Automation (GitHub Actions), Air-Gapped Intranet Deployment Automation.
*   **Engineering Governance:** Architecture Decision Records (ADRs), Technical Debt Remediation, Requirements Elicitation, QA/CI Quality Gate Standardization, Mitigating Key-Person Risk."""

    engagements_text = """## Featured Architectural Engagements (Deep Dives)

*   **[barincairo.com (2026)](https://alexseif.com/case-studies/2026-barincairo)** — *Software Architect & Lead Full-Stack Engineer*  
    Architected a decoupled Web GIS platform (React 19 SPA, Python 3.12 FastAPI, PostGIS) featuring sub-second spatial viewport queries, automated multi-tier web scraping pipelines, and Docker containerized deployment.
*   **[Greek Community of Alexandria Portal Modernization (2026)](https://alexseif.com/case-studies/2026-ekalexandria-modernization)** — *Lead Systems Architect & Full-Stack Developer*  
    Programmatically decoupled and modernized a legacy CMS monolith into a lightweight, zero-dependency Full Site Editing architecture via script-first Agentic AI workflows with 1:1 visual fidelity.
*   **[North South Consultants Exchange (NSCE) (2025)](https://alexseif.com/case-studies/2025-nsce)** — *Lead Software Architect & Technical Partner*  
    Architected an institutional project impact and donor transparency platform used by international development funders (UN, GIZ, EU) to evaluate multi-country programs across the MENA region.
*   **[Region-First Payment Gateway (Wallety) (2009)](https://alexseif.com/case-studies/2009-wallety)** — *Co-Founder & Chief Technology Officer (CTO)*  
    Architected and deployed Egypt's first independent online payment gateway from scratch. Engineered asynchronous CLI queue daemons and defensive transactional state machines, scaling the platform to process 33% of domestic airline ticketing transactions."""

    experience_text = """## Professional Experience

### Principal Software Architect & Technical Lead
**iSoft (IdealSoft Emirates) | Retainer Engagement** | *January 2021 – December 2024*  
Contracted to deliver ministry-level digital infrastructure, high-concurrency transactional routing engines, and API architectures for federal and municipal public sector clients across Egypt and the GCC region.

*   **National Vehicle Inspection Scheduling Infrastructure (SASO - Saudi Arabia):** Architected the nationwide vehicle inspection booking system managing multi-lane facilities. Engineered a distributed transactional lock-state system with a deterministic 5-minute buffer that eliminated race conditions across competing web, mobile, and backend channels for identical 15-minute appointment slots. Remodeled database schemas into 3NF for transactional consistency and Star Schema for real-time reporting.
*   **Air-Gapped Intranet Training Portal (Egyptian Ministry of Interior - Traffic Police Dept.):** Architected and deployed a highly locked-down enterprise training portal on a restricted state intranet for mandatory licensing courses nationwide. Engineered a deterministic zero-network deployment pipeline using a custom-patched OS repository and physical media with fault-tolerant automated migration scripts.
*   **National Vehicle Inspection Digital Ecosystem (Aman Portal):** Technical Lead for a public-private national initiative web ecosystem offloading vehicle inspections from traditional traffic departments to mobile testing units and commercial hubs via high-availability backend API integration.
*   **State-Licensed Cooperative Insurance Platform (Salama Portal - Saudi Arabia):** Engineered the core registration workflows, validation mechanics, and secure transaction-handling layers for compliant digital automotive insurance.

### Co-Founder & Chief Technology Officer (CTO)
**MITCHDesigns | Executive Technical Leadership** | *June 2009 – December 2020*  
Co-founded and scaled an engineering studio into a premier regional digital technical partner, architecting and delivering over 150 bespoke digital products, ecommerce engines, and SaaS platforms across the MENA region.

*   **Engineering Organization Leadership:** Recruited, trained, and mentored an engineering department of 40+ full-stack software engineers, front-end developers, and system administrators, establishing company-wide coding standards and architecture review processes.
*   **Architectural Delivery:** Directed the end-to-end technical execution of complex client systems, high-volume transactional platforms, and third-party integrations across tourism, media, and commerce sectors."""

    credentials_text = """## Education & Foundations

*   **B.Sc. in Business Information Systems (BIS)** | Arab Academy for Science, Technology & Maritime Transport (AASTMT)
*   **Interactive Engineering Vault & Case Studies:** Complete 20-year multi-project archive and detailed architectural use cases available at [alexseif.com/case-studies](https://alexseif.com/case-studies)"""

    full_resume_content = f"{frontmatter}\n\n{summary_text}\n\n---\n\n{tech_stack_text}\n\n---\n\n{engagements_text}\n\n---\n\n{experience_text}\n\n---\n\n{credentials_text}\n"

    with open(RESUME_MD_PATH, "w", encoding="utf-8") as f:
        f.write(full_resume_content)

    print("Resume.md successfully built with Dutch HSM Enterprise Architect content.")

if __name__ == "__main__":
    build_resume()
