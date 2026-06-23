import React from "react";

export const openBrevo = (e?: React.MouseEvent) => {
  e?.preventDefault();
  if (typeof window !== "undefined") {
    (window as any).BrevoConversations?.("openChat", true);
  }
  return false;
};
