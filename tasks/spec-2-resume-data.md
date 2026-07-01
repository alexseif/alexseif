# Task 2 Spec: Resume Data Population

## 1. Objective
Populate the core foundational data for the resume compilation pipeline. This includes creating `resume_data.yaml` for static content (Summary, Contact, Education) and migrating professional history into `experiences/*.yaml`.

## 2. Commands
- Validation: `npx ajv validate -s schemas/resume_schema.json -d resume_data.yaml`
- Validation: `npx ajv validate -s schemas/experience_schema.json -d "experiences/*.yaml"`

## 3. Project Structure
- Output: `/resume_data.yaml`
- Output: `/experiences/[year]-[company].yaml`
- Output: `/selected_projects/*.yaml` (References to projects to be featured on the resume)

## 4. Code Style
- **YAML Formatting:** Strict standard YAML.
- **Narrative:** The `summary` and `agency_level_impact` descriptions must strictly adhere to the Brand Tone of Voice from `alexseif_brand_identity.md` (Authoritative, Methodical, Experienced). Avoid "developer" clichés; lean into "architecture decisions" and "technical partnership".

## 5. Testing Strategy
- JSON Schema validation for all output YAML files.
- Manual review of the narrative summary to ensure brand alignment.

## 6. Boundaries
- **Always:** Use accurate timeline data provided by the user.
- **Ask First:** Before omitting any past experience from the YAML files.
- **Never:** Make up quantifiable metrics. Use placeholder `[TODO: Insert Metric]` if exact numbers are missing but required.
