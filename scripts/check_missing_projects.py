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
        except Exception as e:
            print(f"Error reading {filepath}: {e}")
            
        filename = os.path.basename(filepath).lower().replace('.yaml', '')
        # remove year prefix like 2009-
        filename = re.sub(r'^\d{4}-', '', filename)
        existing_items.append(filename)
        
    return existing_items

def check_missing(csv_file, existing_items):
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

if __name__ == "__main__":
    existing = get_existing_projects("../projects")
    missing = check_missing("../projects/Portfolio - Portfolio.csv", existing)
    print(f"Found {len(missing)} missing projects.")
    for m in missing:
        print(f"{m.get('Year', '')} - {m.get('Title')}")
