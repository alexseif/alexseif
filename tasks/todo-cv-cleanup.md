# Todo: CV Master Cleanup & Online Sync (Option 1)

- [x] Task 1: Refactor `frontend/app/resume/page.tsx` to read `cv.md` directly and render complete header (Title, Specialization, LinkedIn, GitHub, Location, Contact)
- [x] Task 2: Update `frontend/components/Footer.tsx` and `frontend/components/home/StickyFooter.tsx` link labels from `[ Alex Seif Resume.pdf ]` to `[ Alex Seif CV.pdf ]`
- [x] Task 3: Update `scripts/generate_pdf.py` to remove `update_resume.py` dependency and ensure clean PDF generation from `cv.md`
- [x] Task 4: Remove redundant files (`Resume.md`, `frontend/public/Alex Seif Resume.pdf`, `update_resume.py`)
- [x] Task 5: Execute `npm run build:pdf` to regenerate official PDFs (`Alex_Seif_Software_Architect_CV.pdf`, `Alex-Seif-CV.pdf`) from latest `cv.md`
- [x] Task 6: Verify Next.js production build and inspect generated static HTML for `/resume`
