import re

with open('objective/resume.md', 'r') as f:
    content = f.read()

# Extract the header parts we need
lines = content.split('\n')
name = lines[0].replace('# ', '').strip()
title = lines[1].replace('**', '').strip()
location = lines[2].strip()
# Contact line: alex.seif@gmail.com | +201004006332 | [linkedin...
contact_parts = lines[3].split('|')
email = contact_parts[0].strip()
phone = contact_parts[1].strip()

frontmatter = f"""---
name: "{name}"
title: "{title}"
location: "{location}"
phone: "{phone}"
email: "{email}"
linkedin: "https://linkedin.com/in/alexseif"
github: "https://github.com/alexseif"
website: "https://alexseif.com"
---

"""

# find the start of "## Professional Profile"
profile_idx = content.find("## Professional Profile")
if profile_idx != -1:
    body = content[profile_idx:]
else:
    body = content

with open('Resume.md', 'w') as f:
    f.write(frontmatter + body)
