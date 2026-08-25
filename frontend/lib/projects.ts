import fs from "fs";
import path from "path";
import matter from "gray-matter";

const hsmExportsDir = path.join(process.cwd(), "../projects/hsm_exports");
const selectedHsmExportsDir = path.join(process.cwd(), "../projects/selected/hsm_exports");

export interface ProjectData {
  slug: string;
  title: string;
  year: number;
  url?: string;
  client_name?: string;
  client_type?: string;
  agency?: string;
  project_role?: string;
  subtitle?: string;
  tech_stack?: string[];
  selected?: boolean;
  content: string;
}

export function getProjectSlugs(): string[] {
  try {
    const mainFiles = fs.existsSync(hsmExportsDir)
      ? fs.readdirSync(hsmExportsDir).filter((f) => f.endsWith(".md"))
      : [];
    const selectedFiles = fs.existsSync(selectedHsmExportsDir)
      ? fs.readdirSync(selectedHsmExportsDir).filter((f) => f.endsWith(".md"))
      : [];

    const slugs = Array.from(
      new Set([...selectedFiles, ...mainFiles].map((f) => f.replace(/\.md$/, "")))
    );
    return slugs;
  } catch (e) {
    console.error("Error reading project slugs:", e);
    return [];
  }
}

export function getProjectBySlug(slug: string): ProjectData {
  const realSlug = slug.replace(/\.(md|yaml)$/, "");
  let fullPath = path.join(selectedHsmExportsDir, `${realSlug}.md`);
  let isSelected = true;

  if (!fs.existsSync(fullPath)) {
    fullPath = path.join(hsmExportsDir, `${realSlug}.md`);
    isSelected = false;
  }

  if (!fs.existsSync(fullPath)) {
    throw new Error(`Project not found: ${realSlug}`);
  }

  const fileContents = fs.readFileSync(fullPath, "utf8");
  const { data, content } = matter(fileContents);

  const title = data.title || data.client_name || realSlug.replace(/-/g, " ");
  const year = data.year || 0;
  const client_type = data.client_type || "";
  const agency = data.project_role || data.agency || "";
  const subtitle = data.subtitle || "";
  const tech_stack = Array.isArray(data.tech_stack) ? data.tech_stack : [];

  return {
    slug: realSlug,
    title,
    year,
    url: data.url || "",
    client_name: data.client_name || title,
    client_type,
    agency,
    project_role: data.project_role || agency,
    subtitle,
    tech_stack,
    selected: data.selected !== undefined ? Boolean(data.selected) : isSelected,
    content,
  };
}

export function getSelectedProjects(): ProjectData[] {
  try {
    if (!fs.existsSync(selectedHsmExportsDir)) return [];
    const files = fs.readdirSync(selectedHsmExportsDir).filter((f) => f.endsWith(".md"));
    return files
      .map((file) => getProjectBySlug(file))
      .sort((a, b) => (a.year > b.year ? -1 : 1));
  } catch (e) {
    console.error("Error fetching selected projects:", e);
    return [];
  }
}

export function getArchiveProjects(): ProjectData[] {
  try {
    if (!fs.existsSync(hsmExportsDir)) return [];
    const selectedFiles = new Set(
      fs.existsSync(selectedHsmExportsDir)
        ? fs.readdirSync(selectedHsmExportsDir).filter((f) => f.endsWith(".md"))
        : []
    );
    const mainFiles = fs.readdirSync(hsmExportsDir).filter((f) => f.endsWith(".md"));

    const archiveOnly = mainFiles.filter((f) => !selectedFiles.has(f));
    return archiveOnly
      .map((file) => getProjectBySlug(file))
      .sort((a, b) => (a.year > b.year ? -1 : 1));
  } catch (e) {
    console.error("Error fetching archive projects:", e);
    return [];
  }
}

export function getAllProjects(): ProjectData[] {
  const slugs = getProjectSlugs();
  const projects = slugs
    .map((slug) => getProjectBySlug(slug))
    .sort((a, b) => (a.year > b.year ? -1 : 1));
  return projects;
}
