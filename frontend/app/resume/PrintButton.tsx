"use client";

import { Download, Printer } from "lucide-react";

export default function PrintButton() {
  return (
    <div className="no-print absolute top-4 right-4 flex items-center gap-2">
      <a
        href="/Alex_Seif_Software_Architect_CV.pdf"
        download="Alex_Seif_Software_Architect_CV.pdf"
        className="inline-flex items-center gap-1.5 bg-neutral-900 text-white font-mono text-xs px-3 py-1.5 rounded border border-neutral-800 hover:bg-neutral-800 transition-colors shadow-sm"
      >
        <Download className="h-3.5 w-3.5" />
        Download Official PDF
      </a>
      <button
        onClick={() => {
          if (typeof window !== "undefined") window.print();
        }}
        className="inline-flex items-center gap-1.5 bg-neutral-100 text-neutral-800 font-mono text-xs px-3 py-1.5 rounded border border-neutral-300 hover:bg-neutral-200 transition-colors shadow-sm"
      >
        <Printer className="h-3.5 w-3.5" />
        Print
      </button>
    </div>
  );
}
