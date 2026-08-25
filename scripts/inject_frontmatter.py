#!/usr/bin/env python3
import os
import re
import yaml
from pathlib import Path

ROOT_DIR = Path(__file__).resolve().parent.parent
PROJECTS_DIR = ROOT_DIR / "projects"
SELECTED_DIR = PROJECTS_DIR / "selected"
HSM_EXPORTS_DIR = PROJECTS_DIR / "hsm_exports"
SELECTED_HSM_EXPORTS_DIR = SELECTED_DIR / "hsm_exports"

def extract_yaml_data(yaml_path: Path):
    try:
        with open(yaml_path, "r", encoding="utf-8") as f:
            docs = list(yaml.safe_load_all(f))
            merged = {}
            for doc in docs:
                if isinstance(doc, dict):
                    merged.update(doc)
            return merged
    except Exception as e:
        print(f"Error loading {yaml_path}: {e}")
        return {}

def flatten_tech_stack(tech_stack_data):
    if not tech_stack_data:
        return []
    if isinstance(tech_stack_data, list):
        return [str(item).strip() for item in tech_stack_data if item]
    if isinstance(tech_stack_data, dict):
        result = []
        for val in tech_stack_data.values():
            if isinstance(val, list):
                result.extend([str(item).strip() for item in val if item])
            elif isinstance(val, str):
                result.append(val.strip())
        return result
    return []

def derive_year(data, filename: str):
    timeline = data.get("timeline", {})
    if isinstance(timeline, dict):
        if "start_year" in timeline and timeline["start_year"]:
            try:
                return int(timeline["start_year"])
            except ValueError:
                pass
        if "end_year" in timeline and timeline["end_year"]:
            try:
                return int(timeline["end_year"])
            except ValueError:
                pass
    # Fallback to year from filename (e.g. 2010-Egyptolution.md)
    m = re.match(r"^(\d{4})", filename)
    if m:
        return int(m.group(1))
    return 0

def process_markdown_file(md_path: Path, yaml_data: dict, is_selected: bool):
    with open(md_path, "r", encoding="utf-8") as f:
        content = f.read()

    # Check if frontmatter already exists
    if content.startswith("---"):
        parts = content.split("---", 2)
        if len(parts) >= 3:
            existing_frontmatter = parts[1]
            body = parts[2].lstrip()
        else:
            body = content
    else:
        body = content

    filename = md_path.stem
    slug = filename
    year = derive_year(yaml_data, filename)
    
    client_name = yaml_data.get("client_name") or yaml_data.get("project_id") or filename.replace("-", " ")
    # Clean client_name if it starts with year
    client_name = re.sub(r"^\d{4}\s*", "", str(client_name)).strip()
    if not client_name:
        client_name = filename

    title = client_name
    client_type = yaml_data.get("client_type", "")
    project_role = yaml_data.get("project_role", "")
    tech_stack = flatten_tech_stack(yaml_data.get("technical_stack"))
    
    architectural_context = yaml_data.get("architectural_context", "")
    if architectural_context:
        subtitle = (architectural_context[:150] + "...") if len(architectural_context) > 150 else architectural_context
    else:
        # Extract first paragraph from body as subtitle
        body_lines = [line.strip() for line in body.split("\n") if line.strip() and not line.strip().startswith("#") and not line.strip().startswith("---") and not line.strip().startswith("|") and not line.strip().startswith("`")]
        first_para = body_lines[0] if body_lines else ""
        subtitle = (first_para[:150] + "...") if len(first_para) > 150 else first_para

    # Build frontmatter dict
    frontmatter_dict = {
        "slug": slug,
        "title": title,
        "year": year,
        "client_name": client_name,
        "client_type": client_type,
        "project_role": project_role,
        "subtitle": subtitle,
        "tech_stack": tech_stack,
        "selected": is_selected
    }

    yaml_frontmatter_str = yaml.dump(frontmatter_dict, sort_keys=False, allow_unicode=True).strip()
    new_content = f"---\n{yaml_frontmatter_str}\n---\n\n{body}"

    with open(md_path, "w", encoding="utf-8") as f:
        f.write(new_content)
    
    print(f"Enriched: {md_path.name} (selected={is_selected}, year={year}, title={title})")

def main():
    # Process selected projects first
    selected_yamls = {p.stem: extract_yaml_data(p) for p in SELECTED_DIR.glob("*.yaml")}
    root_yamls = {p.stem: extract_yaml_data(p) for p in PROJECTS_DIR.glob("*.yaml")}

    # Process SELECTED_HSM_EXPORTS
    if SELECTED_HSM_EXPORTS_DIR.exists():
        for md_file in SELECTED_HSM_EXPORTS_DIR.glob("*.md"):
            stem = md_file.stem
            ydata = selected_yamls.get(stem) or root_yamls.get(stem) or {}
            process_markdown_file(md_file, ydata, is_selected=True)

    # Process HSM_EXPORTS
    if HSM_EXPORTS_DIR.exists():
        for md_file in HSM_EXPORTS_DIR.glob("*.md"):
            stem = md_file.stem
            is_selected = stem in selected_yamls
            ydata = selected_yamls.get(stem) or root_yamls.get(stem) or {}
            process_markdown_file(md_file, ydata, is_selected=is_selected)

    print("Frontmatter enrichment completed successfully.")

if __name__ == "__main__":
    main()
