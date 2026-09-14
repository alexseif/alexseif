import React from "react";

export default function Template({ children }: { children: React.ReactNode }) {
  return (
    <div className="route-transition-enter min-h-screen flex flex-col">
      {children}
    </div>
  );
}
