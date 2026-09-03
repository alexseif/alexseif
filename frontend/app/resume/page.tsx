import fs from "fs";
import path from "path";
import matter from "gray-matter";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Seif | Software Architect & Full-Stack Developer - Resume",
  description:
    "Resume of Alex Seif, Software Architect & Full-Stack Developer specializing in high-concurrency PHP/Symfony, Drupal, WordPress, PostgreSQL/PostGIS, and zero-downtime database optimization.",
  alternates: {
    canonical: "/resume",
  },
};

import PrintButton from "./PrintButton";
import ReactMarkdown from "react-markdown";
import remarkGfm from "remark-gfm";

// Recursively extract plain text from any React node tree.
function flattenChildren(node: React.ReactNode): string {
  if (typeof node === "string" || typeof node === "number") return String(node);
  if (Array.isArray(node)) return node.map(flattenChildren).join("");
  if (node && typeof node === "object" && "props" in node) {
    return flattenChildren((node as any).props.children);
  }
  return "";
}

function parseResumeContent(content: string) {
  const sections = content.split(/(?=^## )/m);

  let summary = "";
  let stack = "";
  let portfolio = "";
  let experience = "";
  let credentials = "";

  sections.forEach((section) => {
    const trimmed = section.replace(/---\s*$/, "").trim();
    if (trimmed.match(/^## Professional (Summary|Profile)/i)) {
      summary = trimmed.replace(/^## Professional (Summary|Profile)/mi, "").replace(/---\s*$/, "").trim();
    } else if (trimmed.match(/^## Technical Stack/i)) {
      stack = trimmed.replace(/^## Technical Stack.*$/mi, "").replace(/---\s*$/, "").trim();
    } else if (
      trimmed.match(/^## (Featured Architectural Engagements|Selected Architectural Engagements|Architecture Portfolio)/i)
    ) {
      portfolio = trimmed
        .replace(/^## (Featured Architectural Engagements|Selected Architectural Engagements|Architecture Portfolio).*$/mi, "")
        .replace(/---\s*$/, "")
        .trim();
    } else if (trimmed.match(/^## Professional Experience/i)) {
      experience = trimmed.replace(/^## Professional Experience/mi, "").replace(/---\s*$/, "").trim();
    } else if (trimmed.match(/^## Education/i)) {
      credentials = trimmed.replace(/^## Education.*$/mi, "").replace(/---\s*$/, "").trim();
    }
  });

  return { summary, stack, portfolio, experience, credentials };
}

export default function ResumePage() {
  const filePath = path.join(process.cwd(), "../Resume.md");
  const fileContents = fs.readFileSync(filePath, "utf8");
  const { data, content } = matter(fileContents);

  const { summary, stack, portfolio, experience, credentials } =
    parseResumeContent(content);
  const processedExperience = experience.replace(
    /^\*\*(.*?)\*\*\s*\|\s*(.*?)$/gm,
    "###### $1 | $2"
  );

  return (
    <div className="resume-container min-h-screen bg-gray-100 py-10 print:py-0 print:bg-white flex justify-center">
      <div className="resume-paper relative w-full max-w-4xl bg-white shadow-lg print:shadow-none p-10 print:p-0">
        {/* Floating Utility Action */}
        <PrintButton />

        <style
          dangerouslySetInnerHTML={{
            __html: `
          @media print {
            body { 
              background: #fff; 
              color: #111; 
              font-size: 9pt; 
              line-height: 1.25; 
              margin: 0; 
              padding: 0; 
              -webkit-print-color-adjust: exact;
            }
            @page { 
              size: A4; 
              margin: 10mm 12mm 10mm 12mm; 
            }
            nav, button, .no-print { 
              display: none !important; 
            }
            * {
              font-family: 'Inter', system-ui, -apple-system, sans-serif !important;
            }
            .resume-paper {
              max-width: 100% !important;
              padding: 0 !important;
            }
            header {
              margin-bottom: 2.5mm !important;
              padding-bottom: 2mm !important;
            }
            section {
              margin-bottom: 2.5mm !important;
              padding-bottom: 2mm !important;
              page-break-inside: auto !important;
            }
            .resume-experience > div,
            .resume-experience li,
            .resume-competencies li {
              page-break-inside: avoid !important;
            }
            h1 { font-size: 16pt !important; margin-bottom: 0.5mm !important; }
            h2 { font-size: 10.5pt !important; margin-bottom: 1mm !important; }
            h3 { font-size: 8pt !important; margin-bottom: 1mm !important; letter-spacing: 0.05em !important; }
            h4 { font-size: 9.5pt !important; margin-top: 2mm !important; margin-bottom: 0.5mm !important; }
            h5 { font-size: 7.5pt !important; margin-top: 1mm !important; margin-bottom: 0.5mm !important; }
            p, li { font-size: 8.5pt !important; line-height: 1.25 !important; }
            ul { margin-bottom: 1mm !important; }
            footer { margin-top: 2mm !important; padding-top: 1.5mm !important; }
          }
        `,
          }}
        />

        <div className="font-sans text-gray-900 leading-relaxed max-w-[800px] mx-auto print:mx-0 print:max-w-none">
          {/* Header Block */}
          <header className="border-b-2 border-gray-900 pb-3 mb-3">
            <h1 className="text-3xl md:text-4xl font-bold tracking-tight mb-1 text-gray-900">
              {data.name}
            </h1>
            <h2 className="text-lg md:text-xl text-gray-700 font-semibold mb-2">
              {data.title}
            </h2>

            <div className="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs md:text-sm text-gray-600 font-medium">
              <a href={"mailto:" + data.email} className="hover:text-black transition-colors">
                {data.email}
              </a>
              <span>•</span>
              <span>{data.phone}</span>
              <span>•</span>
              <span>{data.location}</span>
              <span>•</span>
              <a
                href={data.website || "https://alexseif.com"}
                target="_blank"
                rel="noreferrer"
                className="hover:text-black font-semibold text-gray-900 underline transition-colors"
              >
                alexseif.com
              </a>
            </div>
          </header>

          {/* Professional Summary */}
          {summary && (
            <section className="mb-3.5 border-b border-gray-200 pb-3.5">
              <h3 className="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1.5 font-mono">
                Professional Summary
              </h3>
              <p className="text-justify font-normal text-[13.5px] leading-relaxed text-gray-800">
                {summary}
              </p>
            </section>
          )}

          {/* Technical Stack & Competencies */}
          {stack && (
            <section className="mb-3.5 border-b border-gray-200 pb-3.5">
              <h3 className="text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 font-mono">
                Technical Stack & Architecture Competencies
              </h3>
              <div className="text-sm resume-competencies">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    ul: ({ node, ...props }) => (
                      <ul className="space-y-1.5 mb-1" {...props} />
                    ),
                    li: ({ node, ...props }) => (
                      <li
                        className="flex flex-col sm:flex-row print:flex-row leading-snug text-gray-800 text-[13px]"
                        {...props}
                      />
                    ),
                    strong: ({ node, ...props }) => (
                      <strong
                        className="sm:w-2/5 print:w-2/5 shrink-0 sm:pr-3 print:pr-3 font-bold text-gray-900"
                        {...props}
                      />
                    ),
                  }}
                >
                  {stack}
                </ReactMarkdown>
              </div>
            </section>
          )}

          {/* Featured Architectural Engagements (rendered if present in markdown) */}
          {portfolio && (
            <section className="mb-3.5 border-b border-gray-200 pb-3.5">
              <h3 className="text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 font-mono">
                Featured Architectural Engagements
              </h3>
              <div className="text-sm resume-portfolio">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    ul: ({ node, ...props }) => (
                      <ul className="space-y-2 mb-1" {...props} />
                    ),
                    li: ({ node, ...props }) => (
                      <li className="leading-snug text-justify text-gray-800 text-[13px]" {...props} />
                    ),
                    strong: ({ node, ...props }) => (
                      <strong className="font-bold text-gray-900" {...props} />
                    ),
                    em: ({ node, ...props }) => (
                      <em className="italic text-gray-600 text-xs" {...props} />
                    ),
                    a: ({ node, ...props }) => (
                      <a
                        className="text-gray-900 font-semibold underline hover:text-black"
                        target="_blank"
                        rel="noreferrer"
                        {...props}
                      />
                    ),
                  }}
                >
                  {portfolio}
                </ReactMarkdown>
              </div>
            </section>
          )}

          {/* Professional Experience */}
          {experience && (
            <section className="mb-3.5 border-b border-gray-200 pb-3.5">
              <h3 className="text-xs font-bold uppercase tracking-wider text-gray-500 mb-2 font-mono">
                Professional Experience
              </h3>
              <div className="space-y-3 text-sm resume-experience">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    h3: ({ node, ...props }) => (
                      <h4
                        className="font-bold text-[14px] text-gray-900 uppercase tracking-wide mt-2 mb-0.5"
                        {...props}
                      />
                    ),
                    h6: ({ node, ...props }) => {
                      const text = flattenChildren(props.children);
                      const parts = text.split(" | ");
                      const timeline = parts.length > 1 ? parts[parts.length - 1] : "";
                      const entity = parts.slice(0, parts.length - 1).join(" | ");
                      return (
                        <div className="flex justify-between items-baseline mb-1 pb-0.5 border-b border-gray-100">
                          <div className="font-semibold text-gray-800 text-[12.5px]">{entity}</div>
                          <div className="text-right font-medium text-gray-600 text-xs whitespace-nowrap ml-3">
                            {timeline}
                          </div>
                        </div>
                      );
                    },
                    h4: ({ node, ...props }) => (
                      <h5
                        className="font-bold text-xs text-gray-800 mt-2 mb-0.5 uppercase tracking-wider"
                        {...props}
                      />
                    ),
                    p: ({ node, ...props }) => (
                      <p
                        className="text-[12.5px] text-gray-800 leading-snug mb-1 text-justify"
                        {...props}
                      />
                    ),
                    ul: ({ node, ...props }) => (
                      <ul
                        className="list-disc pl-4 space-y-0.5 text-justify text-[12.5px] mb-1.5 text-gray-800"
                        {...props}
                      />
                    ),
                    li: ({ node, ...props }) => <li className="leading-snug" {...props} />,
                    strong: ({ node, ...props }) => (
                      <strong className="font-semibold text-gray-900" {...props} />
                    ),
                  }}
                >
                  {processedExperience}
                </ReactMarkdown>
              </div>
            </section>
          )}

          {/* Education & Credentials */}
          {credentials && (
            <section className="mb-3.5">
              <h3 className="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1.5 font-mono">
                Education & Foundations
              </h3>
              <div className="text-sm">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    p: ({ node, ...props }) => (
                      <p
                        className="text-[12.5px] text-gray-800 leading-snug mb-1 text-justify"
                        {...props}
                      />
                    ),
                    ul: ({ node, ...props }) => (
                      <ul
                        className="list-disc pl-4 space-y-0.5 text-justify text-[12.5px] mb-1.5"
                        {...props}
                      />
                    ),
                    li: ({ node, ...props }) => (
                      <li className="leading-snug text-gray-800" {...props} />
                    ),
                    strong: ({ node, ...props }) => (
                      <strong className="font-bold text-gray-900" {...props} />
                    ),
                    a: ({ node, ...props }) => (
                      <a
                        className="text-gray-900 font-semibold underline hover:text-black"
                        target="_blank"
                        rel="noreferrer"
                        {...props}
                      />
                    ),
                  }}
                >
                  {credentials}
                </ReactMarkdown>
              </div>
            </section>
          )}

          {/* Footer Note */}
          <footer className="mt-4 pt-2 border-t border-gray-200 print:border-gray-900">
            <p className="text-xs text-gray-500 print:text-black print:text-[8pt] leading-snug text-justify">
              <strong>Projects:</strong> Complete 20-year multi-project architectural
              vault, systems diagrams, and engineering dossiers available at:{" "}
              <a
                href="https://alexseif.com/case-studies"
                className="text-gray-900 hover:text-black print:text-black font-semibold underline print:no-underline"
              >
                https://alexseif.com/case-studies
              </a>
            </p>
          </footer>
        </div>
      </div>
    </div>
  );
}
