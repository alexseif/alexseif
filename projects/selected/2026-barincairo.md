---
slug: 2026-barincairo
title: barincairo.com
year: 2026
client_name: barincairo.com
client_type: Geospatial Web Directory
project_role: Software Architect & Full-Stack Developer
subtitle: Decoupled Web GIS and cartographic index for historic nightlife institutions in Downtown Cairo.
tech_stack:
  - TypeScript
  - Python 3.12
  - React 19
  - Vite 8
  - FastAPI
  - PostgreSQL 15+
  - PostGIS 3.3+
  - MapLibre GL JS
  - TanStack Query v5
  - TailwindCSS v4
  - Docker Compose
  - Nginx
selected: true
interview_completed: true
tags:
  - case-study
---

# Software Architect & Full-Stack Developer | barincairo.com (2026)

## Executive Summary
Architected and implemented a decoupled Web GIS platform and cartographic index dedicated to historic establishments in Downtown Cairo (Wust El Balad). Built as a decoupled architecture pairing a React 19 single-page application with a Python 3.12 FastAPI backend and PostGIS spatial engine.

---

## 1. Context & Domain Scope
* **Client / Domain:** barincairo.com (Geospatial Web Directory)
* **Timeline:** 2026
* **Project Role:** Software Architect & Full-Stack Developer

### The Challenge
Serving vector cartography with dynamic bounding-box queries and multi-stop route calculations across dense urban layouts requires strict decoupling between client WebGL tile rendering and backend spatial queries to prevent UI frame drops. Additionally, venue harvesting required automated spatial deduplication to prevent overlapping scrapes from corrupting the dataset.

---

## 2. Technical Stack & Systems Infrastructure
* **Frontend:** React 19 SPA powered by Vite 8, MapLibre GL JS for vector rendering, TanStack Query v5 for server state, and TailwindCSS v4.
* **Backend:** FastAPI (Python 3.12), SQLAdmin control plane, AsyncPG, and GeoAlchemy2.
* **Database:** PostgreSQL 15+ with PostGIS 3.3+ spatial extension (SRID 4326).
* **Containerization & Edge:** Docker Compose network bridge (`barincairo_net`) behind an Nginx reverse proxy.

---

## 3. Architectural Decisions & Engineering Challenges
* **Decoupled Web GIS & Viewport Streaming:** Separated WebGL vector cartography from server-side spatial database processing. Utilized PostGIS spatial GIST indexing and compressed GeoJSON streaming to achieve sub-second viewport data streaming during pan and zoom actions.
* **Spatial Queries & Proximity Calculations:** Implemented `ST_Intersects` for dynamic bounding-box filtering and combined `ST_DWithin` with `ST_Distance` for real-time proximity sorting and route generation.
* **Automated Spatial Deduplication Pipeline:** Built a multi-stage ingestion pipeline combining primary entity keys (`place_id`) with spatial proximity boundaries (`ST_DWithin < 15 meters`), reducing entity duplication to 0% across overlapping harvest runs.
* **Type-Safe Contract Synchronization:** Established an automated build pipeline that derives TypeScript definitions directly from FastAPI OpenAPI specifications, guaranteeing compile-time type safety across frontend state hooks.
* **Admin Spatial Serialization Handling:** Built custom SQLAdmin view-models that exposed standard float latitude and longitude inputs and dynamically synthesized native PostGIS `Point` geometries on record write, eliminating serialization errors.

---

## 4. Operational & Institutional Impact
* **Cartographic Performance:** Achieved sub-second data streaming across high-density urban map viewports.
* **Data Accuracy:** Eliminated location duplication across automated web scrapes with spatial proximity thresholds.
* **Container Parity:** Enforced complete staging and production environment parity using isolated Docker Compose networking.
