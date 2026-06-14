import fs from 'fs';
import path from 'path';
import matter from 'gray-matter';
import { Metadata } from 'next';

export const metadata: Metadata = {
  title: 'Alex Seif | Senior Software Architect & Principal Software Engineer Resume',
  description: 'Resume of Alex Seif, a Senior Software Architect & Principal Software Engineer specializing in high-level technical execution, scalable systems, and legacy migrations.',
};

import PrintButton from './PrintButton';
import ReactMarkdown from 'react-markdown';
import remarkGfm from 'remark-gfm';

// Simple utility to format the content specifically as requested
function parseResumeContent(content: string) {
  const sections = content.split(/(?=^## )/m);

  let summary = '';
  let competencies = '';
  let stack = '';
  let experience = '';
  let credentials = '';

  sections.forEach(section => {
    if (section.trim().startsWith('## PROFESSIONAL SUMMARY')) {
      summary = section.replace(/^## PROFESSIONAL SUMMARY/m, '').trim();
    } else if (section.trim().startsWith('## Core Competencies')) {
      competencies = section.replace(/^## Core Competencies/m, '').trim();
    } else if (section.trim().startsWith('## TECHNICAL STACK INVENTORY')) {
      stack = section.replace(/^## TECHNICAL STACK INVENTORY/m, '').trim();
    } else if (section.trim().startsWith('## PROFESSIONAL EXPERIENCE')) {
      experience = section.replace(/^## PROFESSIONAL EXPERIENCE/m, '').trim();
    } else if (section.trim().startsWith('## EDUCATION & BACKGROUND')) {
      credentials = section.replace(/^## EDUCATION & BACKGROUND/m, '').trim();
    }
  });

  return { summary, competencies, stack, experience, credentials };
}

export default function ResumePage() {
  const filePath = path.join(process.cwd(), '../Resume.md');
  const fileContents = fs.readFileSync(filePath, 'utf8');
  const { data, content } = matter(fileContents);

  const { summary, competencies, stack, experience, credentials } = parseResumeContent(content);
  const processedExperience = experience.replace(/^\*\*(.*?)\*\*\s*\|\s*(.*?)$/gm, '###### $1 | $2');

  return (
    <div className="resume-container min-h-screen bg-gray-100 py-10 print:py-0 print:bg-white flex justify-center">
      <div className="resume-paper relative w-full max-w-4xl bg-white shadow-lg print:shadow-none p-12 print:p-0">

        {/* Floating Utility Action */}
        <PrintButton />

        <style dangerouslySetInnerHTML={{
          __html: `
          @media print {
            body { 
              background: #fff; 
              color: #000; 
              font-size: 11pt; 
              line-height: 1.4; 
              margin: 0; 
              padding: 0; 
              -webkit-print-color-adjust: exact;
            }
            @page { 
              size: A4; 
              margin: 20mm; 
            }
            nav, button, .no-print { 
              display: none !important; 
            }
            .page-break { 
              page-break-before: always; 
            }
            /* Ensure clean typography */
            * {
              font-family: 'Inter', system-ui, -apple-system, sans-serif !important;
            }
            .resume-paper {
              max-width: 100% !important;
            }
          }
        `}} />

        <div className="font-sans text-gray-900 leading-relaxed max-w-[800px] mx-auto print:mx-0 print:max-w-none">
          {/* Header Block */}
          <header className="border-b-2 border-gray-900 pb-6 mb-6">
            <h1 className="text-4xl font-bold tracking-tight mb-1">{data.name}</h1>
            <h2 className="text-xl text-gray-700 font-medium mb-4">{data.title}</h2>

            <div className="flex flex-wrap gap-x-6 gap-y-1 text-sm text-gray-600">
              <a href={"mailto:" + data.email} className="hover:text-black">{data.email}</a>
              <span>{data.phone}</span>
              <span>{data.location}</span>
              <a href={data.linkedin} target="_blank" rel="noreferrer" className="hover:text-black">linkedin.com/in/alexseif</a>
              <a href={data.github} target="_blank" rel="noreferrer" className="hover:text-black">github.com/alexseif</a>
              <a href={data.website} target="_blank" rel="noreferrer" className="hover:text-black">alexseif.com</a>
            </div>
          </header>

          {/* Summary Block */}
          <section className="mb-8 border-b-2 border-gray-900 pb-8">
            <p className="text-justify font-medium text-[15px] leading-relaxed mb-4">
              {summary}
            </p>
          </section>

          {/* Core Competencies Matrix */}
          <section className="mb-8">
            <h3 className="text-lg font-bold uppercase tracking-wider mb-3 border-b border-gray-300 pb-1">Core Competencies</h3>
            <div className="text-sm resume-competencies">
              <ReactMarkdown
                remarkPlugins={[remarkGfm]}
                components={{
                  h3: ({ node, ...props }) => <h4 className="font-bold text-base text-gray-800 uppercase tracking-wide mt-6 mb-3 border-b border-gray-100 pb-1" {...props} />,
                  ul: ({ node, ...props }) => <ul className="space-y-2 mb-4" {...props} />,
                  li: ({ node, ...props }) => <li className="flex flex-col sm:flex-row print:flex-row leading-relaxed" {...props} />,
                  strong: ({ node, ...props }) => <strong className="sm:w-1/3 print:w-1/3 shrink-0 sm:pr-4 print:pr-4 font-bold text-gray-900" {...props} />
                }}
              >
                {competencies}
              </ReactMarkdown>
            </div>
          </section>

          {/* Technical Stack Matrix */}
          <section className="mb-8">
            <h3 className="text-lg font-bold uppercase tracking-wider mb-3 border-b border-gray-300 pb-1">Technical Stack Inventory</h3>
            <div className="text-sm resume-competencies">
              <ReactMarkdown
                remarkPlugins={[remarkGfm]}
                components={{
                  h3: ({ node, ...props }) => <h4 className="font-bold text-base text-gray-800 uppercase tracking-wide mt-6 mb-3 border-b border-gray-100 pb-1" {...props} />,
                  ul: ({ node, ...props }) => <ul className="space-y-2 mb-4" {...props} />,
                  li: ({ node, ...props }) => <li className="flex flex-col sm:flex-row print:flex-row leading-relaxed" {...props} />,
                  strong: ({ node, ...props }) => <strong className="sm:w-1/3 print:w-1/3 shrink-0 sm:pr-4 print:pr-4 font-bold text-gray-900" {...props} />
                }}
              >
                {stack}
              </ReactMarkdown>
            </div>
          </section>

          {/* Experience Hierarchy */}
          <section className="mb-8">
            <h3 className="text-lg font-bold uppercase tracking-wider mb-6 border-b border-gray-300 pb-1">Professional Experience</h3>
            <div className="space-y-8 text-sm resume-experience">
              <ReactMarkdown
                remarkPlugins={[remarkGfm]}
                components={{
                  h3: ({ node, ...props }) => <h4 className="font-bold text-base text-gray-900 uppercase tracking-wide" {...props} />,
                  h6: ({ node, ...props }) => {
                    const text = props.children?.toString() || '';
                    const [entity, timeline] = text.split(' | ');
                    return (
                      <div className="flex justify-between items-baseline mb-3 pb-2 border-b border-gray-100">
                        <div className="font-medium text-gray-700">{entity}</div>
                        <div className="text-right font-medium text-gray-600 whitespace-nowrap ml-4">{timeline}</div>
                      </div>
                    );
                  },
                  h4: ({ node, ...props }) => <h5 className="font-bold text-sm text-gray-800 mt-5 mb-2 uppercase tracking-wide" {...props} />,
                  p: ({ node, ...props }) => <p className="text-sm text-gray-800 leading-relaxed mb-3 text-justify" {...props} />,
                  ul: ({ node, ...props }) => <ul className="list-disc pl-5 space-y-2 text-justify text-sm mb-4" {...props} />,
                  li: ({ node, ...props }) => <li className="leading-relaxed" {...props} />,
                  strong: ({ node, ...props }) => <strong className="font-bold text-gray-900" {...props} />
                }}
              >
                {processedExperience}
              </ReactMarkdown>
            </div>
          </section>

          {/* Credentials */}
          {credentials && (
            <section className="mb-8">
              <h3 className="text-lg font-bold uppercase tracking-wider mb-4 border-b border-gray-300 pb-1">Credentials & Background</h3>
              <div className="text-sm">
                <ReactMarkdown
                  remarkPlugins={[remarkGfm]}
                  components={{
                    p: ({ node, ...props }) => <p className="text-sm text-gray-800 leading-relaxed mb-3 text-justify" {...props} />,
                    ul: ({ node, ...props }) => <ul className="list-disc pl-5 space-y-3 text-justify text-sm mb-4" {...props} />,
                    li: ({ node, ...props }) => <li className="leading-relaxed" {...props} />,
                    strong: ({ node, ...props }) => <strong className="font-bold text-gray-900" {...props} />,
                    em: ({ node, ...props }) => <em className="italic text-gray-600 block mt-1" {...props} />,
                  }}
                >
                  {credentials}
                </ReactMarkdown>
              </div>
            </section>
          )}

          {/* Footer Link Attachment */}
          <footer className="mt-12 pt-6 border-t border-gray-200 print:border-gray-900 grid grid-cols-1">
            <p className="text-xs text-gray-400 print:text-black print:text-[10pt] leading-relaxed text-justify">
              Note: This document serves as a high-density chronological technical execution summary. To review the complete, interactive multi-decade project database, raw input validation structures, and detailed architectural use-case records, access the dynamic digital directory via:{' '}
              <a href="https://alexseif.com/case-studies" className="text-gray-500 hover:text-black print:text-black font-medium underline print:no-underline">
                https://alexseif.com/case-studies
              </a>
            </p>
          </footer>

        </div>
      </div>
    </div>
  );
}
