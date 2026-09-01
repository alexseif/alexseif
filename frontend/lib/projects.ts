import fs from "fs";
import path from "path";
import matter from "gray-matter";

function getBaseProjectsDir(): string {
  const cwd = process.cwd();
  if (fs.existsSync(path.join(cwd, "projects"))) {
    return path.join(cwd, "projects");
  }
  if (fs.existsSync(path.join(cwd, "../projects"))) {
    return path.join(cwd, "../projects");
  }
  return path.join(cwd, "projects");
}

function getDirs() {
  const baseDir = getBaseProjectsDir();
  const selectedDir = path.join(baseDir, "selected");
  return { baseDir, selectedDir };
}

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
    const { baseDir, selectedDir } = getDirs();
    const mainFiles = fs.existsSync(baseDir)
      ? fs
          .readdirSync(baseDir, { withFileTypes: true })
          .filter((dirent) => dirent.isFile() && dirent.name.endsWith(".md"))
          .map((dirent) => dirent.name)
      : [];
    const selectedFiles = fs.existsSync(selectedDir)
      ? fs
          .readdirSync(selectedDir, { withFileTypes: true })
          .filter((dirent) => dirent.isFile() && dirent.name.endsWith(".md"))
          .map((dirent) => dirent.name)
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
  const { baseDir, selectedDir } = getDirs();

  let fullPath = path.join(selectedDir, `${realSlug}.md`);
  let isSelected = true;

  if (!fs.existsSync(fullPath)) {
    fullPath = path.join(baseDir, `${realSlug}.md`);
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
    const { selectedDir } = getDirs();
    if (!fs.existsSync(selectedDir)) return [];
    const files = fs
      .readdirSync(selectedDir, { withFileTypes: true })
      .filter((dirent) => dirent.isFile() && dirent.name.endsWith(".md"))
      .map((dirent) => dirent.name);

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
    const { baseDir, selectedDir } = getDirs();
    if (!fs.existsSync(baseDir)) return [];

    const selectedFiles = new Set(
      fs.existsSync(selectedDir)
        ? fs
            .readdirSync(selectedDir, { withFileTypes: true })
            .filter((dirent) => dirent.isFile() && dirent.name.endsWith(".md"))
            .map((dirent) => dirent.name)
        : []
    );

    const mainFiles = fs
      .readdirSync(baseDir, { withFileTypes: true })
      .filter((dirent) => dirent.isFile() && dirent.name.endsWith(".md"))
      .map((dirent) => dirent.name);

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
