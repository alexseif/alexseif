import { getAllProjects } from "@/lib/projects";
import Link from "next/link";
import { ArrowLeft, Terminal, ArrowRight } from "lucide-react";
import { Footer } from "@/components/Footer";
import type { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'System Logs | Case Studies | Alex Seif',
  description: 'Raw engineering validation. Examine the architectural identity, technical stack, and engagement type of all deployments.',
  openGraph: {
    title: 'System Logs | Case Studies',
    description: 'Explore the full architectural vault and engineering dossiers.',
  }
};

export default async function CaseStudiesIndex() {
  const allProjects = getAllProjects();

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "System Logs - Case Studies",
    "description": "A comprehensive index of software architecture case studies, engineering dossiers, and system deployments.",
    "url": "https://alexseif.com/case-studies",
    "author": {
      "@type": "Person",
      "name": "Alex Seif"
    }
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
              Return to Core
            </Link>
          </div>

          <div className="space-y-12">
            {/* Header Block */}
            <div className="space-y-4 pb-8 border-b border-border/50 max-w-3xl">
              <div className="flex items-center gap-4">
                <Terminal className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono">System Logs</span>
              </div>
              <h1 className="text-3xl md:text-5xl font-sans font-light tracking-wide text-foreground leading-tight">
                Complete Project Vault
              </h1>
              <p className="text-foreground/70 text-lg leading-relaxed pt-4">
                Raw engineering validation. Access the complete index of architectural deployments, structural systems, and NGO Technical Partnerships.
              </p>
            </div>

            {/* Grid Index */}
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {allProjects.map((project) => (
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
                          <span key={tech} className="text-[10px] text-foreground/50 font-mono tracking-wider uppercase bg-card px-2 py-1 border border-border/50">
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
          </div>
        </div>
      </main>
      <Footer />
    </>
  );
}
