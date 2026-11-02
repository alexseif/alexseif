# Sub-Spec: Enterprise AI Offerings & Specialized Engagements Integration

> **Topic:** `ai-offerings-integration`  
> **Status:** Draft  
> **Option Selected:** Option A (Unified 3rd Pillar + Dedicated `/ai-systems` Landing Page)  
> **Source Objective:** `ai-work/OBJECTIVE.md`  

---

## 1. Objective & Strategic Positioning

Position Alex Seif as an enterprise Software Architect capable of delivering production-grade, deterministic AI and agentic systems. Rather than generic prompt engineering or wrapper development, the positioning focuses on:
- **Data Sovereignty & Privacy**: Local / VPC models, private vector databases, zero data leaks to public training sets.
- **Deterministic Agentic Automation**: Multi-agent task loops, AST data transformation, and reliable background daemons.
- **Production Hardening**: Eliminating hallucinations, token cost explosions, and high-latency bottlenecks.
- **Architectural Audits**: Fixed-scope feasibility sprints delivering turnkey Architecture Decision Records (ADRs).

---

## 2. Functional Requirements

### 2.1 Homepage Integration (`frontend/components/home/SpecializedOfferingsSection.tsx`)
- Update the section from a 2-column grid to a responsive 3-column grid (`grid grid-cols-1 lg:grid-cols-3 gap-6`).
- Retain the first two offerings:
  1. *Requirements Elicitation & Architecture Consultation* (`/requirements-elicitation`)
  2. *NGO Technical Partner & Civic Platforms* (`/ngo-technical-partner`)
- Add Card 3:
  - **Badge:** `// Autonomous Systems` (with `Cpu` icon)
  - **Title:** `Enterprise AI Architecture & Agentic Systems`
  - **Description:** Grounded RAG pipelines, data-sovereign knowledge bases, and deterministic multi-agent automations engineered to survive hostile enterprise production constraints.
  - **CTA Link:** `/ai-systems` ("Explore AI Systems →")

### 2.2 Dedicated Landing Page (`frontend/app/ai-systems/page.tsx`)
- **Metadata**:
  - Title: `Enterprise AI Architecture & Agentic Systems | Alex Seif`
  - Description: `Production-grade RAG pipelines, autonomous agentic workflows, and privacy-first AI systems engineered with strict data sovereignty and zero downtime.`
- **Structured Data (Schema.org JSON-LD)**:
  - Type: `Service`
  - Service Type: `Enterprise AI Architecture & Production Engineering`
  - Provider: Alex Seif, Software Architect
  - Area Served: `["Netherlands", "Europe", "Worldwide"]`
- **Sections**:
  1. **Navigation**: Back link `Return to Core` (`/`).
  2. **Hero Header**:
     - Badge: `Deterministic AI Engineering`
     - Title: `Enterprise AI Architecture & Agentic Systems`
     - Lead Narrative: Moving beyond fragile prototypes. Bridging 20 years of database normalization, high-concurrency routing, and air-gapped infrastructure with modern agentic execution and verifiable RAG pipelines.
  3. **The Architectural Reality Check (4 Production Pitfalls)**:
     - Data Sovereignty & Compliance (GDPR, EU AI Act, UN donor privacy)
     - Hallucinations & Non-Determinism (Replacing loose prompting with grounded hybrid retrieval)
     - Runaway Token Economics (Preventing latency and bill spikes)
     - Fragile Production Integrations (Productionizing beyond naive script demos)
  4. **The 4 Core AI Offerings**:
     - *Data-Sovereign RAG & Knowledge Systems*
     - *Deterministic Agentic Automation & ETL*
     - *AI Architecture Diagnostic Sprint*
     - *AI Production Hardening & Token Optimization*
  5. **Engagement Framework (3-Step Delivery Loop)**:
     - Phase 01: Data Readiness & Threat Modeling
     - Phase 02: Schema & Boundary Orchestration
     - Phase 03: Hardened Deployment & Eval Gates
  6. **Direct Call to Action**:
     - Direct prompt for architectural review with Brevo chat trigger and email link.
  7. **Footer**:
     - Reuses `@/components/Footer`.

### 2.3 Sitemap & Navigation (`frontend/app/sitemap.ts`)
- Register `/ai-systems` in `staticRoutes` with priority `0.85` and `weekly` change frequency.

### 2.4 Semantic Enhancements (`frontend/app/page.tsx`)
- Add `"Deterministic RAG Pipelines"` and `"Enterprise AI Systems"` to `knowsAbout` array in the JSON-LD schema.

---

## 3. Style & Anti-AI Content Rules
- Zero em dashes (`—`) throughout all copy. Use hyphens (`-`), colons, or standard periods.
- Tone: Technical authority, calm, pragmatic, and grounded in real systems engineering.
- Palette: Dark-mode blueprint aesthetic `#050505`, goldenrod accent `#B8860B`, monospace accents.
