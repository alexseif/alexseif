import HomeClient from "./HomeClient";
import { getAllProjects } from "@/lib/projects";

export default async function HomePage() {
  const allProjects = getAllProjects();

  // Highlighted enterprise deep-dives as per blueprint
  const eliteSlugs = [
    "2020-moi-egypt-traffic",
    "2020-salama",
    "2021-saso",
    "2020-dubai-police-academy",
    "2009-wallety"
  ];

  const eliteProjects = allProjects.filter((p) => eliteSlugs.includes(p.slug));

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Alex Seif",
    "jobTitle": "Principal Engineer & NGO Technical Partner",
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
