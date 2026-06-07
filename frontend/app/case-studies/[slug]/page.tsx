import { getProjectBySlug, getProjectSlugs } from "@/lib/projects";
import Link from "next/link";
import { ArrowLeft, Terminal, Server, Building2, Code2, ShieldAlert } from "lucide-react";
import Markdown from "react-markdown";
import remarkGfm from "remark-gfm";
import { notFound } from "next/navigation";
import { ReactNode } from "react";
import type { Metadata } from 'next';

export async function generateStaticParams() {
  const slugs = getProjectSlugs();
  return slugs
    .filter((slug) => slug.endsWith(".md"))
    .map((slug) => ({
      slug: slug.replace(/\.md$/, ""),
    }));
}

export async function generateMetadata({ params }: { params: Promise<{ slug: string }> }): Promise<Metadata> {
  const { slug } = await params;
  try {
    const project = getProjectBySlug(slug);
    return {
      title: `${project.title} | Alex Seif`,
      description: project.subtitle || `Case study on ${project.title} architecture and technical execution.`,
      openGraph: {
        title: `${project.title} | Case Study`,
        description: project.subtitle,
      }
    };
  } catch (e) {
    return { title: "Project Not Found" };
  }
}

export default async function CaseStudyPage({ params }: { params: Promise<{ slug: string }> }) {
  const { slug } = await params;
  let project;
  try {
    project = getProjectBySlug(slug);
  } catch (e) {
    notFound();
  }

  // Define custom components for React Markdown to match the dark canvas typography framework
  const components = {
    h1: ({ children }: { children?: ReactNode }) => (
      <h1 className="text-3xl md:text-4xl font-sans font-light tracking-wide text-foreground mt-16 mb-8 pb-4 border-b border-border/50 flex items-center gap-3">
        {children}
      </h1>
    ),
    h2: ({ children }: { children?: ReactNode }) => (
      <h2 className="text-2xl font-sans font-light tracking-wide text-foreground/90 mt-12 mb-6">
        {children}
      </h2>
    ),
    h3: ({ children }: { children?: ReactNode }) => (
      <h3 className="text-xl font-sans font-light tracking-wide text-primary mt-10 mb-4 flex items-center gap-2">
        <span className="text-primary/50 text-sm font-mono">//</span>
        {children}
      </h3>
    ),
    p: ({ children }: { children?: ReactNode }) => (
      <p className="text-foreground/80 leading-loose mb-6 text-lg font-light">
        {children}
      </p>
    ),
    ul: ({ children }: { children?: ReactNode }) => (
      <ul className="space-y-4 mb-8 text-foreground/80 leading-relaxed list-none ml-0 pl-0">
        {children}
      </ul>
    ),
    li: ({ children }: { children?: ReactNode }) => (
      <li className="flex items-start gap-3">
        <span className="text-primary font-mono text-sm mt-1 shrink-0">{"->"}</span>
        <span>{children}</span>
      </li>
    ),
    strong: ({ children }: { children?: ReactNode }) => (
      <strong className="text-foreground font-medium bg-primary/10 px-1 rounded-sm">
        {children}
      </strong>
    ),
    a: ({ href, children }: { href?: string; children?: ReactNode }) => (
      <a href={href} target="_blank" rel="noopener noreferrer" className="text-primary hover:text-primary/80 underline underline-offset-4 decoration-primary/30 hover:decoration-primary transition-all">
        {children}
      </a>
    ),
    blockquote: ({ children }: { children?: ReactNode }) => (
      <blockquote className="border-l-2 border-primary/50 pl-6 my-8 text-foreground/70 italic bg-card/10 py-4 pr-4">
        {children}
      </blockquote>
    )
  };

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": project.title,
    "description": project.subtitle,
    "author": {
      "@type": "Person",
      "name": "Alex Seif"
    },
    "datePublished": `${project.year}-01-01`,
    "keywords": project.tech_stack?.join(", ")
  };

  return (
    <>
    <script
      type="application/ld+json"
      dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
    />
    <main className="min-h-screen bg-background blueprint-grid selection:bg-primary/20 selection:text-primary">
      <div className="max-w-7xl mx-auto px-6 py-12 md:py-24">
        {/* Top Navigation */}
        <div className="mb-12 md:mb-20">
          <Link href="/" className="inline-flex items-center gap-2 text-foreground/50 hover:text-primary font-mono text-xs uppercase tracking-widest transition-colors group">
            <ArrowLeft className="h-4 w-4 group-hover:-translate-x-1 transition-transform" />
            Return to System Index
          </Link>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 relative">
          
          {/* Left Column: Rigid Sticky Sidebar Block */}
          <aside className="lg:col-span-4 relative">
            <div className="sticky top-24 space-y-8">
              
              {/* Header Title */}
              <div className="space-y-4 pb-8 border-b border-border/50">
                <div className="flex items-center gap-3">
                  <Terminal className="h-4 w-4 text-primary" />
                  <span className="text-primary text-xs font-mono tracking-[0.3em] uppercase">Project Dossier</span>
                </div>
                <h1 className="text-3xl md:text-4xl font-sans font-light tracking-wide text-foreground">
                  {project.title}
                </h1>
                <p className="text-foreground/60 text-sm leading-relaxed">
                  {project.subtitle}
                </p>
              </div>

              {/* Metadata Block */}
              <div className="space-y-6 pb-8 border-b border-border/50">
                {project.year && (
                  <div className="flex flex-col gap-1">
                    <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">Timeline</span>
                    <span className="text-foreground/90 font-mono text-sm">{project.year}</span>
                  </div>
                )}
                
                {project.agency && (
                  <div className="flex flex-col gap-1">
                    <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">Engagement Type</span>
                    <div className="flex items-center gap-2 text-foreground/90 text-sm">
                      <ShieldAlert className="h-3.5 w-3.5 text-primary/70" />
                      {project.agency}
                    </div>
                  </div>
                )}

                {project.client_type && (
                  <div className="flex flex-col gap-1">
                    <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">Architecture Identity</span>
                    <div className="flex items-center gap-2 text-foreground/90 text-sm">
                      <Building2 className="h-3.5 w-3.5 text-primary/70" />
                      {project.client_type}
                    </div>
                  </div>
                )}

                {project.url && (
                  <div className="flex flex-col gap-1">
                    <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">Network Context</span>
                    <div className="flex items-center gap-2 text-foreground/90 text-sm">
                      <Server className="h-3.5 w-3.5 text-primary/70" />
                      {project.url}
                    </div>
                  </div>
                )}
              </div>

              {/* Technical Stack Chips */}
              {project.tech_stack && project.tech_stack.length > 0 && (
                <div className="space-y-4">
                  <div className="flex items-center gap-2">
                    <Code2 className="h-4 w-4 text-foreground/40" />
                    <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">Technical Stack</span>
                  </div>
                  <div className="flex flex-wrap gap-2">
                    {project.tech_stack.map((tech) => (
                      <span key={tech} className="text-xs text-primary/80 font-mono tracking-wider bg-primary/5 px-2.5 py-1.5 border border-primary/20 rounded-sm">
                        {tech}
                      </span>
                    ))}
                  </div>
                </div>
              )}
            </div>
          </aside>

          {/* Right Column: Markdown Body Content */}
          <article className="lg:col-span-8">
            <div className="prose prose-invert max-w-none">
              {/* Image Placeholder Top */}
              <div className="w-full aspect-[21/9] border border-border/50 bg-card/20 rounded-sm mb-12 flex flex-col items-center justify-center relative overflow-hidden group">
                <div className="absolute inset-0 blueprint-grid opacity-20 group-hover:opacity-30 transition-opacity"></div>
                <div className="absolute top-4 left-4 flex gap-1">
                  <div className="w-2 h-2 rounded-full bg-border"></div>
                  <div className="w-2 h-2 rounded-full bg-border"></div>
                  <div className="w-2 h-2 rounded-full bg-border"></div>
                </div>
                <div className="text-primary/40 font-mono text-xs tracking-[0.2em] uppercase border border-primary/20 px-4 py-2 bg-background/50 backdrop-blur-sm relative z-10">
                  [System Architecture Flowchart Topology Diagram]
                </div>
              </div>

              <Markdown remarkPlugins={[remarkGfm]} components={components}>
                {project.content}
              </Markdown>

              {/* Image Placeholder Bottom */}
              <div className="w-full aspect-video border border-border/50 bg-card/20 rounded-sm mt-16 mb-8 flex flex-col items-center justify-center relative overflow-hidden group">
                <div className="absolute inset-0 blueprint-grid opacity-20 group-hover:opacity-30 transition-opacity"></div>
                <div className="absolute bottom-4 right-4 font-mono text-[10px] text-foreground/30">FIG. 02</div>
                <div className="text-primary/40 font-mono text-xs tracking-[0.2em] uppercase border border-primary/20 px-4 py-2 bg-background/50 backdrop-blur-sm relative z-10">
                  [Data Isolation Node Pipeline Diagram]
                </div>
              </div>
            </div>
          </article>

        </div>
      </div>
    </main>
    </>
  );
}
