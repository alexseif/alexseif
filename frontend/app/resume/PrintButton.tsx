'use client';

export default function PrintButton() {
  return (
    <button 
      className="no-print absolute top-4 right-4 bg-neutral-900 text-white font-mono text-xs px-3 py-1 rounded border border-neutral-800 hover:bg-neutral-800"
      onClick={() => {
        if (typeof window !== 'undefined') window.print();
      }}
    >
      Export Print-Ready PDF
    </button>
  );
}
