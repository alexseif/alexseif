# Homepage Copy Architecture & Resume Generation - Implementation Plan

## Objective
Overhaul the `alexseif.com` homepage copy to pivot from a credentials-based professional profile to a problem-solving, human-centric narrative. Additionally, update the resume generation pipeline to leverage the new YAML structure (`projects/selected/*.yaml`, `experiences/*.yaml`).

## Dependency Graph
- `app/page.tsx` -> `HomeClient.tsx` -> (Home Sections)
- `frontend/lib/projects.ts` -> Reads project files (needs to align with the new structure for case studies).
- `scripts/generate_resume.py` (New/Updated script) -> reads `resume_data.yaml`, `experiences/*.yaml`, `projects/selected/*.yaml` -> Outputs `Resume.md`.

## Git & Execution Workflow
To ensure a robust, production-ready process, follow this strict Git and execution workflow:
1. **Branching Strategy:** Work on isolated feature branches (e.g., `feature/homepage-copy`, `feature/resume-pipeline`).
2. **Semantic Commits:** Use standard prefixes: `feat:`, `fix:`, `refactor:`, `chore:`.
3. **The `/build` Loop:** Enforce the cycle: Implement → Verify (run dev server/tests) → Commit → Check-off. Never move to the next phase without verifying the current one.
4. **No Destructive Operations:** Wait for explicit approval before running destructive commands or finalizing a phase.

## Vertical Slices (Tasks)

### Phase 1: Core Narrative & Hero
**Task 1: Update Hero Section (`HeroSection.tsx`)**
- **Action:** Replace existing greeting and bullet points with the new paragraphs from `HOMEPAGE_COPY.md`. Change the CTA to "Let's talk about your problem" (triggering Brevo).
- **Acceptance Criteria:** Hero accurately reflects new copy. Arabic greeting is maintained. CTA opens Brevo widget.
- **Verification:** Run `npm run dev`, check Hero section on desktop/mobile.

### Phase 2: Value Proposition & Work
**Task 2: Refactor "What I Actually Do" (`TechnicalGridSection.tsx`)**
- **Action:** Rename to "WHAT I ACTUALLY DO". Implement the 3 new problem statements ("Build something new", "Fix/Scale legacy", "Own technical function") and add the "What I don't do" disclaimer.
- **Acceptance Criteria:** Grid displays the 3 new pillars with suitable UI mapping.
- **Verification:** Visual confirmation.

**Task 3: Update Selected Work (`CaseStudiesSection.tsx`)**
- **Action:** Update intro text to "SELECTED WORK" per copy. Ensure dynamic integration with elite projects remains functional.
- **Acceptance Criteria:** Section title and intro text reflect new narrative.

### Phase 3: Targeted Audiences & Closing
**Task 4: Update NGO Section (`NGOPartnerSection.tsx`)**
- **Action:** Replace the 4-item deliverables grid with the direct, text-driven paragraphs. Update CTA to "Start a conversation".
- **Acceptance Criteria:** Section matches copy. CTA functions and triggers Brevo.

**Task 5: Refactor "The Honest Version" (`PathDiscoverySection.tsx`)**
- **Action:** Change title to "THE HONEST VERSION". Update text and change CTA to link directly to `/case-studies`.
- **Acceptance Criteria:** Content updated. CTA navigates correctly to case studies route.

### Phase 4: Resume Generation Pipeline
**Task 6: Build/Update Resume Generation Pipeline (`scripts/generate_resume.py`)**
- **Action:** Refactor or create the script to read from the new structure (`experiences/*.yaml` and `projects/selected/*.yaml`). The script must format the output exactly as specified in `RESUME_SPEC.md` and write it to `Resume.md`.
- **Acceptance Criteria:** Running the script produces a complete `Resume.md` following the specific format constraints (e.g., Left/Right aligned data columns, sections order).
- **Verification:** Run the script, inspect `Resume.md` for proper markdown generation and correct data retrieval.

---
## Checkpoints
- **Checkpoint 1:** After Task 1 (Hero).
- **Checkpoint 2:** After Tasks 2 & 3 (Work & Value Prop).
- **Checkpoint 3:** After Tasks 4 & 5 (NGOs & The Honest Version).
- **Checkpoint 4:** After Task 6 (Resume Generator Verification).
