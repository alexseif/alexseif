import fs from "fs";
import path from "path";
import matter from "gray-matter";

const projectsDirectory = path.join(process.cwd(), "../projects");

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
  return fs.readdirSync(projectsDirectory);
}

export function getProjectBySlug(slug: string): ProjectData {
  const realSlug = slug.replace(/\.md$/, "");
  const fullPath = path.join(projectsDirectory, `${realSlug}.md`);
  const fileContents = fs.readFileSync(fullPath, "utf8");
  const { data, content } = matter(fileContents);

  return {
    slug: realSlug,
    title: data.title || "",
    year: data.year || 0,
    url: data.url || "",
    client_type: data.client_type || "",
    agency: data.agency || "",
    subtitle: data.subtitle || "",
    tech_stack: data.tech_stack || [],
    content,
  };
}

export function getAllProjects(): ProjectData[] {
  const slugs = getProjectSlugs();
  const projects = slugs
    .filter((slug) => slug.endsWith(".md"))
    .map((slug) => getProjectBySlug(slug))
    .sort((project1, project2) => (project1.year > project2.year ? -1 : 1));
  return projects;
}
