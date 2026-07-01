# Plan: Project Data Migration (Task 1)

## 1. Objective & Dependency Graph
**Goal:** Migrate 23 unstructured `.md` files in `/projects/` to strictly validated `.yaml` files mapped to `project_schema.json`, then safely delete the legacy `.md` files.
**Dependency:** This must be completed before Task 3 (Resume Builder) and Task 4 (Frontend Refactor) can proceed, as they rely on the new YAML structure.

## 2. Token Cost Analysis & Approach Selection
To satisfy the requirement of optimizing token usage and ensuring predictable execution, we have shifted from an autonomous agent framework to a lightweight, deterministic API call architecture. 

| Approach | Estimated Tokens | Cost | Accuracy | Tooling Needed |
| :--- | :--- | :--- | :--- | :--- |
| **A. Heuristic Script (Regex)** | 0 tokens | $0.00 | **Low** | None |
| **B. `smolagents` (Python)** | ~40k In / 15k Out | ~$0.20 | **High** | Fails in Sandbox / Over-utilizes tokens |
| **C. Lightweight Native API (Python)** | ~10k In / 5k Out | ~$0.05 | **High** | `huggingface_hub`, `python-dotenv` |

**Shortest Path to Objective Recommendation:**
**Approach C (Lightweight Native API) is Confirmed.** We are dropping the `smolagents` framework because its code-executing sandbox adds unnecessary complexity and massive token overhead for a simple text-to-text transformation. We will use a direct API call to the Hugging Face Inference endpoints. Dependencies are formalized in `requirements.txt` and `package.json`.

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
