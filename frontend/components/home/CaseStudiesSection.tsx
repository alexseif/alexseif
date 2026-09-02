import React from "react";
import Link from "next/link";
import { ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";

export const CaseStudiesSection = ({ eliteProjects }: { eliteProjects: any[] }) => {
  return (
    <section className="py-20 px-6 relative border-t border-border/30 bg-card/10">
      <div className="max-w-6xl mx-auto">
        <div className="space-y-12">
          <div className="space-y-6">
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              SELECTED WORK
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
            {eliteProjects.map((project) => (
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
                    <p className="text-foreground/70 text-sm leading-relaxed">
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

          <div className="flex justify-center pt-8">
            <Link href="/case-studies">
              <Button
                variant="outline"
                className="font-mono text-xs tracking-widest uppercase border-primary/30 text-foreground hover:bg-primary/10 hover:text-primary transition-all px-8 py-6 rounded-sm cursor-pointer"
              >
                Access Complete Vault
              </Button>
            </Link>
          </div>
        </div>
      </div>
    </section>
  );
};
