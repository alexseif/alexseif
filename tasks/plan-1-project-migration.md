# Plan: Project Data Migration (Task 1)

## 1. Objective & Dependency Graph
**Goal:** Migrate 23 unstructured `.md` files in `/projects/` to strictly validated `.yaml` files mapped to `project_schema.json`, then safely delete the legacy `.md` files.
**Dependency:** This must be completed before Task 3 (Resume Builder) and Task 4 (Frontend Refactor) can proceed, as they rely on the new YAML structure.

## 2. Token Cost Analysis & Approach Selection
To satisfy the requirement of "optimizing token usage by using a coded script" while maintaining the semantic accuracy required by the schema (`core_competencies` vs `quantifiable_engineering_impact`), we have three technical approaches:

| Approach | Estimated Tokens | Cost (Gemini 1.5 Pro standard) | Accuracy | Tooling Needed |
| :--- | :--- | :--- | :--- | :--- |
| **A. Heuristic Script (Regex/Node)** | 0 tokens | $0.00 | **Low** (Dumps all text randomly) | None (Vanilla JS) |
| **B. `smolagents` (Python)** | ~15k In / 5k Out | ~$0.10 | **High** | Python, `smolagents`, User API Key |
| **C. Native Agent Batching** | ~25k In / 10k Out | ~$0.15 | **High** | None (Built-in context) |

**Shortest Path to Objective Recommendation:**
**Approach B (`smolagents`) is Confirmed.** As part of your learning journey and establishing a foundation for long-term token optimization and local execution, we will build a Python script utilizing Hugging Face's `smolagents`. This transitions control from closed-environment LLM "magic" into a repeatable, infrastructure-as-code script that you own.

## 3. Work Slicing (Vertical Slices)

### Slice 1: Setup & Pilot Migration
*   **Task 1.1:** Confirm the migration approach (Agent Batching vs Coded Script).
*   **Task 1.2:** Migrate the first batch of 5 files (e.g., `2009-smash-holidays.md` to `2011-bouri.md`).
*   **Verification:** Run `npx ajv validate -s schemas/project_schema.json -d projects/*.yaml`.
*   **Checkpoint:** Human review of the first 5 YAML files to ensure semantic mapping is perfectly aligned with the brand tone.

### Slice 2: Bulk Migration & Validation
*   **Task 2.1:** Execute the remaining migrations in consecutive batches (or via script execution).
*   **Verification:** Run the `ajv` validation against all 23 output YAML files.
*   **Checkpoint:** Final human review of the generated YAML data to ensure nothing was lost from the original markdown files.

### Slice 3: Clean-up
*   **Task 3.1:** Delete all legacy `.md` files from `/projects/`.
*   **Verification:** `ls projects/*.md` should return no results. 
