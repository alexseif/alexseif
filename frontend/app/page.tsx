import HomeClient from "./HomeClient";
import { getSelectedProjects } from "@/lib/projects";

export default async function HomePage() {
  const allSelected = getSelectedProjects();
  // Randomly select 4 projects from the selected projects pool
  const eliteProjects = [...allSelected].sort(() => 0.5 - Math.random()).slice(0, 4);

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Alex Seif",
    "jobTitle": "Software Architect & NGO Technical Partner",
    "url": "https://alexseif.com",
    "sameAs": [
      "https://github.com/alexseif"
    ],
    "knowsAbout": ["Deep-End Enterprise Infrastructures", "Digital System Deployments", "Legacy Monolith Decoupling", "PHP/Symfony", "Agentic AI Engineering", "Defensive Zero-Maintenance Engineering"]
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />
      <HomeClient eliteProjects={eliteProjects} />
    </>
  );
}
