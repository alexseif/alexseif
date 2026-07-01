# RESUME_SPEC.md

> **Version:** 1.0 | **Date:** 2026-07-01
> **Purpose:** Defines the exact compilation pipeline, structure, and schema for the dynamically generated `Resume.md`.

## 1. Architecture Decision
**Path B (Pure YAML Data Store)** has been selected. The resume is not manually edited. It is compiled at build time via structured YAML data.

## 2. Compilation Pipeline
The build script (`npm run build` or a dedicated script like `npm run build:resume`) will compile `Resume.md` by reading:
1. `resume_data.yaml` (Static base: summary, contact, education, leadership)
2. `experiences/*.yaml` (All professional experiences)
3. `selected_projects/*.yaml` (References to `projects/*.yaml` items)

## 3. Final Resume Output Structure (`Resume.md`)
The generated markdown file will strictly follow this layout:

- **[Name]** (Centered title)
- **[Titles]** (Software Architect, NGO Technical Partner) (On one line)
- **[Contact]** (Mobile | Email | Website | Case-studies link)
- **Summary** (Rendered from `resume_data.yaml`)
- **Skills** (Extrapolated uniquely from `projects/*.yaml`)
- **Professional Experience** (Rendered from `experiences/*.yaml`)
  - Left: **`primary_role`** | `employment_type`
  - Left: `agency_level_impact`
  - Right: `start_year` - `end_year` (Aligned with primary role)
  - Right: `company_agency` (New line)
- **Selected Projects** (Rendered from `selected_projects/` references mapping to `projects/`)
  - Left: `client_name` - `project_name`
  - Right: `start_year` - `end_year`
  - Project Role: `project_role`
  - Context: `architectural_context`
  - Tech Stack: `technical_stack` arrays
  - Competencies: `core_competencies`
  - Edge Cases: `edge_cases_managed`
- **Education** (Rendered from `resume_data.yaml`)
- **Technical Leadership & Participation** (Rendered from `resume_data.yaml`)

## 4. Schemas
All data structures must strictly adhere to the JSON schemas defined in the `/schemas/` directory:
- `schemas/resume_schema.json`
- `schemas/project_schema.json`
- `schemas/experience_schema.json`
