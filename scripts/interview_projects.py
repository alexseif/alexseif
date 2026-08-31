#!/usr/bin/env python3
"""
Project Interviewer CLI (scripts/interview_projects.py)

Objective:
Guide Alex Seif through an interactive project-by-project interview to honestly
document each project, replacing overstimulated/hallucinated text with grounded
technical realities while framing experience effectively toward:
  - Software Architect
  - NGO Technical Partner

Usage:
  python3 scripts/interview_projects.py
  python3 scripts/interview_projects.py --selected-only
  python3 scripts/interview_projects.py --year 2018
  python3 scripts/interview_projects.py --project 2004-business-solutions
  python3 scripts/interview_projects.py --list
"""

import os
import sys
import glob
import json
import argparse
import re
from pathlib import Path
import yaml

# ANSI Color codes
BOLD = "\033[1m"
GREEN = "\033[32m"
CYAN = "\033[36m"
YELLOW = "\033[33m"
MAGENTA = "\033[35m"
RED = "\033[31m"
DIM = "\033[2m"
RESET = "\033[0m"

PROJECT_ROOT = Path(__file__).resolve().parent.parent
PROJECTS_DIR = PROJECT_ROOT / "projects"
SELECTED_DIR = PROJECT_ROOT / "projects" / "selected"
PROGRESS_FILE = PROJECT_ROOT / ".interview_progress.json"

def load_progress():
    if PROGRESS_FILE.exists():
        try:
            with open(PROGRESS_FILE, "r", encoding="utf-8") as f:
                return json.load(f)
        except Exception:
            return {}
    return {}

def save_progress(progress_data):
    with open(PROGRESS_FILE, "w", encoding="utf-8") as f:
        json.dump(progress_data, f, indent=2)

def parse_md_file(file_path):
    with open(file_path, "r", encoding="utf-8") as f:
        content = f.read()

    frontmatter = {}
    body = content

    fm_match = re.match(r"^---\s*\n(.*?)\n---\s*\n(.*)$", content, re.DOTALL)
    if fm_match:
        try:
            frontmatter = yaml.safe_load(fm_match.group(1)) or {}
        except Exception as e:
            print(f"{RED}Error parsing YAML frontmatter in {file_path}: {e}{RESET}")
            frontmatter = {}
        body = fm_match.group(2).strip()

    return frontmatter, body

def get_all_projects(selected_only=False, filter_year=None, filter_slug=None):
    files = []
    
    # Selected projects first or specific
    selected_files = sorted(glob.glob(str(SELECTED_DIR / "*.md")))
    all_project_files = sorted(glob.glob(str(PROJECTS_DIR / "*.md")))

    seen_slugs = set()
    combined = []

    # Include selected projects
    for p in selected_files:
        combined.append((p, True))
        seen_slugs.add(Path(p).name)

    # Include non-selected projects
    if not selected_only:
        for p in all_project_files:
            if Path(p).name not in seen_slugs:
                combined.append((p, False))

    # Parse and filter
    projects = []
    for path_str, is_selected in combined:
        p_path = Path(path_str)
        fm, body = parse_md_file(p_path)
        
        slug = fm.get("slug", p_path.stem)
        year = fm.get("year", None)
        
        # Try extracting year from filename if missing
        if year is None:
            m = re.match(r"^(\d{4})", p_path.name)
            if m:
                year = int(m.group(1))
            else:
                year = 9999

        if filter_year and str(year) != str(filter_year):
            continue
        if filter_slug and filter_slug.lower() not in slug.lower():
            continue

        projects.append({
            "path": p_path,
            "filename": p_path.name,
            "slug": slug,
            "year": year,
            "is_selected": is_selected,
            "frontmatter": fm,
            "body": body
        })

    # Sort chronologically by year then filename
    projects.sort(key=lambda x: (x["year"] if isinstance(x["year"], int) else 9999, x["filename"]))
    return projects

def prompt_input(label, default="", multiline=False, required=False):
    print(f"\n{BOLD}{CYAN}{label}{RESET}")
    if default:
        print(f"{DIM}Current / Default: {default}{RESET}")
    
    if multiline:
        print(f"{DIM}(Type your text. Enter a blank line or 'END' on a new line to finish. Enter 'SKIP' to keep current):{RESET}")
        lines = []
        while True:
            try:
                line = input()
                if line.strip() == "END":
                    break
                if not line.strip() and lines:
                    break
                if not line.strip() and not lines:
                    # User immediately hit enter
                    break
                lines.append(line)
            except EOFError:
                break
        res = "\n".join(lines).strip()
        if not res:
            return default
        if res.strip() == "SKIP":
            return default
        return res
    else:
        prompt_str = f"{BOLD}> {RESET}"
        try:
            val = input(prompt_str).strip()
            if not val:
                return default
            return val
        except (KeyboardInterrupt, EOFError):
            print(f"\n{YELLOW}Input cancelled.{RESET}")
            return default

def format_project_markdown(fm, details):
    """
    Format frontmatter and truthful, architecturally framed Markdown body.
    """
    # Clean and dump frontmatter
    fm_yaml = yaml.dump(fm, default_flow_style=False, sort_keys=False).strip()
    
    content = f"""---
{fm_yaml}
---

# {fm.get('project_role', 'Lead Developer')} | {fm.get('client_name', 'Client')} ({fm.get('year', '')})

## Executive Summary
{details.get('summary', '').strip()}

---

## 1. Context & Business Problem
* **Client / Domain:** {fm.get('client_name', '')} ({fm.get('client_type', 'N/A')})
* **Timeline:** {fm.get('year', '')}
* **Project Role:** {fm.get('project_role', 'Sole Developer / Architect')}

### The Problem
{details.get('problem', '').strip()}

---

## 2. Technical Stack & Implementation Details
{details.get('tech_details', '').strip()}

---

## 3. Architectural Decisions & Engineering Challenges
{details.get('architecture', '').strip()}

---

## 4. Operational & Institutional Impact
{details.get('impact', '').strip()}

---

## 5. Ground Truth & Architectural Evolution
{details.get('takeaway', '').strip()}
"""
    return content.strip() + "\n"

def interview_project(proj, progress):
    fm = proj["frontmatter"]
    path = proj["path"]
    
    print("\n" + "=" * 80)
    print(f"{BOLD}{MAGENTA}PROJECT INTERVIEW: {proj['filename']}{RESET}")
    print(f"File: {path}")
    print(f"Status: {'[SELECTED]' if proj['is_selected'] else '[STANDARD]'}")
    print("=" * 80)
    
    print(f"\n{YELLOW}Focus: Honest facts, real tech stack, real role, and lessons learned bridging freelance execution to Software Architect & NGO Partner authority.{RESET}")

    # 1. Frontmatter Verification
    slug = prompt_input("1. Project Slug", fm.get("slug", proj["slug"]))
    title = prompt_input("2. Title (Human readable)", fm.get("title", fm.get("client_name", "")))
    year = prompt_input("3. Year (e.g. 2018 or 2018-2019)", str(fm.get("year", proj["year"])))
    try:
        if year.isdigit():
            year_val = int(year)
        else:
            year_val = year
    except Exception:
        year_val = year

    client_name = prompt_input("4. Client Name", fm.get("client_name", ""))
    client_type = prompt_input("5. Client Type (e.g. NGO / Non-Profit, Corporate, E-Commerce, Media, Government, SME)", fm.get("client_type", "SME / Web Client"))
    project_role = prompt_input("6. Real Role (e.g. Solo Full-Stack Developer, Freelance Technical Partner, Web Architect)", fm.get("project_role", "Solo Full-Stack Developer"))
    subtitle = prompt_input("7. One-line Subtitle / Hook", fm.get("subtitle", ""))
    
    curr_stack = fm.get("tech_stack", [])
    if isinstance(curr_stack, list):
        curr_stack_str = ", ".join([str(x) for x in curr_stack])
    else:
        curr_stack_str = str(curr_stack)
    stack_input = prompt_input("8. Actual Tech Stack (Comma separated, e.g. PHP 7.2, Laravel, MySQL, Nginx, cPanel, jQuery)", curr_stack_str)
    tech_stack = [s.strip() for s in stack_input.split(",") if s.strip()]

    # 2. In-Depth Honest Interview Questions
    print("\n" + "-" * 80)
    print(f"{BOLD}{GREEN}DEEP DIVE: ARCHITECTURAL & GROUND-TRUTH INTERVIEW{RESET}")
    print("-" * 80)

    q_summary = prompt_input(
        "Q1. Executive Summary: In 2-3 sentences, what was this project and what did you actually build?",
        "Developed a tailored web solution to replace manual workflows and establish a reliable digital presence.",
        multiline=True
    )

    q_problem = prompt_input(
        "Q2. The Problem: What was the client's actual situation or bottleneck before you started?",
        "The client required a reliable digital platform to handle operations, public communication, and data management without complex overhead.",
        multiline=True
    )

    q_tech = prompt_input(
        "Q3. Implementation & Real Tech Details: How was it implemented under the hood? (Database structure, CMS/Framework choices, hosting, integrations)",
        f"Built using {', '.join(tech_stack) if tech_stack else 'custom PHP and relational database'}. Configured hosting environment, database schemas, and tailored administrative interfaces.",
        multiline=True
    )

    q_arch = prompt_input(
        "Q4. Architectural & Technical Challenges: What real engineering or architecture challenges did you solve? (e.g., performance, data migration, security, concurrency, multi-language, legacy code rescue)",
        "Handled data schema design, query optimization, input sanitization, and responsive UI performance while keeping maintenance requirements minimal for the client.",
        multiline=True
    )

    q_impact = prompt_input(
        "Q5. Operational & Institutional Impact: What was the real result? (e.g. uptime, traffic, client adoption, longevity, cost savings, staff empowerment)",
        "Successfully launched into production, achieving high uptime and eliminating operational friction for client staff.",
        multiline=True
    )

    q_takeaway = prompt_input(
        "Q6. Architect Takeaway: What did this project teach you or prove about your evolution as a Software Architect / NGO Partner?",
        "Reinforced the importance of pragmatic architecture—building robust, maintainable systems that fit the client's actual operational capabilities without unnecessary complexity.",
        multiline=True
    )

    # Compile new frontmatter
    updated_fm = {
        "slug": slug,
        "title": title,
        "year": year_val,
        "client_name": client_name,
        "client_type": client_type,
        "project_role": project_role,
        "subtitle": subtitle,
        "tech_stack": tech_stack,
        "selected": proj["is_selected"],
        "interview_completed": True,
        "tags": fm.get("tags", ["case-study"])
    }

    details = {
        "summary": q_summary,
        "problem": q_problem,
        "tech_details": q_tech,
        "architecture": q_arch,
        "impact": q_impact,
        "takeaway": q_takeaway
    }

    formatted_md = format_project_markdown(updated_fm, details)

    print("\n" + "=" * 80)
    print(f"{BOLD}PREVIEW OF GENERATED DOCUMENT:{RESET}")
    print("=" * 80)
    print(formatted_md[:1200] + ("\n... [truncated for preview] ..." if len(formatted_md) > 1200 else ""))
    print("=" * 80)

    action = prompt_input("Save this updated document? (Y = save & continue, s = skip, e = re-edit, q = quit)", "Y").strip().lower()
    
    if action in ("y", "yes", ""):
        with open(path, "w", encoding="utf-8") as f:
            f.write(formatted_md)
        progress[proj["slug"]] = {
            "completed": True,
            "filename": proj["filename"],
            "year": year_val,
            "title": title
        }
        save_progress(progress)
        print(f"{GREEN}✓ Successfully saved {path.name} and updated progress.{RESET}")
        return "next"
    elif action in ("e", "edit"):
        return "retry"
    elif action in ("q", "quit"):
        return "quit"
    else:
        print(f"{YELLOW}Skipped saving {path.name}.{RESET}")
        return "skip"

def main():
    parser = argparse.ArgumentParser(description="Interview script for honest project documentation.")
    parser.add_argument("--selected-only", action="store_true", help="Only interview projects in selected/")
    parser.add_argument("--year", type=str, help="Filter projects by year (e.g. 2018)")
    parser.add_argument("--project", type=str, help="Filter by specific project slug or filename keyword")
    parser.add_argument("--list", action="store_true", help="List all projects and their interview completion status")
    parser.add_argument("--reset-progress", action="store_true", help="Reset all saved progress")
    args = parser.parse_args()

    if args.reset_progress:
        if PROGRESS_FILE.exists():
            PROGRESS_FILE.unlink()
        print(f"{GREEN}Progress reset successfully.{RESET}")
        return

    progress = load_progress()
    projects = get_all_projects(selected_only=args.selected_only, filter_year=args.year, filter_slug=args.project)

    if not projects:
        print(f"{YELLOW}No matching projects found.{RESET}")
        return

    if args.list:
        print(f"\n{BOLD}PROJECT CATALOG ({len(projects)} projects):{RESET}")
        print(f"{'Year':<6} | {'Status':<10} | {'Done?':<6} | {'Slug':<40} | {'Client'}")
        print("-" * 90)
        for p in projects:
            is_done = progress.get(p["slug"], {}).get("completed", False) or p["frontmatter"].get("interview_completed", False)
            done_str = f"{GREEN}YES{RESET}" if is_done else f"{RED}NO{RESET}"
            sel_str = "SELECTED" if p["is_selected"] else "STANDARD"
            client = p["frontmatter"].get("client_name", "N/A")
            print(f"{str(p['year']):<6} | {sel_str:<10} | {done_str:<14} | {p['slug']:<40} | {client}")
        return

    print(f"\n{BOLD}{CYAN}=== Starting Alex Seif Project Documentation Interviewer ==={RESET}")
    print(f"Total projects to process: {len(projects)}")
    print(f"Goal: Software Architect & NGO Technical Partner (100% truthful & grounded)")
    print(f"Commands during interview: Ctrl+C to stop, type 'SKIP' to keep defaults.\n")

    for i, proj in enumerate(projects, 1):
        is_done = progress.get(proj["slug"], {}).get("completed", False) or proj["frontmatter"].get("interview_completed", False)
        
        if is_done and not args.project:
            print(f"{DIM}[{i}/{len(projects)}] Already interviewed: {proj['slug']} (Skipping... use --project {proj['slug']} to re-do){RESET}")
            continue

        while True:
            res = interview_project(proj, progress)
            if res == "retry":
                continue
            elif res == "quit":
                print(f"\n{YELLOW}Interview session saved. You can resume anytime by re-running the script.{RESET}")
                sys.exit(0)
            else:
                break

    print(f"\n{BOLD}{GREEN}✓ All projects interviewed and processed successfully!{RESET}")

if __name__ == "__main__":
    main()
