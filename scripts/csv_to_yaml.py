import os
import csv
import glob
import yaml
import re

def slugify(text):
    text = text.lower()
    text = re.sub(r'[^a-z0-9]+', '-', text)
    return text.strip('-')

def get_existing_projects(directory):
    yaml_files = glob.glob(os.path.join(directory, "*.yaml"))
    existing_items = []
    for filepath in yaml_files:
        try:
            with open(filepath, 'r', encoding='utf-8') as f:
                data = yaml.safe_load(f)
                if data:
                    if 'client_name' in data and data['client_name']:
                        existing_items.append(data['client_name'].lower())
                    if 'project_id' in data and data['project_id']:
                        existing_items.append(data['project_id'].lower())
        except Exception:
            pass
            
        filename = os.path.basename(filepath).lower().replace('.yaml', '')
        filename = re.sub(r'^\d{4}-', '', filename)
        existing_items.append(filename)
        
    return existing_items

def get_missing_rows(csv_file, existing_items):
    missing_rows = []
    with open(csv_file, 'r', encoding='utf-8') as f:
        reader = csv.DictReader(f)
        for row in reader:
            title = row.get('Title', '').strip()
            if not title:
                continue
            
            title_lower = title.lower()
            title_slug = slugify(title)
            
            found = False
            for item in existing_items:
                if (title_lower in item or item in title_lower or 
                    title_slug in item or item in title_slug):
                    found = True
                    break
            
            if not found:
                missing_rows.append(row)
                
    return missing_rows

def generate_yaml_local(row):
    year_str = row.get('Year', '').strip()
    year = int(year_str) if year_str.isdigit() else 0
    
    year_end_str = row.get('Year End', '').strip()
    year_end = int(year_end_str) if year_end_str.isdigit() else year
    
    title = row.get('Title', '').strip()
    title_slug = slugify(title)
    if len(title_slug) > 30:
        title_slug = title_slug[:30].strip('-')
        
    client_name = row.get('Client / Agency', '').strip() or title
    client_type = row.get('Client Type', '').strip() or "N/A"
    
    # We can't really extract project_role easily, so we use a fallback or try to extract from description
    project_role = "Software Engineer"
    desc = row.get('Description', '').strip()
    if 'CTO' in desc or 'Chief Technology Officer' in desc:
        project_role = "Chief Technology Officer"
    elif 'Architect' in desc:
        project_role = "Software Architect"
    elif 'Consult' in desc or 'Consulting' in row.get('Subtitle', ''):
        project_role = "Technical Consultant"

    arch_context = desc or row.get('Subtitle', '').strip() or "N/A"
    
    tech_stack_raw = row.get('Technical Stack', '').strip()
    tech_items = [x.strip() for x in re.split(r'[,\\n]+', tech_stack_raw) if x.strip()]
    
    skills_raw = row.get('Skills', '').strip()
    skills_items = [x.strip().strip('* ') for x in re.split(r'[,\\n]+', skills_raw) if x.strip()]
    
    notes = row.get('Notes /Edge Cases', '').strip()
    impacts = []
    if notes:
        impacts.append(notes)
    
    yaml_dict = {
        "project_id": title_slug,
        "client_name": client_name,
        "client_type": client_type,
        "project_role": project_role,
        "timeline": {
            "start_year": year,
            "end_year": year_end
        },
        "architectural_context": arch_context,
        "technical_stack": {
            "languages": tech_items,
            "frameworks": [],
            "infrastructure_cloud": [],
            "data_layers": []
        },
        "core_competencies": skills_items,
        "quantifiable_engineering_impact": impacts,
        "edge_cases_managed": []
    }
    
    yaml_path = f"../projects/{year_str if year_str else '0000'}-{title_slug}.yaml"
    
    if os.path.exists(yaml_path):
        print(f"Skipping {yaml_path}, already exists.")
        return

    print(f"Generating for: {title}")
    
    # We dump as yaml
    with open(yaml_path, "w", encoding="utf-8") as f:
        yaml.dump(yaml_dict, f, sort_keys=False, default_flow_style=False, allow_unicode=True)
    
    print(f"Successfully created -> {yaml_path}")

if __name__ == "__main__":
    existing = get_existing_projects("../projects")
    missing = get_missing_rows("../projects/Portfolio - Portfolio.csv", existing)
    
    print(f"Found {len(missing)} missing projects.")
    
    for row in missing:
        generate_yaml_local(row)
