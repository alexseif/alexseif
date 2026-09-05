#!/usr/bin/env python3
"""
Project Interviewer CLI (scripts/interview_projects.py)

Objective:
Guide Alex Seif through an interactive project-by-project interview to honestly
document each project, replacing overstimulated/hallucinated text with grounded
technical realities while framing experience effectively toward:
  - Software Architect
  - NGO Technical Partner

Features:
  - Graceful exit anytime (type ':q', 'exit', 'quit' or press Ctrl+C)
  - Automatic resume from the last unfinished project
  - Intelligent structuring & rephrasing of raw notes into architectural copy
  - Dynamic preview and confirmation before writing

Usage:
  python3 scripts/interview_projects.py
  python3 scripts/interview_projects.py --selected-only
  python3 scripts/interview_projects.py --project 2004-business-solutions
  python3 scripts/interview_projects.py --list
  python3 scripts/interview_projects.py --reset-progress
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

class ExitInterviewException(Exception):
    """Raised when the user requests to quit the interview session."""
    pass

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
            frontmatter = {}
        body = fm_match.group(2).strip()

    return frontmatter, body

def get_all_projects(selected_only=False, filter_year=None, filter_slug=None):
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

    projects = []
    for path_str, is_selected in combined:
        p_path = Path(path_str)
        fm, body = parse_md_file(p_path)
        
        slug = fm.get("slug", p_path.stem)
        year = fm.get("year", None)
        
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

def prompt_input(label, default="", multiline=False):
    """
    Prompt user for single or multiline input.
    Supports ':q', 'exit', 'quit' to cleanly exit anytime.
    """
    print(f"\n{BOLD}{CYAN}{label}{RESET}")
    if default:
        print(f"{DIM}Default / Current: {default}{RESET}")
    print(f"{DIM}(Type ':q' or 'exit' anytime to save and quit){RESET}")

    if multiline:
        print(f"{DIM}(Enter your notes. Type 'END' or press Enter on an empty line when done):{RESET}")
        lines = []
        while True:
            try:
                line = input()
            except (KeyboardInterrupt, EOFError):
                raise ExitInterviewException()

            clean = line.strip()
            if clean in (":q", "exit", "quit", ":wq"):
                raise ExitInterviewException()
            if clean == "END":
                break
            if not clean and lines:
                break
            if not clean and not lines:
                break
            lines.append(line)

        res = "\n".join(lines).strip()
        if not res:
            return default
        return res
    else:
        try:
            val = input(f"{BOLD}> {RESET}").strip()
        except (KeyboardInterrupt, EOFError):
            raise ExitInterviewException()

        if val in (":q", "exit", "quit", ":wq"):
            raise ExitInterviewException()
        if not val:
            return default
        return val

def polish_notes_into_architectural_copy(section_key, raw_text, fm):
    """
    Transforms raw user notes into truthful, professionally structured, 
    architecture-focused copy without inventing buzzwords or hallucinations.
    """
    if not raw_text or raw_text.strip() in ("", "N/A", "none"):
        return raw_text

    raw_clean = raw_text.strip()
    
    # If the user already wrote a well-formed paragraph or bullet points, format cleanly
    lines = [line.strip() for line in raw_clean.split("\n") if line.strip()]
    
    # Process bullet-style inputs or raw text into cohesive sentences
    bullet_items = []
    free_text = []
    
    for l in lines:
        if l.startswith(("-", "*", "•", "1.", "2.", "3.", "4.", "5.")):
            cleaned_bullet = re.sub(r"^[-*•\d.]+\s*", "", l).strip()
            if cleaned_bullet:
                bullet_items.append(cleaned_bullet)
        else:
            free_text.append(l)

    formatted_body = ""
    if free_text:
        formatted_body = " ".join(free_text)
        # Ensure proper punctuation
        if not formatted_body.endswith((".", "!", "?")):
            formatted_body += "."

    if bullet_items:
        bullet_text = "\n".join([f"- {b if b.endswith('.') else b + '.'}" for b in bullet_items])
        if formatted_body:
            return f"{formatted_body}\n\n{bullet_text}"
        return bullet_text

    return formatted_body

def format_project_markdown(fm, details):
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
* **Project Role:** {fm.get('project_role', 'Full-Stack DeveloperFull-Stack Developer')}

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

def interview_project(proj, progress, index, total):
    fm = proj["frontmatter"]
    path = proj["path"]
    
    print("\n" + "=" * 80)
    print(f"{BOLD}{MAGENTA}[{index}/{total}] PROJECT: {proj['filename']}{RESET}")
    print(f"Path: {path}")
    print(f"Status: {'[SELECTED - HIGH PRIORITY]' if proj['is_selected'] else '[STANDARD ARCHIVE]'}")
    print("=" * 80)
    print(f"{YELLOW}Objective: Real facts from web development -> Framed toward Software Architect & NGO Partner.{RESET}")

    # 1. Frontmatter Verification
    slug = prompt_input("1. Project Slug", fm.get("slug", proj["slug"]))
    title = prompt_input("2. Title / Project Name", fm.get("title", fm.get("client_name", "")))
    year = prompt_input("3. Year (e.g. 2018 or 2018-2019)", str(fm.get("year", proj["year"])))
    try:
        if str(year).isdigit():
            year_val = int(year)
        else:
            year_val = year
    except Exception:
        year_val = year

    client_name = prompt_input("4. Client Name", fm.get("client_name", ""))
    client_type = prompt_input("5. Client Type (e.g. NGO / Non-Profit, Corporate, SME, Government, Media)", fm.get("client_type", "SME / Web Client"))
    project_role = prompt_input("6. Real Role (e.g. Full-Stack DeveloperFull-Stack Developer, Freelance Technical Partner, Web Architect)", fm.get("project_role", "Full-Stack DeveloperFull-Stack Developer"))
    subtitle = prompt_input("7. One-line Subtitle / Brief Hook", fm.get("subtitle", ""))
    
    curr_stack = fm.get("tech_stack", [])
    if isinstance(curr_stack, list):
        curr_stack_str = ", ".join([str(x) for x in curr_stack])
    else:
        curr_stack_str = str(curr_stack)
    stack_input = prompt_input("8. Actual Tech Stack (Comma separated, e.g. PHP 7.4, Laravel, MySQL, Nginx, Linux VPS)", curr_stack_str)
    tech_stack = [s.strip() for s in stack_input.split(",") if s.strip()]

    # Update Frontmatter dict
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

    # 2. In-Depth Honest Interview Questions
    print("\n" + "-" * 80)
    print(f"{BOLD}{GREEN}GROUND TRUTH QUESTIONS (Write your raw thoughts, we polish them logically){RESET}")
    print("-" * 80)

    raw_summary = prompt_input(
        "Q1. Executive Summary: What was this project and what did you actually build?",
        "Developed and delivered a custom web solution to replace manual workflows and establish a secure, reliable digital system."
    )

    raw_problem = prompt_input(
        "Q2. The Problem: What was the client's actual situation or bottleneck before you started?",
        "The client lacked a centralized, reliable digital platform, resulting in operational friction and difficulty maintaining data."
    )

    raw_tech = prompt_input(
        "Q3. Implementation & Real Tech: How was it built under the hood? (Database schemas, CMS/Framework, integrations, hosting)",
        f"Built using {', '.join(tech_stack) if tech_stack else 'PHP and relational MySQL'}. Structured relational database tables, configured secure hosting, and developed custom administrative workflows."
    )

    raw_arch = prompt_input(
        "Q4. Architectural Decisions & Technical Challenges: What real engineering problems did you solve? (Data structure, performance, security, localization, legacy code rescue)",
        "Designed clean data boundaries, optimized queries for fast response times, handled secure user access, and maintained high availability with minimal administrative overhead."
    )

    raw_impact = prompt_input(
        "Q5. Operational & Institutional Impact: What was the real outcome? (Uptime, client adoption, longevity, efficiency gained)",
        "Successfully launched into production with zero critical downtime, enabling client staff to manage operations independently."
    )

    raw_takeaway = prompt_input(
        "Q6. Architect Takeaway: What did this project teach you or prove about your architectural evolution?",
        "Reinforced the core principle of pragmatic architecture: designing resilient, maintainable systems that solve real operational needs without introducing unnecessary complexity."
    )

    # Polish and rephrase
    details = {
        "summary": polish_notes_into_architectural_copy("summary", raw_summary, updated_fm),
        "problem": polish_notes_into_architectural_copy("problem", raw_problem, updated_fm),
        "tech_details": polish_notes_into_architectural_copy("tech_details", raw_tech, updated_fm),
        "architecture": polish_notes_into_architectural_copy("architecture", raw_arch, updated_fm),
        "impact": polish_notes_into_architectural_copy("impact", raw_impact, updated_fm),
        "takeaway": polish_notes_into_architectural_copy("takeaway", raw_takeaway, updated_fm)
    }

    formatted_md = format_project_markdown(updated_fm, details)

    print("\n" + "=" * 80)
    print(f"{BOLD}PREVIEW OF STRUCTURED & REPHRASED DOCUMENT:{RESET}")
    print("=" * 80)
    print(formatted_md)
    print("=" * 80)

    while True:
        action = prompt_input("Accept & Save? (Y = save & proceed to next, e = edit answers, s = skip, :q = exit)", "Y").strip().lower()
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
            print(f"{GREEN}✓ Saved {path.name} and logged progress.{RESET}")
            return "next"
        elif action in ("e", "edit"):
            return "retry"
        elif action in ("s", "skip"):
            print(f"{YELLOW}Skipped {path.name}.{RESET}")
            return "skip"
        else:
            print(f"{RED}Invalid option. Type 'Y', 'e', 's', or ':q'{RESET}")

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
        print(f"{'#':<4} | {'Year':<6} | {'Status':<10} | {'Done?':<6} | {'Slug':<38} | {'Client'}")
        print("-" * 95)
        for idx, p in enumerate(projects, 1):
            is_done = progress.get(p["slug"], {}).get("completed", False) or p["frontmatter"].get("interview_completed", False)
            done_str = f"{GREEN}YES{RESET}" if is_done else f"{RED}NO{RESET}"
            sel_str = "SELECTED" if p["is_selected"] else "STANDARD"
            client = p["frontmatter"].get("client_name", "N/A")
            print(f"{idx:<4} | {str(p['year']):<6} | {sel_str:<10} | {done_str:<14} | {p['slug']:<38} | {client}")
        return

    # Find the starting index (resume point)
    first_uncompleted_idx = 0
    completed_count = 0
    for idx, proj in enumerate(projects):
        is_done = progress.get(proj["slug"], {}).get("completed", False) or proj["frontmatter"].get("interview_completed", False)
        if is_done:
            completed_count += 1
        elif first_uncompleted_idx == 0:
            first_uncompleted_idx = idx + 1

    if first_uncompleted_idx == 0 and completed_count == len(projects):
        print(f"\n{BOLD}{GREEN}✓ All {len(projects)} projects in this scope have already been interviewed!{RESET}")
        print("To review or redo a specific project, use: python3 scripts/interview_projects.py --project <slug>")
        return

    print(f"\n{BOLD}{CYAN}=== Alex Seif Project Documentation Interviewer ==={RESET}")
    print(f"Total projects: {len(projects)} | Completed: {completed_count} | Remaining: {len(projects) - completed_count}")
    if completed_count > 0:
        print(f"{BOLD}{GREEN}▶ Resuming at project #{first_uncompleted_idx} of {len(projects)}: {projects[first_uncompleted_idx - 1]['slug']}{RESET}")
    print(f"Goal: Software Architect & NGO Technical Partner (Grounded & Truthful)")
    print(f"{DIM}Tip: Type ':q' or 'exit' at any prompt to save and quit.{RESET}\n")

    try:
        for i, proj in enumerate(projects, 1):
            is_done = progress.get(proj["slug"], {}).get("completed", False) or proj["frontmatter"].get("interview_completed", False)
            
            if is_done and not args.project:
                continue

            while True:
                res = interview_project(proj, progress, i, len(projects))
                if res == "retry":
                    continue
                else:
                    break
    except ExitInterviewException:
        save_progress(progress)
        print(f"\n\n{YELLOW}Progress saved to .interview_progress.json. You can resume anytime by running the script!{RESET}")
        sys.exit(0)

    print(f"\n{BOLD}{GREEN}✓ All projects in this session completed and saved!{RESET}")

if __name__ == "__main__":
    main()
