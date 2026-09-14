import React from "react";
import Link from "next/link";
import { Terminal, Landmark, ArrowRight } from "lucide-react";

export const SpecializedOfferingsSection = () => {
  return (
    <section className="py-16 px-6 relative bg-card/10 border-t border-border/30">
      <div className="max-w-6xl mx-auto space-y-8">
        <div className="text-center space-y-3">
          <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
            // Specialized Engagements
          </p>
          <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
            Architectural Consulting & Governance
          </h2>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {/* Card 1: Requirements Elicitation */}
          <div className="p-8 md:p-10 border border-border/50 bg-background/60 rounded-sm flex flex-col justify-between space-y-6 hover:border-primary/40 transition-colors">
            <div className="space-y-4">
              <div className="flex items-center gap-2">
                <Terminal className="h-4 w-4 text-primary" />
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Diagnostic Sprint
                </span>
              </div>
              <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
                Requirements Elicitation & Architecture Consultation
              </h3>
              <p className="text-foreground/75 text-sm md:text-base font-mono leading-relaxed">
                Eliminate costly architectural guesswork upfront. A focused sprint establishing decoupled system boundaries, data schemas, and build-ready blueprints before development begins.
              </p>
            </div>

            <div>
              <Link
                href="/requirements-elicitation"
                className="inline-flex items-center gap-2 bg-primary/10 text-primary border border-primary/40 hover:bg-primary/20 transition-all font-mono text-xs tracking-widest uppercase px-6 py-3.5 rounded-sm shadow-sm group"
              >
                Explore Consultation
                <ArrowRight className="h-4 w-4 group-hover:translate-x-1 transition-transform" />
              </Link>
            </div>
          </div>

          {/* Card 2: NGO Technical Partner */}
          <div className="p-8 md:p-10 border border-border/50 bg-background/60 rounded-sm flex flex-col justify-between space-y-6 hover:border-primary/40 transition-colors">
            <div className="space-y-4">
              <div className="flex items-center gap-2">
                <Landmark className="h-4 w-4 text-primary" />
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Institutional Governance
                </span>
              </div>
              <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
                NGO Technical Partner & Civic Platforms
              </h3>
              <p className="text-foreground/75 text-sm md:text-base font-mono leading-relaxed">
                Hands-on architectural ownership for donor transparency portals and civic systems. Ensuring multilingual data sovereignty, UN/EU/GIZ compliance, and independent vendor oversight.
              </p>
            </div>

            <div>
              <Link
                href="/ngo-technical-partner"
                className="inline-flex items-center gap-2 bg-primary/10 text-primary border border-primary/40 hover:bg-primary/20 transition-all font-mono text-xs tracking-widest uppercase px-6 py-3.5 rounded-sm shadow-sm group"
              >
                Explore Partnership
                <ArrowRight className="h-4 w-4 group-hover:translate-x-1 transition-transform" />
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
