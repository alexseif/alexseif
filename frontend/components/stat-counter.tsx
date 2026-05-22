"use client";

import { motion } from "framer-motion";

const stats = [
  { count: "3", label: "Sovereign Governments", subtext: "National Systems Built & Hardened" },
  { count: "9", label: "Global Jurisdictions", subtext: "Active Footprint Across 5 Continents" },
  { count: "40M+", label: "Citizens Served", subtext: "High-Concurrency Production Environments" },
  { count: "33%", label: "National Air Travel", subtext: "Throughput Processed via Wallety Gateway" },
  { count: "15,800+", label: "B2B Products Indexed", subtext: "Managed via Custom Symfony Ecosystem" },
  { count: "10+ Yrs", label: "Institutional Custody", subtext: "Continuous Engineering for Heritage Portals" },
];

const fadeInUp = {
  hidden: { opacity: 0, y: 40 },
  visible: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.8, ease: [0.22, 1, 0.36, 1] as any }
  },
};

const stagger = {
  hidden: { opacity: 0 },
  visible: { 
    opacity: 1,
    transition: { staggerChildren: 0.15 } 
  },
};

export function StatCounter() {
  return (
    <section className="py-20 md:py-32 px-6 relative border-t border-border/30 bg-background overflow-hidden">
      {/* Decorative grid lines */}
      <div className="absolute inset-0 pointer-events-none opacity-50">
        <div className="absolute top-1/2 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
        <div className="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
      </div>

      <div className="max-w-6xl mx-auto relative z-10">
        <motion.div
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true, margin: "-100px" }}
          variants={stagger}
          className="space-y-16 md:space-y-24"
        >
          <motion.div variants={fadeInUp} className="text-center space-y-4">
            <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">// Scale & Impact</p>
            <h2 className="text-foreground text-3xl md:text-5xl font-sans font-light tracking-wide">
              Operational Metrics
            </h2>
          </motion.div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16 lg:gap-y-20">
            {stats.map((stat, index) => (
              <motion.div 
                key={index} 
                variants={fadeInUp}
                className="group flex flex-col space-y-5"
              >
                <div className="flex items-center gap-6">
                  <span className="text-6xl md:text-7xl font-sans font-light text-foreground tracking-tighter"
                        style={{ textShadow: "0 4px 24px rgba(184, 134, 11, 0.15)" }}>
                    {stat.count}
                  </span>
                  <div className="h-px flex-1 bg-gradient-to-r from-primary/40 to-transparent group-hover:from-primary transition-colors duration-500" />
                </div>
                
                <div className="space-y-2 border-l border-primary/20 pl-4">
                  <h3 className="text-lg md:text-xl font-sans text-primary tracking-wide">
                    {stat.label}
                  </h3>
                  <p className="text-[11px] md:text-xs text-muted-foreground/80 font-mono tracking-[0.15em] uppercase leading-relaxed">
                    {stat.subtext}
                  </p>
                </div>
              </motion.div>
            ))}
          </div>
        </motion.div>
      </div>
    </section>
  );
}
