# Task 3 Spec: Resume Builder Script

## 1. Objective
Develop a Node.js/TypeScript script that reads the structured YAML data (`resume_data.yaml`, `experiences/*.yaml`, `selected_projects/*.yaml`, and referenced `projects/*.yaml`), and compiles them into a single `Resume.md` file following the exact layout defined in `RESUME_SPEC.md`.

## 2. Commands
- Run build script: `npm run build:resume` (To be added to `package.json`)

## 3. Project Structure
- Code: `/scripts/build-resume.ts` (or `.js`)
- Input: `/resume_data.yaml`, `/experiences/*.yaml`, `/selected_projects/*.yaml`, `/projects/*.yaml`
- Output: `/Resume.md`

## 4. Code Style
- **Language:** TypeScript/Node.js.
- **Dependencies:** Use standard libraries (`fs`, `path`) and a YAML parser (e.g., `js-yaml`). Do not over-engineer.
- **Separation of Concerns:** Separate data loading logic from markdown rendering logic.

## 5. Testing Strategy
- Run `npm run build:resume`.
- Visually inspect the output `Resume.md` to guarantee it maps perfectly to the 9-part layout defined in `RESUME_SPEC.md` (Name, Titles, Contact, Summary, Skills, Professional Experience, Selected Projects, Education, Technical Leadership).

## 6. Boundaries
- **Always:** Ensure the script handles missing optional fields gracefully without crashing.
- **Never:** Hardcode resume text inside the script. All text must come from the YAML files.
