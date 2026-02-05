"use client";

import { motion, useScroll, useTransform, AnimatePresence } from "framer-motion";
import { ArrowRight, Server, Shield, Brain, Terminal, Loader2, Info } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Label } from "@/components/ui/label";
import { RadioGroup, RadioGroupItem } from "@/components/ui/radio-group";
import { Tooltip, TooltipTrigger, TooltipContent } from "@/components/ui/tooltip";
import { useRef, useState } from "react";

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

const API_DIAGNOSTIC = "https://api.alexseif.com/api/diagnostic";

export default function HomePage() {
  const scrollRef = useRef<HTMLDivElement>(null);
  const thankYouRef = useRef<HTMLElement>(null);
  const formSectionRef = useRef<HTMLDivElement>(null);
  const [formOpen, setFormOpen] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [submittedSuccess, setSubmittedSuccess] = useState(false);
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    mobile: "",
    hasCto: "",
    vision: "",
    story: "",
  });
  const [formError, setFormError] = useState<string | null>(null);

  const { scrollYProgress } = useScroll({
    target: scrollRef,
    offset: ["start end", "end start"]
  });
  
  const mapOpacity = useTransform(scrollYProgress, [0, 0.3, 0.7, 1], [0, 1, 1, 0]);
  const mapScale = useTransform(scrollYProgress, [0, 0.5], [0.9, 1]);

  const scrollToThankYou = () => {
    thankYouRef.current?.scrollIntoView({ behavior: "smooth", block: "center" });
  };

  const scrollToForm = () => {
    formSectionRef.current?.scrollIntoView({ behavior: "smooth", block: "center" });
  };

  const handleRequestDiagnosticClick = () => {
    if (formOpen) {
      scrollToForm();
    } else {
      setFormOpen(true);
      setTimeout(scrollToForm, 350);
    }
  };

  const handleDiagnosticSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setFormError(null);
    setIsSubmitting(true);
    try {
      const res = await fetch(API_DIAGNOSTIC, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          name: formData.name,
          email: formData.email,
          mobile: formData.mobile,
          hasCto: formData.hasCto === "yes",
          vision: formData.vision,
          story: formData.story,
        }),
      });
      const json = await res.json().catch(() => ({}));
      if (!res.ok) {
        setFormError(json?.message || "Request failed. Please try again.");
        return;
      }
      setSubmittedSuccess(true);
      setFormOpen(false);
      setTimeout(scrollToThankYou, 400);
    } catch (err) {
      setFormError("Network or CORS error. Please check your connection and try again.");
    } finally {
      setIsSubmitting(false);
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
      <section ref={scrollRef} className="min-h-[150vh] relative py-20 md:py-28">
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
      <section className="py-14 md:py-20 px-6 relative">
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
      <section ref={formSectionRef} className="py-14 md:py-20 px-6 relative">
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

                <div className="text-muted-foreground text-sm md:text-base max-w-xl mx-auto leading-relaxed text-start space-y-4">
                  <p>
                    True digital transformation isn&apos;t a solo sprint; it requires a{" "}
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
                          className="inline-flex size-4 items-center justify-center rounded-full border border-primary/70 bg-card/70 text-primary hover:bg-primary hover:text-primary-foreground transition-colors ms-1"
                          aria-label="What is a Rafiq?"
                        >
                          <Info className="h-3.5 w-3.5" />
                        </button>
                      </TooltipTrigger>
                      <TooltipContent
                        side="top"
                        className="bg-card text-foreground border border-primary/40 shadow-lg space-y-1"
                      >
                        <p className="text-3x1 font-mono text-primary">Rafiq</p>
                        <p className="text-2x1 text-muted-foreground max-w-xs">
                          Someone who walks the path with you.
                        </p>
                      </TooltipContent>
                    </Tooltip>
                  </p>
                  <p>
                    This discovery phase is our handshake—a deliberate intake to identify your ultimate goals and your current
                    state. Together, we map where the friction lies and where the potential is hidden.
                  </p>
                  <p>
                    My mission is to ensure your machine serves your story, not the other way around. After all, the shortest
                    path between two points is a rewarding experience.
                  </p>
                </div>

                <div className="pt-6">
                  <Button 
                    size="lg" 
                    onClick={handleRequestDiagnosticClick}
                    disabled={isSubmitting}
                    className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-sm tracking-wider px-12 py-6 group disabled:opacity-80"
                  >
                    {isSubmitting ? (
                      <>
                        <Loader2 className="mr-3 h-4 w-4 animate-spin" />
                        Sending…
                      </>
                    ) : (
                      <>
                        Client Intake
                        <ArrowRight className="ml-3 h-4 w-4 group-hover:translate-x-1 transition-transform" />
                      </>
                    )}
                  </Button>
                </div>

                {/* Animated Diagnostic Intake Form */}
                <AnimatePresence initial={false}>
                  {formOpen && !submittedSuccess && (
                    <motion.div
                      initial={{ height: 0, opacity: 0 }}
                      animate={{ height: "auto", opacity: 1 }}
                      exit={{ height: 0, opacity: 0 }}
                      transition={{ duration: 0.5, ease: [0.22, 1, 0.36, 1] }}
                      className="overflow-hidden"
                    >
                      <motion.form
                        initial={{ y: 20 }}
                        animate={{ y: 0 }}
                        transition={{ delay: 0.15, duration: 0.4 }}
                        onSubmit={handleDiagnosticSubmit}
                        className="mt-6 pt-6 border-t border-border/60 rounded-lg bg-background/40 backdrop-blur-sm border border-primary/10 shadow-[0_0_24px_rgba(184,134,11,0.06)] space-y-4 p-4 md:p-6 text-left"
                      >
                        <p className="text-primary text-xs tracking-[0.3em] uppercase font-mono mb-1">
                          Partner Discovery Intake
                        </p>
                        <p className="text-muted-foreground text-sm leading-relaxed mb-4">
                          Welcome, esteemed guest. Share a few details so we can understand your current state and where you
                          want to go.
                        </p>
                        <div className="space-y-2">
                          <Label htmlFor="diagnostic-name" className="text-foreground/90 text-sm font-mono tracking-wider">
                            Name
                          </Label>
                          <Input
                            id="diagnostic-name"
                            type="text"
                            value={formData.name}
                            onChange={(e) => setFormData((d) => ({ ...d, name: e.target.value }))}
                            placeholder="Your name"
                            className="bg-transparent border-border/70 focus-visible:border-primary/60 focus-visible:ring-primary/20 rounded-sm transition-colors"
                            required
                          />
                        </div>
                        <div className="space-y-2">
                          <Label htmlFor="diagnostic-email" className="text-foreground/90 text-sm font-mono tracking-wider">
                            Email
                          </Label>
                          <Input
                            id="diagnostic-email"
                            type="email"
                            value={formData.email}
                            onChange={(e) => setFormData((d) => ({ ...d, email: e.target.value }))}
                            placeholder="you@example.com"
                            className="bg-transparent border-border/70 focus-visible:border-primary/60 focus-visible:ring-primary/20 rounded-sm transition-colors"
                            required
                          />
                        </div>
                        <div className="space-y-2">
                          <Label htmlFor="diagnostic-mobile" className="text-foreground/90 text-sm font-mono tracking-wider">
                            Mobile
                          </Label>
                          <Input
                            id="diagnostic-mobile"
                            type="tel"
                            value={formData.mobile}
                            onChange={(e) => setFormData((d) => ({ ...d, mobile: e.target.value }))}
                            placeholder="+20 123 456 7890"
                            className="bg-transparent border-border/70 focus-visible:border-primary/60 focus-visible:ring-primary/20 rounded-sm transition-colors"
                            required
                          />
                        </div>
                        <div className="space-y-3 rounded-md border border-border/70 bg-background/60 px-4 py-3">
                          <Label
                            htmlFor="diagnostic-has-cto"
                            className="text-foreground/90 text-sm font-mono tracking-wider"
                          >
                            Does your firm currently have a CTO or CIO?
                          </Label>
                          <p className="text-xs text-muted-foreground/80 font-mono tracking-wider">
                            This calibrates whether we approach your diagnostic as an operational refinement or a first
                            principles redesign.
                          </p>
                          <RadioGroup
                            id="diagnostic-has-cto"
                            value={formData.hasCto}
                            onValueChange={(value) => setFormData((d) => ({ ...d, hasCto: value }))}
                            className="mt-2 grid grid-cols-2 gap-3 md:max-w-xs"
                          >
                            <label className="flex items-center gap-2 rounded-md border border-border/70 bg-background/80 px-3 py-2 text-sm cursor-pointer hover:border-primary/70 hover:bg-card/40 transition-colors">
                              <RadioGroupItem value="yes" aria-label="Yes" />
                              <span className="font-mono tracking-wider">Yes</span>
                            </label>
                            <label className="flex items-center gap-2 rounded-md border border-border/70 bg-background/80 px-3 py-2 text-sm cursor-pointer hover:border-primary/70 hover:bg-card/40 transition-colors">
                              <RadioGroupItem value="no" aria-label="No" />
                              <span className="font-mono tracking-wider">No</span>
                            </label>
                          </RadioGroup>
                        </div>
                        <div className="space-y-2">
                          <Label htmlFor="diagnostic-vision" className="text-foreground/90 text-sm font-mono tracking-wider">
                            Your Vision
                          </Label>
                          <Input
                            id="diagnostic-vision"
                            value={formData.vision}
                            onChange={(e) => setFormData((d) => ({ ...d, vision: e.target.value }))}
                            placeholder='Focuses on the "Upscale" — where we are going. What is the goal for your business or life?'
                            className="bg-transparent border-border/70 focus-visible:border-primary/60 focus-visible:ring-primary/20 rounded-sm transition-colors"
                            required
                          />
                        </div>
                        <div className="space-y-2">
                          <Label htmlFor="diagnostic-story" className="text-foreground/90 text-sm font-mono tracking-wider">
                            The Story
                          </Label>
                          <Textarea
                            id="diagnostic-story"
                            value={formData.story}
                            onChange={(e) => setFormData((d) => ({ ...d, story: e.target.value }))}
                            placeholder='Focuses on the "Rescue" — the friction we are removing so your story can be told clearly.'
                            rows={4}
                            className="bg-transparent border-border/70 focus-visible:border-primary/60 focus-visible:ring-primary/20 rounded-sm transition-colors min-h-[100px] resize-y"
                            required
                          />
                        </div>
                        {formError && (
                          <p className="text-destructive text-sm font-mono">{formError}</p>
                        )}
                        <div className="flex gap-4 pt-2">
                          <Button
                            type="submit"
                            disabled={isSubmitting}
                            className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-sm tracking-wider px-8"
                          >
                            {isSubmitting ? (
                              <Loader2 className="h-4 w-4 animate-spin" />
                            ) : (
                              "Send"
                            )}
                          </Button>
                          <Button
                            type="button"
                            variant="outline"
                            onClick={() => setFormOpen(false)}
                            disabled={isSubmitting}
                            className="font-mono text-sm tracking-wider border-border/70"
                          >
                            Cancel
                          </Button>
                        </div>
                      </motion.form>
                    </motion.div>
                  )}
                </AnimatePresence>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Thank You (only after diagnostic submit) */}
      {submittedSuccess && (
        <section
          ref={thankYouRef}
          id="thank-you"
          className="min-h-[60vh] py-14 md:py-20 px-6 flex flex-col items-center justify-center relative"
        >
          <motion.div
            initial={{ opacity: 0, y: 40 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, ease: [0.22, 1, 0.36, 1] }}
            className="text-center max-w-2xl space-y-8"
          >
            <div className="flex justify-center">
              <div className="w-12 h-px bg-primary/50" />
              <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono mx-4">
                Diagnostic Submitted
              </span>
              <div className="w-12 h-px bg-primary/50" />
            </div>
            <h2 className="text-foreground text-3xl md:text-5xl font-sans font-light tracking-wide">
              Thank you.
            </h2>
            <p className="text-muted-foreground text-base md:text-lg leading-relaxed">
              Your diagnostic request has been received. The story continues—we&apos;ll be in touch with next steps.
            </p>
          </motion.div>
        </section>
      )}

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
