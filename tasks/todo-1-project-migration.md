# Todo: Project Data Migration (Task 1)

- [x] **Task 1.1:** Setup Python environment and dependency tracking (`requirements.txt`, `package.json`).
- [x] **Task 1.2:** Configure API Key with proper Inference permissions in `.env`.
- [x] **Task 1.3:** Refactor `scripts/smol_migrate.py` to `scripts/migrate_to_yaml.py` using `huggingface_hub.InferenceClient`.
- [x] **Task 1.4:** Execute migration of the first batch (5 files) into `/projects/*.yaml`.
- [x] **Task 1.5:** Run JSON Schema validation (`npm run validate:projects`) on the first batch.
- [x] **CHECKPOINT:** Human review of pilot YAML structures.
- [x] **Task 2.1:** Execute migration for the remaining files.
- [x] **Task 2.2:** Run JSON Schema validation on all `/projects/*.yaml` files.
- [x] **CHECKPOINT:** Human review of the full dataset to ensure semantic accuracy before destructive operations.
- [ ] **Task 3.1:** Execute deletion of `/projects/*.md` files.
