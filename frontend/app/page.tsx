"use client";

import { motion, useScroll, useTransform } from "framer-motion";
import { ArrowRight, Server, Shield, Brain, Terminal } from "lucide-react";
import { Button } from "@/components/ui/button";
import { useRef } from "react";

const fadeInUp = {
  hidden: { opacity: 0, y: 60 },
  visible: { 
    opacity: 1, 
    y: 0, 
    transition: { duration: 1, ease: [0.22, 1, 0.36, 1] } 
  },
};

const stagger = {
  visible: { transition: { staggerChildren: 0.2 } },
};

const countries = [
  { name: "Egypt", code: "EG", x: 53, y: 38 },
  { name: "UAE", code: "AE", x: 58, y: 42 },
  { name: "KSA", code: "SA", x: 55, y: 42 },
  { name: "Russia", code: "RU", x: 65, y: 25 },
  { name: "Spain", code: "ES", x: 45, y: 35 },
  { name: "Greece", code: "GR", x: 50, y: 35 },
  { name: "Kuwait", code: "KW", x: 56, y: 40 },
];

export default function HomePage() {
  const scrollRef = useRef<HTMLDivElement>(null);
  const { scrollYProgress } = useScroll({
    target: scrollRef,
    offset: ["start end", "end start"]
  });
  
  const mapOpacity = useTransform(scrollYProgress, [0, 0.3, 0.7, 1], [0, 1, 1, 0]);
  const mapScale = useTransform(scrollYProgress, [0, 0.5], [0.9, 1]);

  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      {/* Section 1: The Creed (Hero) */}
      <section className="min-h-screen flex flex-col items-center justify-center px-6 relative">
        {/* Decorative grid lines */}
        <div className="absolute inset-0 overflow-hidden pointer-events-none">
          <div className="absolute top-1/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
          <div className="absolute top-3/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
          <div className="absolute left-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
          <div className="absolute right-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
        </div>

        <motion.div
          initial="hidden"
          animate="visible"
          variants={stagger}
          className="text-center space-y-10 max-w-4xl relative z-10"
        >
          {/* Arabic Creed */}
          <motion.div variants={fadeInUp} className="space-y-6">
            <p 
              className="font-serif text-5xl md:text-7xl lg:text-8xl text-primary leading-tight"
              style={{ 
                fontFamily: "var(--font-arabic)",
                fontWeight: 700,
                textShadow: "0 0 8px rgba(184, 134, 11, 0.35)"
              }}
              dir="rtl"
            >
              مَنْ ارْتَضَى الأَجْرَ أَحْسَنَ العَمَلَ
            </p>
            <p className="text-muted-foreground text-sm md:text-base tracking-[0.4em] uppercase font-sans">
              He who accepts the fee, must perfect the work.
            </p>
          </motion.div>

          {/* Name & Title */}
          <motion.div variants={fadeInUp} className="space-y-3 pt-8">
            <div className="flex items-center justify-center gap-4">
              <div className="h-px w-12 bg-primary/50" />
              <h1 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light">
                ALEX SEIF
              </h1>
              <div className="h-px w-12 bg-primary/50" />
            </div>
            <p className="text-muted-foreground text-sm tracking-[0.3em] uppercase">
              Software Architect
            </p>
          </motion.div>

          {/* Tagline */}
          <motion.p 
            variants={fadeInUp} 
            className="text-muted-foreground text-base md:text-lg font-sans max-w-xl mx-auto"
          >
            Designing and operating mission-critical systems for over 20 years.
          </motion.p>

          {/* Scroll indicator */}
          <motion.div
            variants={fadeInUp}
            className="pt-16 flex flex-col items-center gap-3"
          >
            <span className="text-xs text-muted-foreground/60 tracking-[0.3em] uppercase">Scroll</span>
            <div className="w-px h-16 bg-gradient-to-b from-primary/60 to-transparent" />
          </motion.div>
        </motion.div>
      </section>

      {/* Section 2: The Pedigree (World Map Scroll) */}
      <section ref={scrollRef} className="min-h-[150vh] relative py-32">
        <div className="sticky top-0 h-screen flex items-center justify-center px-6">
          <motion.div 
            style={{ opacity: mapOpacity, scale: mapScale }}
            className="max-w-6xl w-full relative"
          >
            {/* World Map SVG */}
            <div className="relative w-full aspect-[2/1] bg-card/30 border border-border/50 rounded overflow-hidden">
              {/* Simplified world map outline */}
              <svg 
                viewBox="0 0 100 50" 
                className="w-full h-full"
                preserveAspectRatio="xMidYMid meet"
              >
                {/* Continents simplified paths */}
                <path 
                  d="M15,20 Q20,15 30,18 T45,15 Q50,12 55,15 T70,18 Q75,20 80,18 M10,25 Q15,22 25,25 T40,22 M50,25 Q55,22 65,25 T80,22 M20,30 Q30,28 40,32 M55,30 Q65,28 75,32 M25,35 Q35,33 45,38 M60,35 Q70,33 78,38"
                  fill="none"
                  stroke="rgba(184, 134, 11, 0.15)"
                  strokeWidth="0.3"
                />
                
                {/* Country pulse points */}
                {countries.map((country, index) => (
                  <g key={country.code}>
                    {/* Outer pulse ring */}
                    <circle 
                      cx={country.x} 
                      cy={country.y} 
                      r="1"
                      fill="none"
                      stroke="rgba(184, 134, 11, 0.4)"
                      strokeWidth="0.2"
                      className="animate-pulse-ring"
                      style={{ animationDelay: `${index * 0.3}s` }}
                    />
                    {/* Core point */}
                    <circle 
                      cx={country.x} 
                      cy={country.y} 
                      r="0.5"
                      fill="#B8860B"
                    />
                  </g>
                ))}

                {/* Connection lines */}
                <path 
                  d="M53,38 L58,42 M53,38 L55,42 M53,38 L65,25 M53,38 L45,35 M53,38 L50,35 M53,38 L56,40"
                  fill="none"
                  stroke="rgba(184, 134, 11, 0.2)"
                  strokeWidth="0.15"
                  strokeDasharray="1,1"
                />
              </svg>

              {/* Country labels */}
              <div className="absolute inset-0">
                {countries.map((country) => (
                  <div
                    key={country.code}
                    className="absolute text-xs text-primary/70 font-mono tracking-wider"
                    style={{ 
                      left: `${country.x}%`, 
                      top: `${country.y}%`,
                      transform: 'translate(-50%, 150%)'
                    }}
                  >
                    {country.code}
                  </div>
                ))}
              </div>
            </div>

            {/* Text overlay */}
            <motion.div 
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 1, delay: 0.3 }}
              viewport={{ once: true }}
              className="text-center mt-12 space-y-6"
            >
              <h2 className="text-foreground text-2xl md:text-4xl font-sans font-light tracking-wide">
                Applied across eight countries, always to specification.
              </h2>
              <p className="text-muted-foreground text-base md:text-lg max-w-2xl mx-auto">
                Experience spans Egypt, UAE, KSA, Russia, Spain, Greece, and Kuwait—systems where failure has material cost.
              </p>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Section 3: The Offering (Technical Stack Grid) */}
      <section className="py-32 px-6 relative">
        <div className="max-w-6xl mx-auto">
          <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true, margin: "-100px" }}
            variants={stagger}
            className="space-y-20"
          >
            <motion.div variants={fadeInUp} className="text-center space-y-4">
              <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">// The Stack</p>
              <h2 className="text-foreground text-3xl md:text-5xl font-sans font-light tracking-wide">
                Technical Specifications
              </h2>
            </motion.div>

            {/* Technical Grid */}
            <motion.div variants={fadeInUp} className="grid md:grid-cols-3 gap-px bg-border">
              {/* Architectural Build */}
              <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
                <div className="flex items-center gap-4">
                  <Server className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">01</span>
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                  Architectural Build
                </h3>
                <p className="text-muted-foreground text-sm leading-relaxed">
                  Custom web platforms using Next.js, Symfony, and PHP, with architecture engineered for scale, security, and operational clarity.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["Next.js", "Symfony", "PHP"].map((tech) => (
                    <span key={tech} className="text-xs text-muted-foreground/60 font-mono border border-border/50 px-2 py-1">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>

              {/* Mission Critical Stack */}
              <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
                <div className="flex items-center gap-4">
                  <Shield className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">02</span>
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                  Mission Critical Stack
                </h3>
                <p className="text-muted-foreground text-sm leading-relaxed">
                  Hardened DevOps workflows and private infrastructure on Digital Ocean, 
                  designed for 99.9% uptime under realistic production workloads.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["DevOps", "DO", "99.9%"].map((tech) => (
                    <span key={tech} className="text-xs text-muted-foreground/60 font-mono border border-border/50 px-2 py-1">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>

              {/* The Intelligence Layer */}
              <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
                <div className="flex items-center gap-4">
                  <Brain className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">03</span>
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                  The Intelligence Layer
                </h3>
                <p className="text-muted-foreground text-sm leading-relaxed">
                  AI integration with explicit data residency and governance controls—your models, your data, 
                  deployed on infrastructure you control.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["AI/ML", "Data", "Sovereignty"].map((tech) => (
                    <span key={tech} className="text-xs text-muted-foreground/60 font-mono border border-border/50 px-2 py-1">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Section 4: The Diagnostic (Entry Point) */}
      <section className="py-32 px-6 relative">
        <div className="max-w-3xl mx-auto">
          <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true, margin: "-100px" }}
            variants={stagger}
          >
            <motion.div 
              variants={fadeInUp}
              className="relative border border-border bg-card/30 p-12 md:p-16"
            >
              {/* Corner accents */}
              <div className="absolute top-0 left-0 w-8 h-8 border-t border-l border-primary" />
              <div className="absolute top-0 right-0 w-8 h-8 border-t border-r border-primary" />
              <div className="absolute bottom-0 left-0 w-8 h-8 border-b border-l border-primary" />
              <div className="absolute bottom-0 right-0 w-8 h-8 border-b border-r border-primary" />

              <div className="text-center space-y-8">
                <div className="flex items-center justify-center gap-4">
                  <Terminal className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono">Entry Point</span>
                </div>

                <h3 className="text-foreground text-2xl md:text-4xl font-sans font-light tracking-wide">
                  Digital Audit &<br />Performance Diagnostic
                </h3>

                <p className="text-muted-foreground text-sm md:text-base max-w-lg mx-auto leading-relaxed">
                  Structured analysis of your current digital infrastructure: architecture, deployment, observability, and failure modes. 
                  The output is a written technical report with concrete remediation steps and trade-offs.
                </p>

                <div className="pt-4">
                  <p className="text-primary text-3xl md:text-4xl font-mono tracking-wider">
                    9,000 <span className="text-lg">EGP</span>
                  </p>
                </div>

                <div className="pt-6">
                  <Button 
                    size="lg" 
                    className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-sm tracking-wider px-12 py-6 group"
                  >
                    Request Diagnostic
                    <ArrowRight className="ml-3 h-4 w-4 group-hover:translate-x-1 transition-transform" />
                  </Button>
                </div>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Footer */}
      <footer className="py-16 px-6 border-t border-border/30">
        <div className="max-w-6xl mx-auto">
          <div className="flex flex-col md:flex-row justify-between items-center gap-8">
            <div className="text-center md:text-left">
              <p 
                className="font-serif text-2xl text-primary"
                style={{ fontFamily: "var(--font-arabic)" }}
              >
                أ. س.
              </p>
              <p className="text-muted-foreground text-xs mt-2 tracking-wider uppercase">
                Alex Seif
              </p>
            </div>
            
            <div className="flex items-center gap-8 text-xs text-muted-foreground/60 font-mono">
              <span>EG</span>
              <span>AE</span>
              <span>SA</span>
              <span>RU</span>
              <span>ES</span>
              <span>GR</span>
              <span>KW</span>
            </div>
            
            <p className="text-muted-foreground/40 text-xs font-mono">
              © MMXXVI
            </p>
          </div>
        </div>
      </footer>
    </main>
  );
}
