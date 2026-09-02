"use client";

import React from "react";
import { Info } from "lucide-react";
import { Tooltip, TooltipTrigger, TooltipContent } from "@/components/ui/tooltip";

export function RafiqTooltip() {
  return (
    <Tooltip>
      <TooltipTrigger asChild>
        <button
          type="button"
          onClick={(e) => e.preventDefault()}
          onTouchStart={(e) => e.currentTarget.focus()}
          className="inline-flex size-4 items-center justify-center rounded-full border border-primary/70 bg-card/70 text-primary hover:bg-primary hover:text-primary-foreground transition-colors ms-1 cursor-help md:cursor-pointer"
          aria-label="What is a Rafiq?"
        >
          <Info className="h-3.5 w-3.5" />
        </button>
      </TooltipTrigger>
      <TooltipContent
        side="top"
        className="bg-card text-foreground border border-primary/40 shadow-lg space-y-1"
      >
        <p className="text-3xl font-mono text-primary">Rafiq</p>
        <p className="text-sm text-foreground/70 max-w-xs">
          Someone who walks the path with you.
        </p>
      </TooltipContent>
    </Tooltip>
  );
}
