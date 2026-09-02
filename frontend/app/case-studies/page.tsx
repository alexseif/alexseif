import { getSelectedProjects, getArchiveProjects } from "@/lib/projects";
import Link from "next/link";
import { ArrowLeft, Terminal, ArrowRight, ShieldCheck, Layers } from "lucide-react";
import { Footer } from "@/components/Footer";
import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Case Studies & Architectural Vault | Alex Seif",
  description:
    "Engineering case studies and system dossiers by Alex Seif. High-concurrency systems, Symfony payment engines, Drupal portals, WordPress FSE migrations, and Web GIS platforms.",
  alternates: {
    canonical: "/case-studies",
  },
  openGraph: {
    title: "Case Studies & Architectural Vault | Alex Seif",
    description: "Explore the full architectural vault, systems topologies, and engineering dossiers.",
    url: "https://alexseif.com/case-studies",
  },
};

export default async function CaseStudiesIndex() {
  const selectedProjects = getSelectedProjects();
  const archiveProjects = getArchiveProjects();

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "System Logs - Case Studies",
    "description":
      "A comprehensive index of software architecture case studies, engineering dossiers, and system deployments.",
    "url": "https://alexseif.com/case-studies",
    "author": {
      "@type": "Person",
      "name": "Alex Seif",
    },
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
              href="/"
              className="inline-flex items-center gap-2 text-foreground/50 hover:text-primary font-mono text-xs uppercase tracking-widest transition-colors group"
            >
              <ArrowLeft className="h-4 w-4 group-hover:-translate-x-1 transition-transform" />
              Return to Core
            </Link>
          </div>

          <div className="space-y-20">
            {/* Header Block */}
            <div className="space-y-4 pb-8 border-b border-border/50 max-w-3xl">
              <div className="flex items-center gap-4">
                <Terminal className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
                  System Logs
                </span>
              </div>
              <h1 className="text-3xl md:text-5xl font-sans font-light tracking-wide text-foreground leading-tight">
                Architectural Vault & Case Studies
              </h1>
              <p className="text-foreground/70 text-lg leading-relaxed pt-4">
                Raw engineering validation. Access the complete index of architectural deployments,
                mission-critical public infrastructure, and technical leadership engagements.
              </p>
            </div>

            {/* Tier 1: Featured Architectural Engagements */}
            {selectedProjects.length > 0 && (
              <section className="space-y-8">
                <div className="flex items-center gap-3 border-b border-border/40 pb-4">
                  <ShieldCheck className="h-5 w-5 text-primary" />
                  <h2 className="text-xl md:text-2xl font-sans font-light tracking-wide text-foreground">
                    Featured Architectural Engagements
                  </h2>
                  <span className="text-xs font-mono text-primary/70 ml-auto uppercase tracking-widest">
                    [{selectedProjects.length} Selected]
                  </span>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  {selectedProjects.map((project) => (
                    <Link key={project.slug} href={`/case-studies/${project.slug}`}>
                      <div className="group block border border-primary/30 bg-card/20 p-8 hover:bg-card/50 hover:border-primary transition-all duration-300 h-full flex flex-col justify-between relative overflow-hidden">
                        <div className="absolute top-0 right-0 w-16 h-16 pointer-events-none overflow-hidden">
                          <div className="absolute transform rotate-45 bg-primary/10 text-primary text-[9px] font-mono tracking-widest py-0.5 right-[-35px] top-[18px] w-[120px] text-center border-b border-primary/20">
                            FEATURED
                          </div>
                        </div>

                        <div className="space-y-4">
                          <div className="flex items-center justify-between">
                            <span className="text-primary text-xs font-mono border border-primary/40 px-2.5 py-1 rounded-sm bg-primary/10">
                              {project.year}
                            </span>
                            <ArrowRight className="h-4 w-4 text-foreground/30 group-hover:text-primary group-hover:translate-x-1 transition-all mr-6" />
                          </div>

                          <h3 className="text-foreground text-2xl font-sans font-light tracking-wide group-hover:text-primary transition-colors">
                            {project.title}
                          </h3>

                          {project.project_role && (
                            <p className="text-xs font-mono text-primary/80 tracking-wide uppercase">
                              // {project.project_role}
                            </p>
                          )}

                          <p className="text-foreground/75 text-sm leading-relaxed line-clamp-3">
                            {project.subtitle}
                          </p>
                        </div>

                        {project.tech_stack && project.tech_stack.length > 0 && (
                          <div className="pt-6 mt-6 border-t border-border/50 flex flex-wrap gap-2">
                            {project.tech_stack.slice(0, 4).map((tech: string) => (
                              <span
                                key={tech}
                                className="text-[10px] text-primary/80 font-mono tracking-wider uppercase bg-primary/5 px-2 py-1 border border-primary/20"
                              >
                                {tech}
                              </span>
                            ))}
                            {project.tech_stack.length > 4 && (
                              <span className="text-[10px] text-foreground/50 font-mono tracking-wider uppercase px-2 py-1">
                                +{project.tech_stack.length - 4}
                              </span>
                            )}
                          </div>
                        )}
                      </div>
                    </Link>
                  ))}
                </div>
              </section>
            )}

            {/* Tier 2: Complete Project Vault */}
            {archiveProjects.length > 0 && (
              <section className="space-y-8">
                <div className="flex items-center gap-3 border-b border-border/40 pb-4">
                  <Layers className="h-5 w-5 text-foreground/50" />
                  <h2 className="text-xl md:text-2xl font-sans font-light tracking-wide text-foreground/90">
                    Project Archive
                  </h2>
                  <span className="text-xs font-mono text-foreground/40 ml-auto uppercase tracking-widest">
                    [{archiveProjects.length} Systems]
                  </span>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                  {archiveProjects.map((project) => (
                    <Link key={project.slug} href={`/case-studies/${project.slug}`}>
                      <div className="group block border border-border bg-background p-8 hover:bg-card/50 hover:border-primary/50 transition-all duration-300 h-full flex flex-col justify-between">
                        <div className="space-y-4">
                          <div className="flex items-center justify-between">
                            <span className="text-primary text-xs font-mono border border-primary/30 px-2 py-1 rounded-sm bg-primary/5">
                              {project.year}
                            </span>
                            <ArrowRight className="h-4 w-4 text-foreground/30 group-hover:text-primary group-hover:translate-x-1 transition-all" />
                          </div>
                          <h3 className="text-foreground text-xl font-sans font-light tracking-wide group-hover:text-primary transition-colors">
                            {project.title}
                          </h3>
                          <p className="text-foreground/70 text-sm leading-relaxed line-clamp-3">
                            {project.subtitle}
                          </p>
                        </div>
                        {project.tech_stack && project.tech_stack.length > 0 && (
                          <div className="pt-6 mt-6 border-t border-border/50 flex flex-wrap gap-2">
                            {project.tech_stack.slice(0, 3).map((tech: string) => (
                              <span
                                key={tech}
                                className="text-[10px] text-foreground/50 font-mono tracking-wider uppercase bg-card px-2 py-1 border border-border/50"
                              >
                                {tech}
                              </span>
                            ))}
                            {project.tech_stack.length > 3 && (
                              <span className="text-[10px] text-foreground/50 font-mono tracking-wider uppercase px-2 py-1">
                                +{project.tech_stack.length - 3}
                              </span>
                            )}
                          </div>
                        )}
                      </div>
                    </Link>
                  ))}
                </div>
              </section>
            )}
          </div>
        </div>
      </main>
      <Footer />
    </>
  );
}
