# Lead Software Architect | Bouri Center (via MitchDesigns) | 2011 – 2013

## Architectural Context
Architected and delivered a resilient e-commerce platform and asynchronous data synchronization pipeline to interface a modern web-facing retail storefront with a highly restrictive, legacy corporate Enterprise Resource Planning (ERP) system. The legacy architecture presented significant structural obstacles and vendor constraints, requiring custom middleware and isolated database modeling to ensure transactional integrity, system uptime, and scalable data ingestion.

---

## Technical Ecosystem & Stack

* **Languages & Core Runtimes:** PHP, JavaScript (ES5+)
* **Frameworks & Architecture:** Custom PHP MVC, Symfony Component Infrastructure, OOP Principles
* **Infrastructure & Cloud:** Rackspace Cloud Infrastructure
* **Data Layer & Protocol Specifications:** MySQL (Relational Schema Optimization), Asynchronous CSV Ingestion Pipeline, RESTful API Specification

---

## Core Competencies
* Legacy System Remediation
* Requirement Elicitation & Domain Analysis
* Relational Schema Modeling & Isolation
* Object-Oriented Architecture (OOP)
* Rapid Application Development (RAD) Tooling

---

## Quantifiable Engineering & Business Impact

1. **Legacy ERP Structural Remediation**
   * **Challenge:** Complete vendor inertia and structural immutability from an uncooperative third-party ERP provider threatened project viability.
   * **Architectural Solution:** Designed a virtualized node pattern within the e-commerce relational MySQL schema. Modeled the web store layer as an isolated, standalone physical retail branch featuring a dedicated virtual inventory ledger. This abstracted legacy system limitations while preventing inventory state corruption.

2. **Human-in-the-Loop Data Ingestion & Sanitization**
   * **Challenge:** High error rates and schema inconsistency in legacy product data exports routinely broke production databases.
   * **Architectural Solution:** Engineered an asynchronous, human-in-the-loop data ingestion pipeline. Implemented automated validation rules and staging tables to audit, sanitize, and remediate fragmented CSV product feeds prior to final production database insertion, reducing catalog sync failures to 0%.

3. **Application Development Velocity Acceleration**
   * **Challenge:** Tight delivery schedules required concurrent development of database schemas and complex domain logic.
   * **Architectural Solution:** Developed a custom Rapid Application Development (RAD) code generator enforcing strict OOP standards. The tool auto-generated data access layers and boilerplate controller code directly from schema alterations, parallelizing database modeling with application logic execution.

4. **Transaction & Workflow Protocol Standardization**
   * **Challenge:** Lack of standardized interfaces between retail systems risked double-allocations and unhandled order states.
   * **Architectural Solution:** Authored formal REST API specifications governing transactional inventory holds, order state transitions, shipping-to-cash workflows, and bidirectional inventory synchronization across the client's broader IT environment.

---

## Risk Mitigation & Edge-Case Management

* **Vendor Lock-In & Fault Isolation:** Mitigated high ERP API failure rates by implementing a decoupled middleware architecture. Insulated the front-end user experience from back-end unavailability, allowing order capture to persist uninterrupted during upstream ERP outages.
* **Infrastructure Governance:** Enforced strict cloud-only deployment standards on Rackspace Cloud, refusing legacy third-party shared hosting constraints to guarantee baseline throughput, low latency SLAs, and scalable compute resource allocation.
