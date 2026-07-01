# Task 1 Spec: Project Data Migration

## 1. Objective
Translate all legacy unstructured case study markdown files (`projects/*.md`) into highly structured YAML files (`projects/*.yaml`) that conform exactly to `schemas/project_schema.json`.

## 2. Commands
- Validation: `npx ajv validate -s schemas/project_schema.json -d "projects/*.yaml"`

## 3. Project Structure
- Input: `/projects/*.md`
- Output: `/projects/*.yaml`
- Schema mapping: Ensure free-text sections like "Core Architecture" map properly to structured arrays (`core_competencies`, `quantifiable_engineering_impact`, `edge_cases_managed`).

## 4. Code Style
- **YAML Formatting:** Strict standard YAML. Use double quotes for strings containing special characters.
- **Tone:** Professional, objective, maintaining the "Software Architect" persona. Focus on technical problem solving and impact.

## 5. Testing Strategy
- Validate every single generated `.yaml` file against `schemas/project_schema.json`.
- Visual/manual review to ensure no data from the original `.md` was lost in translation.

## 6. Boundaries
- **Always:** Verify schema compliance. Maintain semantic accuracy of the original project.
- **Never:** Delete the original `.md` files until the entire migration task is completed, validated, and approved by the user.
