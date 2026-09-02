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
      <div className="resume-paper relative w-full max-w-4xl bg-white shadow-lg print:shadow-none p-12 print:p-0">
        {/* Floating Utility Action */}
        <PrintButton />

        <style
          dangerouslySetInnerHTML={{
            __html: `
          @media print {
            body { 
              background: #fff; 
              color: #000; 
              font-size: 10pt; 
              line-height: 1.35; 
              margin: 0; 
              padding: 0; 
              -webkit-print-color-adjust: exact;
            }
            @page { 
              size: A4; 
              margin: 18mm 16mm; 
            }
            nav, button, .no-print { 
              display: none !important; 
            }
            .page-break { 
              page-break-before: always; 
            }
            * {
              font-family: 'Inter', system-ui, -apple-system, sans-serif !important;
            }
            .resume-paper {
              max-width: 100% !important;
            }
            section {
              page-break-inside: avoid;
            }
          }
        `,
          }}
        />

        <div className="font-sans text-gray-900 leading-relaxed max-w-[800px] mx-auto print:mx-0 print:max-w-none">
          {/* Header Block */}
          <header className="border-b-2 border-gray-900 pb-5 mb-5">
            <h1 className="text-3xl md:text-4xl font-bold tracking-tight mb-1 text-gray-900">
              {data.name}
            </h1>
            <h2 className="text-lg md:text-xl text-gray-700 font-semibold mb-3">
              {data.title}
            </h2>

            <div className="flex flex-wrap items-center gap-x-5 gap-y-1 text-sm text-gray-600 font-medium">
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
            <section className="mb-6 border-b border-gray-200 pb-6">
              <h3 className="text-sm font-bold uppercase tracking-wider text-gray-500 mb-2 font-mono">
                Professional Summary
              </h3>
              <p className="text-justify font-normal text-[14px] leading-relaxed text-gray-800">
                {summary}
              </p>
            </section>
          )}

          {/* Technical Stack & Competencies */}
          {stack && (
            <section className="mb-6 border-b border-gray-200 pb-6">
              <h3 className="text-sm font-bold uppercase tracking-wider text-gray-500 mb-3 font-mono">
                Technical Stack & Architecture Competencies
              </h3>
              <div className="text-sm resume-competencies">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    ul: ({ node, ...props }) => (
                      <ul className="space-y-2 mb-2" {...props} />
                    ),
                    li: ({ node, ...props }) => (
                      <li
                        className="flex flex-col sm:flex-row print:flex-row leading-relaxed text-gray-800 text-[13.5px]"
                        {...props}
                      />
                    ),
                    strong: ({ node, ...props }) => (
                      <strong
                        className="sm:w-2/5 print:w-2/5 shrink-0 sm:pr-4 print:pr-4 font-bold text-gray-900"
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

          {/* Featured Architectural Engagements */}
          {portfolio && (
            <section className="mb-6 border-b border-gray-200 pb-6">
              <h3 className="text-sm font-bold uppercase tracking-wider text-gray-500 mb-3 font-mono">
                Featured Architectural Engagements (Deep Dives)
              </h3>
              <div className="text-sm resume-portfolio">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    ul: ({ node, ...props }) => (
                      <ul className="space-y-3 mb-2" {...props} />
                    ),
                    li: ({ node, ...props }) => (
                      <li className="leading-relaxed text-justify text-gray-800 text-[13.5px]" {...props} />
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
            <section className="mb-6 border-b border-gray-200 pb-6">
              <h3 className="text-sm font-bold uppercase tracking-wider text-gray-500 mb-4 font-mono">
                Professional Experience
              </h3>
              <div className="space-y-6 text-sm resume-experience">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    h3: ({ node, ...props }) => (
                      <h4
                        className="font-bold text-[15px] text-gray-900 uppercase tracking-wide"
                        {...props}
                      />
                    ),
                    h6: ({ node, ...props }) => {
                      const text = flattenChildren(props.children);
                      const parts = text.split(" | ");
                      const timeline = parts.length > 1 ? parts[parts.length - 1] : "";
                      const entity = parts.slice(0, parts.length - 1).join(" | ");
                      return (
                        <div className="flex justify-between items-baseline mb-2.5 pb-1.5 border-b border-gray-100">
                          <div className="font-semibold text-gray-800 text-[13.5px]">{entity}</div>
                          <div className="text-right font-medium text-gray-600 text-xs whitespace-nowrap ml-4">
                            {timeline}
                          </div>
                        </div>
                      );
                    },
                    h4: ({ node, ...props }) => (
                      <h5
                        className="font-bold text-xs text-gray-800 mt-4 mb-2 uppercase tracking-wider"
                        {...props}
                      />
                    ),
                    p: ({ node, ...props }) => (
                      <p
                        className="text-[13.5px] text-gray-800 leading-relaxed mb-2.5 text-justify"
                        {...props}
                      />
                    ),
                    ul: ({ node, ...props }) => (
                      <ul
                        className="list-disc pl-5 space-y-2 text-justify text-[13.5px] mb-3 text-gray-800"
                        {...props}
                      />
                    ),
                    li: ({ node, ...props }) => <li className="leading-relaxed" {...props} />,
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
            <section className="mb-6">
              <h3 className="text-sm font-bold uppercase tracking-wider text-gray-500 mb-3 font-mono">
                Education & Foundations
              </h3>
              <div className="text-sm">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    p: ({ node, ...props }) => (
                      <p
                        className="text-[13.5px] text-gray-800 leading-relaxed mb-2 text-justify"
                        {...props}
                      />
                    ),
                    ul: ({ node, ...props }) => (
                      <ul
                        className="list-disc pl-5 space-y-2 text-justify text-[13.5px] mb-3"
                        {...props}
                      />
                    ),
                    li: ({ node, ...props }) => (
                      <li className="leading-relaxed text-gray-800" {...props} />
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
          <footer className="mt-8 pt-4 border-t border-gray-200 print:border-gray-900">
            <p className="text-xs text-gray-500 print:text-black print:text-[9pt] leading-relaxed text-justify">
              <strong>Single Source of Truth:</strong> Complete 20-year multi-project architectural
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
