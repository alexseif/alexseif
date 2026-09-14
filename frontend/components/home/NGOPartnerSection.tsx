import React from "react";
import Link from "next/link";
import { Landmark, ArrowRight } from "lucide-react";

export const NGOPartnerSection = () => {
  return (
    <section className="py-12 px-6 relative bg-card/10 border-t border-border/30">
      <div className="max-w-6xl mx-auto">
        <div className="p-8 md:p-10 border border-border/50 bg-background/60 rounded-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6 hover:border-primary/40 transition-colors">
          <div className="space-y-3 max-w-2xl">
            <div className="flex items-center gap-2">
              <Landmark className="h-4 w-4 text-primary" />
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                Civic & Institutional Platforms // Governance
              </span>
            </div>
            <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
              NGO Technical Partner & Institutional Architecture
            </h3>
            <p className="text-foreground/75 text-sm md:text-base font-mono leading-relaxed">
              Hands-on architectural ownership for donor transparency portals and civic platforms. Ensuring multilingual data sovereignty, UN, EU, and GIZ compliance, and independent vendor oversight.
            </p>
          </div>

          <Link
            href="/ngo-technical-partner"
            className="inline-flex items-center gap-2 shrink-0 bg-primary/10 text-primary border border-primary/40 hover:bg-primary/20 transition-all font-mono text-xs tracking-widest uppercase px-6 py-4 rounded-sm shadow-sm group whitespace-nowrap"
          >
            Explore Partnership
            <ArrowRight className="h-4 w-4 group-hover:translate-x-1 transition-transform" />
          </Link>
        </div>
      </div>
    </section>
  );
};
