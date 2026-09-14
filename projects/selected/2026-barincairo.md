---
slug: 2026-barincairo
title: barincairo.com
year: 2026
client_name: barincairo.com
client_type: Geospatial Web Directory
industry: "Geospatial & Urban Tech"
project_role: "Full-Stack Engineer"
subtitle: "Architected a decoupled Web GIS platform on React 19, FastAPI (Python 3.12), and PostGIS, engineering dynamic bounding-box GeoJSON streaming and automated spatial deduplication."
tech_stack:
  - "React 19 & TypeScript"
  - "FastAPI (Python 3.12) & AsyncPG"
  - "PostgreSQL 15+ & PostGIS 3.3+"
  - "MapLibre GL JS & TanStack Query v5"
  - "TailwindCSS v4 & Vite 8"
  - "Docker Compose & Nginx Reverse Proxy"
selected: false
interview_completed: true
tags:
  - case-study
---

# Full-Stack Engineer | barincairo.com | 2026

### Context & Scale
barincairo.com is a specialized Web GIS cartographic directory documenting historic hospitality and cultural institutions across Downtown Cairo (Wust El Balad). Serving dense vector cartography with dynamic bounding-box queries and multi-stop walking itineraries required strict decoupling between WebGL map rendering and server-side spatial calculations to prevent main-thread UI frame drops. Additionally, automated entity scrapers frequently generated overlapping venue entries with varied spelling and coordinates. Designed and implemented the complete platform as an independent full-stack engagement using React 19, Python 3.12 FastAPI, and a PostGIS spatial database engine.

### Architectural Decisions
- **Decoupled Web GIS & Viewport Streaming:** Separated client-side WebGL vector rendering from server-side database querying. Leveraged PostGIS GiST spatial indexing and compressed GeoJSON payloads to achieve sub-second viewport data streaming during client pan and zoom gestures.
- **Spatial Proximity & Routing:** Implemented ST_Intersects for dynamic bounding-box queries and combined ST_DWithin with ST_Distance on spatial points (SRID 4326) to generate real-time proximity sorting and walking route itineraries.
- **Automated Spatial Deduplication Pipeline:** Built a multi-stage ingestion pipeline matching entity keys alongside spatial proximity boundaries (ST_DWithin < 15 meters), reducing entity duplication to 0% across overlapping harvest runs.
- **End-to-End Type Synchronization:** Implemented an automated build pipeline generating TypeScript interfaces directly from FastAPI OpenAPI specifications, guaranteeing compile-time type safety across frontend TanStack Query hooks.

### Engineering Execution
- **PostGIS Point Synthesis:** Engineered custom SQLAdmin view-models that exposed standard float latitude and longitude coordinates to operators while dynamically synthesizing native PostGIS Point geometries on database write, preventing serialization faults.
- **React 19 & MapLibre Integration:** Built a responsive vector interface using MapLibre GL JS, Vite 8, TailwindCSS v4, and TanStack Query v5 for optimistic caching and background revalidation.
- **Containerized Deployment:** Packaged services into isolated Docker Compose network bridges behind an Nginx reverse proxy configured with HTTP/2 and Gzip compression.

### Measurable Impact
- **Sub-Second Viewport Streaming:** Maintained smooth 60 FPS UI performance with sub-second GeoJSON bounding-box queries across high-density urban point clusters.
- **0% Entity Duplication:** Proximity-based spatial deduplication completely eliminated duplicate venue entries across repeated scraper ingestions.
- **Environment Parity:** Enforced strict development, staging, and production parity using isolated Docker Compose bridge networks.
