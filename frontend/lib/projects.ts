import fs from "fs";
import path from "path";
import yaml from "yaml";

const projectsDirectory = path.join(process.cwd(), "../projects");
const selectedProjectsDirectory = path.join(projectsDirectory, "selected");

export interface ProjectData {
  slug: string;
  title: string;
  year: number;
  url?: string;
  client_type?: string;
  agency?: string;
  subtitle?: string;
  tech_stack?: string[];
  content: string;
}

export function getProjectSlugs() {
  try {
    const mainFiles = fs.readdirSync(projectsDirectory).filter(f => f.endsWith('.yaml'));
    const selectedFiles = fs.existsSync(selectedProjectsDirectory) 
      ? fs.readdirSync(selectedProjectsDirectory).filter(f => f.endsWith('.yaml')) 
      : [];
    
    // Combine and deduplicate slugs
    return Array.from(new Set([...mainFiles, ...selectedFiles]));
  } catch (e) {
    return [];
  }
}

export function getProjectBySlug(slug: string): ProjectData {
  const realSlug = slug.replace(/\.yaml$/, "");
  let fullPath = path.join(projectsDirectory, `${realSlug}.yaml`);
  
  // If not found in main directory, check selected directory
  if (!fs.existsSync(fullPath)) {
    fullPath = path.join(selectedProjectsDirectory, `${realSlug}.yaml`);
  }
  
  if (!fs.existsSync(fullPath)) {
    throw new Error(`Project not found: ${realSlug}`);
  }

  const fileContents = fs.readFileSync(fullPath, "utf8");
  const data = yaml.parse(fileContents);

  let tech_stack: string[] = [];
  if (data.technical_stack) {
    Object.values(data.technical_stack).forEach((arr: any) => {
      if (Array.isArray(arr)) tech_stack.push(...arr);
    });
  }

  const content = `
${data.architectural_context || ''}

${data.quantifiable_engineering_impact && data.quantifiable_engineering_impact.length > 0 ? '### Engineering Impact\n' + data.quantifiable_engineering_impact.map((i: string) => '- ' + i).join('\n') : ''}

${data.edge_cases_managed && data.edge_cases_managed.length > 0 ? '### Edge Cases Managed\n' + data.edge_cases_managed.map((i: string) => '- ' + i).join('\n') : ''}
  `.trim();

  // Create a proper title (e.g., Client Name)
  let title = data.client_name || realSlug.replace(/-/g, ' ');

  return {
    slug: realSlug,
    title,
    year: data.timeline?.start_year || 0,
    url: "",
    client_type: data.client_type || "",
    agency: data.project_role || "",
    subtitle: data.architectural_context ? data.architectural_context.slice(0, 150) + "..." : "",
    tech_stack,
    content,
  };
}

export function getAllProjects(): ProjectData[] {
  const slugs = getProjectSlugs();
  const projects = slugs
    .map((slug) => getProjectBySlug(slug))
    .sort((project1, project2) => (project1.year > project2.year ? -1 : 1));
  return projects;
}

