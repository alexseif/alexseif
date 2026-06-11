"use client";

import Link from "next/link";
import { motion, useScroll, useTransform } from "framer-motion";
import { MapPin, Mail, ArrowRight, Activity, Terminal, Shield, Workflow, Cpu, MessageSquare, Briefcase, FileCode2, Server, Brain, Info, Phone } from "lucide-react";
import { Footer } from "@/components/Footer";
import { Button } from "@/components/ui/button";
import { Tooltip, TooltipTrigger, TooltipContent } from "@/components/ui/tooltip";
import { StatCounter } from "@/components/stat-counter";
import { useRef } from "react";

const fadeInUp = {
  hidden: { opacity: 0, y: 60 },
  visible: {
    opacity: 1,
    y: 0,
    transition: { duration: 1, ease: [0.22, 1, 0.36, 1] as any }
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


export default function HomeClient({ eliteProjects }: { eliteProjects: any[] }) {
  const scrollRef = useRef<HTMLDivElement>(null);
  const { scrollY } = useScroll();

  const { scrollYProgress } = useScroll({
    target: scrollRef,
    offset: ["start end", "end start"]
  });

  const mapOpacity = useTransform(scrollYProgress, [0, 0.3, 0.7, 1], [0, 1, 1, 0]);
  const mapScale = useTransform(scrollYProgress, [0, 0.5], [0.9, 1]);
  const footerOpacity = useTransform(scrollY, [400, 600], [0, 1]);
  const footerY = useTransform(scrollY, [400, 600], [50, 0]);
  const footerScale = useTransform(scrollY, [400, 600], [0.95, 1]);

  const openCalendly = (e?: React.MouseEvent) => {
    e?.preventDefault();
    if ((window as any).Calendly) {
      (window as any).Calendly.initPopupWidget({
        url: "https://calendly.com/alex-seif/path-discovery",
      });
    }
    return false;
  };

  const handleContact = (e: React.MouseEvent, type: 'email' | 'whatsapp') => {
    e.preventDefault();
    // Simple bot protection: string reconstruction
    if (type === 'email') {
      const user = "alex.seif";
      const domain = "gmail.com";
      window.location.href = `mailto:${user}@${domain}`;
    } else {
      const country = "20";
      const rest = "1004006332";
      window.open(`https://wa.me/${country}${rest}`, '_blank');
    }
  };

  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      {/* Section 1: The Creed (Hero) */}
      <section className="min-h-screen flex flex-col items-center justify-center px-6 relative pt-28 pb-16">
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
              className="font-serif text-4xl md:text-5xl lg:text-6xl text-primary/90 leading-tight"
              style={{
                fontFamily: "var(--font-arabic)",
                fontWeight: 700,
                textShadow: "0 0 8px rgba(184, 134, 11, 0.35)"
              }}
              dir="rtl"
            >
              أهلاً و سهلاً
            </p>
            <p className="text-foreground/70 tracking-[0.4em] uppercase font-sans">
              Welcome
            </p>
          </motion.div>

          {/* Name & Title */}
          <motion.div variants={fadeInUp} className="space-y-3 pt-8">
            <div className="flex items-center justify-center gap-4 mb-12">
              <div className="h-px w-12 bg-primary/50" />
              <h1 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
                ALEX SEIF
              </h1>
              <div className="h-px w-12 bg-primary/50" />
            </div>
            <p className="text-foreground/70 text-md tracking-[0.3em] uppercase">
              Software Architect <br />
              Technical Partner <br />
              Author
            </p>
          </motion.div>  <
            motion.div variants={fadeInUp} className="space-y-3 pt-8">
            <div className="flex items-center justify-center gap-4 mb-12">
              <p className="text-foreground/70 text-md tracking-[0.15em] ">
                Because of <strong className="text-primary">20+ yrs</strong> building the web;<br />
                Realize that most problems are very simple;<br />
                Imagine solutions that are also very simple;<br />
                And so Remember the most valuable things in life<br />
                become the most simple things.
              </p>
            </div>
          </motion.div>

          {/* Contact Links */}
          <motion.div variants={fadeInUp} className="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 pt-2">
            <button
              onClick={(e) => handleContact(e, 'email')}
              className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            >
              <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
                <Mail className="h-3.5 w-3.5" />
              </div>
              <span className="text-md font-mono tracking-[0.2em] uppercase">Email</span>
            </button>
            <button
              onClick={(e) => handleContact(e, 'whatsapp')}
              className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            >
              <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
                <MessageSquare className="h-3.5 w-3.5" />
              </div>
              <span className="text-md font-mono tracking-[0.2em] uppercase">WhatsApp</span>
            </button>
            <button
              onClick={() => document.getElementById('path-discovery')?.scrollIntoView({ behavior: 'smooth' })}
              className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            >
              <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
                <ArrowRight className="h-3.5 w-3.5 rotate-90 sm:rotate-0" />
              </div>
              <span className="text-md font-mono tracking-[0.2em] uppercase">Path Discovery</span>
            </button>
          </motion.div>

          {/* Scroll indicator */}
          <motion.div
            variants={fadeInUp}
            className="pt-16 flex flex-col items-center gap-3"
          >
            <span className="text-xs text-foreground/70 tracking-[0.3em] uppercase">Scroll</span>
            <div className="w-px h-16 bg-gradient-to-b from-primary/60 to-transparent" />
          </motion.div>
        </motion.div>
      </section>


      {/* Section 2: The Pedigree (World Map Scroll) */}
      <section ref={scrollRef} className="min-h-[70vh] md:min-h-[100vh] relative py-20pb-28">

        <div className="sticky top-0 h-[40vh] md:h-[70vh] flex items-center justify-center px-6">
          <motion.div
            style={{ opacity: mapOpacity, scale: mapScale }}
            className="max-w-5xl w-full relative"
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
                  stroke="rgba(184, 134, 11, 2)"
                  strokeWidth="0.15"
                  strokeDasharray="1,1"
                />
              </svg>

              {/* Country labels */}
              <div className="absolute inset-0">
                {countries.map((country) => (
                  <div
                    key={country.code}
                    className="absolute text-xs text-primary/70 font-mono tracking-wider opacity-0 md:opacity-100"
                    style={{
                      left: `${country.x}%`,
                      top: `${country.y}%`,
                      transform: 'translate(50%, 150%)'
                    }}
                    title={country.name}
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
              <h3 className="text-foreground text-1xl md:text-2xl tracking-[0.2em] font-sans font-light uppercase">
                Executed <strong className="text-primary">globally</strong>; <br /> Realised by <strong className="text-primary">precision</strong>;
              </h3>
              {/* <p className="text-foreground/70 text-base md:text-lg max-w-2xl mx-auto"> */}
              {/* <strong>Realise</strong> what happens when you possess a definitive edge. From the GCC to North America, I forge alliances with elite founders. We engineer systems where failure carries material cost, securing dominance across every jurisdiction. */}
              {/* </p> */}
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Stat Counter Component */}
      <StatCounter />

      {/* Section 3: The Offering (Technical Stack Grid) */}
      <section className="py-20 px-6 relative">
        <div className="max-w-6xl mx-auto">
          <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true, margin: "-100px" }}
            variants={stagger}
            className="space-y-20"
          >
            <motion.div variants={fadeInUp} className="text-center space-y-4">
              <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">// Foundation</p>
              <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
                Technical Partner
              </h2>
            </motion.div>

            {/* Technical Grid */}
            <motion.div variants={fadeInUp} className="grid md:grid-cols-3 gap-px bg-border">
              {/* The Core Architecture */}
              <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
                <div className="flex items-center gap-4">
                  <Server className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">01</span>
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                  Foundation
                </h3>
                <p className="text-foreground/90 leading-relaxed">
                  The foundation of your digital authority. <strong className="text-primary">Remember</strong>, true resilience is engineered, not assumed. We forge structures that deliver absolute operational invulnerability.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["Trust", "Foundation", "Mastery"].map((tech) => (
                    <span key={tech} className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>

              {/* The Organic Architecture */}
              <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
                <div className="flex items-center gap-4">
                  <Shield className="h-5 w-5 text-primary" />
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">02</span>
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                  Grow
                </h3>
                <p className="text-foreground/90 leading-relaxed">
                  Semantic and GEO-spatial intelligence. <strong className="text-primary">Become</strong> omnipresent. We engineer for definitive ecosystem dominance, ensuring your narrative commands global networks.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["SEO", "Semantic", "Dominance"].map((tech) => (
                    <span key={tech} className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1">
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
                  Intelligence
                </h3>
                <p className="text-foreground/90 leading-relaxed">
                  <strong className="text-primary">Imagine</strong> problem resolution and requirement extraction. We weaponize AI only where it creates asymmetrical leverage and undisputed strategic advantage.
                </p>
                <div className="pt-4 flex flex-wrap gap-2">
                  {["AI/ML", "Strategy", "Leverage"].map((tech) => (
                    <span key={tech} className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1">
                      {tech}
                    </span>
                  ))}
                </div>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      <section id="path-discovery" className="py-14 md:py-20 px-6 relative">

        <div className="max-w-3xl mx-auto">
          <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true, margin: "-100px" }}
            variants={stagger}
          >
            <motion.div
              variants={fadeInUp}
              className="relative border border-border bg-card/30 p-6 md:p-10 overflow-hidden"
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

                <h3 className="text-foreground text-2xl md:text-4xl font-sans font-light tracking-wide flex flex-col items-center gap-2">
                  <span>Path Discovery</span>
                  <div className="flex items-center gap-2">
                    <span
                      className="text-primary text-2xl md:text-4xl"
                      style={{ fontFamily: "var(--font-arabic)", letterSpacing: "0.08em" }}
                    >
                      تَعَارُف المَسَار
                    </span>
                  </div>
                </h3>

                <div className="text-foreground/70  md:text-base max-w-xl mx-auto leading-relaxed text-start space-y-4">
                  <p>
                    True dominion over your infrastructure requires a partner {" "}
                    <span
                      className="text-primary text-2xl md:text-3xl"
                      style={{ fontFamily: "var(--font-arabic)" }}
                    >
                      رَفِيق
                    </span>
                    .<Tooltip>
                      <TooltipTrigger asChild>
                        <button
                          type="button"
                          onClick={(e) => e.preventDefault()}
                          onTouchStart={(e) => e.currentTarget.focus()}
                          className="inline-flex size-4 items-center justify-center rounded-full border border-primary/70 bg-card/70 text-primary hover:bg-primary hover:text-primary-foreground transition-colors ms-1 cursor-help md:cursor-pointer"
                          aria-label="What is a Rafiq?"
                        >
                          <Info className="h-3.5 w-3.5" />
                        </button>
                      </TooltipTrigger>
                      <TooltipContent
                        side="top"
                        className="bg-card text-foreground border border-primary/40 shadow-lg space-y-1"
                      >
                        <p className="text-3xl font-mono text-primary">Rafiq</p>
                        <p className="text-sm text-foreground/70 max-w-xs">
                          Someone who walks the path with you.
                        </p>
                      </TooltipContent>
                    </Tooltip>
                  </p>
                  <p>
                    This discovery phase is not a pitch&mdash;it is a deliberate extraction of your ultimate objectives. Together, we isolate the friction and expose hidden leverage.
                  </p>
                  <p>
                    My mandate is to ensure your machine serves your empire. <strong>Because</strong> the shortest path between vision and reality is a guided ascent.
                  </p>
                </div>
                <div className="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                  <Button
                    onClick={openCalendly}
                    size="lg"
                    className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-sm tracking-wider px-12 py-6 group disabled:opacity-80 w-full sm:w-auto"
                  >
                    Path Discovery
                    <ArrowRight className="ml-3 h-4 w-4 group-hover:translate-x-1 transition-transform" />
                  </Button>
                </div>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Section 4: Vault Filter / Case Studies */}
      <section className="py-20 px-6 relative border-t border-border/30 bg-card/10">
        <div className="max-w-6xl mx-auto">
          <motion.div
            initial="hidden"
            whileInView="visible"
            viewport={{ once: true, margin: "-100px" }}
            variants={stagger}
            className="space-y-12"
          >
            <motion.div variants={fadeInUp} className="space-y-4">
              <div className="flex items-center gap-4">
                <Terminal className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono">System Logs</span>
              </div>
              <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
                Elite Deep-Dives
              </h2>
              <p className="text-foreground/70 max-w-2xl leading-relaxed">
                Raw engineering validation. Select a project dossier to examine the architectural identity, technical stack, and engagement type of our premier deployments.
              </p>
            </motion.div>

            <motion.div variants={fadeInUp} className="grid grid-cols-1 md:grid-cols-2 gap-4">
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
            </motion.div>

            <motion.div variants={fadeInUp} className="flex justify-center pt-8">
              <Link href="/case-studies">
                <Button
                  variant="outline"
                  className="font-mono text-xs tracking-widest uppercase border-primary/30 text-foreground hover:bg-primary/10 hover:text-primary transition-all px-8 py-6 rounded-sm"
                >
                  Access Complete Vault
                </Button>
              </Link>
            </motion.div>
          </motion.div>
        </div>
      </section>

      <Footer />
      {/* Sticky Scroll Footer */}
      <motion.div
        style={{
          opacity: footerOpacity,
          y: footerY,
          scale: footerScale,
        }}
        className="fixed bottom-8 left-0 right-0 z-50 flex justify-center px-4 pointer-events-none"
      >
        <div className="max-w-xl w-full bg-background/60 backdrop-blur-xl border border-primary/20 rounded-full px-6 py-4 shadow-[0_0_30px_rgba(0,0,0,0.5)] flex items-center justify-between gap-4 pointer-events-auto relative overflow-hidden group">
          {/* Subtle blueprint grid effect for the footer */}
          <div className="absolute inset-0 opacity-10 pointer-events-none blueprint-grid" />

          <div className="flex flex-col min-w-0 relative z-10">
            <span className="text-[10px] text-primary/60 font-mono tracking-[0.2em] uppercase mb-0.5">Navigation // Intake</span>
            <h4 className="text-foreground text-xs md:text-sm font-sans font-light tracking-wide truncate">
              The Path Discovery: Client intake
            </h4>
          </div>

          <Button
            onClick={openCalendly}
            size="sm"
            className="rounded-full bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-[10px] tracking-widest uppercase h-9 has-[>svg]:px-5 px-5 shrink-0 relative z-10"
          >
            Path Discovery
            <ArrowRight className="ml-2 h-3.5 w-3.5" />
          </Button>
        </div>
      </motion.div>

      {/* Minimalist Scroll Trigger for Resume */}
      <motion.div
        style={{
          opacity: footerOpacity,
        }}
        className="fixed bottom-8 right-8 z-40 pointer-events-auto hidden lg:block"
      >
        <Link
          href="/resume"
          className="font-mono text-[10px] tracking-widest uppercase text-foreground/40 hover:text-primary transition-colors bg-background/50 hover:bg-card/80 backdrop-blur px-3 py-2 border border-border/50 rounded-sm"
        >
          [ Alex Seif Resume.pdf ]
        </Link>
      </motion.div>
    </main >
  );
}
