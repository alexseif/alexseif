"use client";

import { Footer } from "@/components/Footer";
import { HeroSection } from "@/components/home/HeroSection";
import { StatCounterSection } from "@/components/home/StatCounterSection";
import { TechnicalGridSection } from "@/components/home/TechnicalGridSection";
import { NGOPartnerSection } from "@/components/home/NGOPartnerSection";
import { CaseStudiesSection } from "@/components/home/CaseStudiesSection";
import { PathDiscoverySection } from "@/components/home/PathDiscoverySection";
import { WorldMapSection } from "@/components/home/WorldMapSection";

export default function HomeClient({ eliteProjects }: { eliteProjects: any[] }) {
  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      <HeroSection />
      <StatCounterSection />
      <TechnicalGridSection />
      <NGOPartnerSection />
      <CaseStudiesSection eliteProjects={eliteProjects} />
      <PathDiscoverySection />
      <WorldMapSection />
      <Footer />
    </main>
  );
}
