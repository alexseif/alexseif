import { getSelectedProjects } from "@/lib/projects";
import { HeroSection } from "@/components/home/HeroSection";
import { StatCounterSection } from "@/components/home/StatCounterSection";
import { CaseStudiesSection } from "@/components/home/CaseStudiesSection";
import { SpecializedOfferingsSection } from "@/components/home/SpecializedOfferingsSection";
import { FloatingActionDock } from "@/components/home/FloatingActionDock";
import { Footer } from "@/components/Footer";

export default async function HomePage() {
  const allSelected = getSelectedProjects();
  // Randomly select 4 projects from the selected projects pool
  const eliteProjects = [...allSelected].sort(() => 0.5 - Math.random()).slice(0, 4);

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Alex Seif",
    "jobTitle": "Software Architect | Full-Stack Engineer",
    "url": "https://alexseif.com",
    "sameAs": [
      "https://github.com/alexseif"
    ],
    "knowsAbout": [
      "Deep-End Enterprise Infrastructures",
      "Digital System Deployments",
      "Legacy Monolith Decoupling",
      "PHP/Symfony",
      "Agentic AI Engineering",
      "Defensive Zero-Maintenance Engineering"
    ]
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />
      <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
        <HeroSection />
        <StatCounterSection />
        <CaseStudiesSection eliteProjects={eliteProjects} />
        <SpecializedOfferingsSection />
        <Footer />
      </main>
      <FloatingActionDock />
    </>
  );
}
