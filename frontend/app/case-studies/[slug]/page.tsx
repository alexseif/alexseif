import { getProjectBySlug, getProjectSlugs } from "@/lib/projects";
import Link from "next/link";
import { ArrowLeft, Terminal, Server, Building2, Code2, ShieldAlert, Cpu } from "lucide-react";
import { Footer } from "@/components/Footer";
import Markdown from "react-markdown";
import remarkGfm from "remark-gfm";
import { notFound } from "next/navigation";
import { ReactNode } from "react";
import type { Metadata } from "next";

export async function generateStaticParams() {
  const slugs = getProjectSlugs();
  return slugs.map((slug) => ({
    slug: slug.replace(/\.(md|yaml)$/, ""),
  }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}): Promise<Metadata> {
  const { slug } = await params;
  try {
    const project = getProjectBySlug(slug);
    return {
      title: `${project.title} | Alex Seif`,
      description:
        project.subtitle ||
        `Case study on ${project.title} architecture and technical execution.`,
      openGraph: {
        title: `${project.title} | Architectural Case Study`,
        description: project.subtitle,
      },
    };
  } catch (e) {
    return { title: "Project Not Found" };
  }
}

export default async function CaseStudyPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;
  let project;
  try {
    project = getProjectBySlug(slug);
  } catch (e) {
    notFound();
  }

  // Custom typography & blueprint styling for React Markdown
  const components = {
    h1: ({ children }: { children?: ReactNode }) => (
      <h1 className="text-3xl md:text-4xl font-sans font-light tracking-wide text-foreground mt-12 mb-8 pb-4 border-b border-border/50 flex items-center gap-3">
        {children}
      </h1>
    ),
    h2: ({ children }: { children?: ReactNode }) => (
      <h2 className="text-2xl font-sans font-light tracking-wide text-foreground/90 mt-12 mb-6 border-b border-border/20 pb-2">
        {children}
      </h2>
    ),
    h3: ({ children }: { children?: ReactNode }) => (
      <h3 className="text-xl font-sans font-light tracking-wide text-primary mt-10 mb-4 flex items-center gap-2">
        <span className="text-primary/50 text-sm font-mono">//</span>
        {children}
      </h3>
    ),
    h4: ({ children }: { children?: ReactNode }) => (
      <h4 className="text-lg font-sans font-medium tracking-wide text-foreground/90 mt-8 mb-3">
        {children}
      </h4>
    ),
    p: ({ children }: { children?: ReactNode }) => (
      <p className="text-foreground/80 leading-relaxed mb-6 text-base md:text-lg font-light">
        {children}
      </p>
    ),
    ul: ({ children }: { children?: ReactNode }) => (
      <ul className="space-y-3 mb-8 text-foreground/80 leading-relaxed list-none ml-0 pl-0">
        {children}
      </ul>
    ),
    li: ({ children }: { children?: ReactNode }) => (
      <li className="flex items-start gap-3">
        <span className="text-primary font-mono text-sm mt-1 shrink-0">{"->"}</span>
        <span className="leading-relaxed">{children}</span>
      </li>
    ),
    strong: ({ children }: { children?: ReactNode }) => (
      <strong className="text-foreground font-medium bg-primary/10 px-1 rounded-sm">
        {children}
      </strong>
    ),
    a: ({ href, children }: { href?: string; children?: ReactNode }) => (
      <a
        href={href}
        target="_blank"
        rel="noopener noreferrer"
        className="text-primary hover:text-primary/80 underline underline-offset-4 decoration-primary/30 hover:decoration-primary transition-all"
      >
        {children}
      </a>
    ),
    blockquote: ({ children }: { children?: ReactNode }) => (
      <blockquote className="border-l-2 border-primary/50 pl-6 my-8 text-foreground/75 italic bg-card/20 py-4 pr-4 rounded-r-sm">
        {children}
      </blockquote>
    ),
    // Monospace Blueprint Terminal Frame for Architecture Box Diagrams & Code Blocks
    pre: ({ children }: { children?: ReactNode }) => (
      <div className="my-8 border border-primary/30 bg-[#07090e] rounded-sm overflow-hidden shadow-2xl">
        <div className="flex items-center justify-between px-4 py-2 bg-card/60 border-b border-border/40 text-xs font-mono text-foreground/60">
          <div className="flex items-center gap-2">
            <Cpu className="h-3.5 w-3.5 text-primary" />
            <span className="tracking-widest uppercase text-[11px] text-primary/90">
              System Architecture & Topology Specification
            </span>
          </div>
          <div className="flex items-center gap-1.5 opacity-60">
            <div className="w-2 h-2 rounded-full bg-border"></div>
            <div className="w-2 h-2 rounded-full bg-border"></div>
            <div className="w-2 h-2 rounded-full bg-border"></div>
          </div>
        </div>
        <div className="p-4 md:p-6 overflow-x-auto">
          <pre className="font-mono text-xs md:text-sm text-foreground/90 leading-relaxed whitespace-pre font-light">
            {children}
          </pre>
        </div>
      </div>
    ),
    code: ({
      inline,
      className,
      children,
      ...props
    }: {
      inline?: boolean;
      className?: string;
      children?: ReactNode;
    }) => {
      if (inline) {
        return (
          <code
            className="bg-primary/10 text-primary font-mono text-xs px-1.5 py-0.5 rounded border border-primary/20"
            {...props}
          >
            {children}
          </code>
        );
      }
      return (
        <code className={className} {...props}>
          {children}
        </code>
      );
    },
    // High-Density Markdown Table Styling
    table: ({ children }: { children?: ReactNode }) => (
      <div className="my-8 overflow-x-auto border border-border/60 rounded-sm">
        <table className="w-full text-left text-sm font-sans border-collapse">
          {children}
        </table>
      </div>
    ),
    thead: ({ children }: { children?: ReactNode }) => (
      <thead className="bg-card/60 border-b border-border/60 font-mono text-xs uppercase tracking-wider text-primary">
        {children}
      </thead>
    ),
    tbody: ({ children }: { children?: ReactNode }) => (
      <tbody className="divide-y divide-border/40 bg-background/50">
        {children}
      </tbody>
    ),
    tr: ({ children }: { children?: ReactNode }) => (
      <tr className="hover:bg-card/30 transition-colors">{children}</tr>
    ),
    th: ({ children }: { children?: ReactNode }) => (
      <th className="px-4 py-3 font-mono font-medium text-primary text-xs tracking-wider">
        {children}
      </th>
    ),
    td: ({ children }: { children?: ReactNode }) => (
      <td className="px-4 py-3 text-foreground/80 font-light text-sm">{children}</td>
    ),
  };

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Article",
    headline: project.title,
    description: project.subtitle,
    author: {
      "@type": "Person",
      name: "Alex Seif",
    },
    datePublished: `${project.year}-01-01`,
    keywords: project.tech_stack?.join(", "),
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
            <Link
              href="/case-studies"
              className="inline-flex items-center gap-2 text-foreground/50 hover:text-primary font-mono text-xs uppercase tracking-widest transition-colors group"
            >
              <ArrowLeft className="h-4 w-4 group-hover:-translate-x-1 transition-transform" />
              Return to Project Vault
            </Link>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 relative">
            {/* Left Column: Sticky Metadata Sidebar */}
            <aside className="lg:col-span-4 relative">
              <div className="sticky top-24 space-y-8">
                {/* Header Title */}
                <div className="space-y-4 pb-8 border-b border-border/50">
                  <div className="flex items-center gap-3">
                    <Terminal className="h-4 w-4 text-primary" />
                    <span className="text-primary text-xs font-mono tracking-[0.3em] uppercase">
                      Engineering Dossier
                    </span>
                  </div>
                  <h1 className="text-3xl md:text-4xl font-sans font-light tracking-wide text-foreground">
                    {project.title}
                  </h1>
                  {project.subtitle && (
                    <p className="text-foreground/60 text-sm leading-relaxed">
                      {project.subtitle}
                    </p>
                  )}
                </div>

                {/* Metadata Block */}
                <div className="space-y-6 pb-8 border-b border-border/50">
                  {project.year > 0 && (
                    <div className="flex flex-col gap-1">
                      <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">
                        Timeline
                      </span>
                      <span className="text-foreground/90 font-mono text-sm">
                        {project.year}
                      </span>
                    </div>
                  )}

                  {project.agency && (
                    <div className="flex flex-col gap-1">
                      <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">
                        Engagement Role
                      </span>
                      <div className="flex items-center gap-2 text-foreground/90 text-sm">
                        <ShieldAlert className="h-3.5 w-3.5 text-primary/70" />
                        {project.agency}
                      </div>
                    </div>
                  )}

                  {project.client_type && (
                    <div className="flex flex-col gap-1">
                      <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">
                        Architecture Identity
                      </span>
                      <div className="flex items-center gap-2 text-foreground/90 text-sm">
                        <Building2 className="h-3.5 w-3.5 text-primary/70" />
                        {project.client_type}
                      </div>
                    </div>
                  )}

                  {project.url && (
                    <div className="flex flex-col gap-1">
                      <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">
                        Network Context
                      </span>
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
                      <span className="text-[10px] text-foreground/40 font-mono tracking-widest uppercase">
                        Technical Stack
                      </span>
                    </div>
                    <div className="flex flex-wrap gap-2">
                      {project.tech_stack.map((tech) => (
                        <span
                          key={tech}
                          className="text-xs text-primary/80 font-mono tracking-wider bg-primary/5 px-2.5 py-1.5 border border-primary/20 rounded-sm"
                        >
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
                <Markdown remarkPlugins={[remarkGfm]} components={components}>
                  {project.content}
                </Markdown>
              </div>
            </article>
          </div>
        </div>
      </main>
      <Footer />
    </>
  );
}
