const escapeHtml = (input: string) =>
  input
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#39;");

const applyInline = (input: string) => {
  return input
    .replace(/`([^`]+)`/g, "<code>$1</code>")
    .replace(/\*\*([^*]+)\*\*/g, "<strong>$1</strong>")
    .replace(/\*([^*]+)\*/g, "<em>$1</em>")
    .replace(/\[([^\]]+)\]\(([^)]+)\)/g, '<a href="$2" target="_blank" rel="noopener noreferrer">$1</a>');
};

export const renderMarkdown = (markdown: string): string => {
  const lines = escapeHtml(markdown).split(/\r?\n/);
  let html = "";
  let inList = false;
  let inBlockquote = false;
  let inCode = false;

  const closeList = () => {
    if (inList) {
      html += "</ul>";
      inList = false;
    }
  };

  const closeBlockquote = () => {
    if (inBlockquote) {
      html += "</blockquote>";
      inBlockquote = false;
    }
  };

  for (const rawLine of lines) {
    const line = rawLine.trimEnd();

    if (line.startsWith("```")) {
      if (!inCode) {
        closeList();
        closeBlockquote();
        html += "<pre><code>";
        inCode = true;
      } else {
        html += "</code></pre>";
        inCode = false;
      }
      continue;
    }

    if (inCode) {
      html += `${rawLine}\n`;
      continue;
    }

    if (line === "") {
      closeList();
      closeBlockquote();
      continue;
    }

    if (line.startsWith("### ")) {
      closeList();
      closeBlockquote();
      html += `<h3>${applyInline(line.slice(4))}</h3>`;
      continue;
    }

    if (line.startsWith("## ")) {
      closeList();
      closeBlockquote();
      html += `<h2>${applyInline(line.slice(3))}</h2>`;
      continue;
    }

    if (line.startsWith("# ")) {
      closeList();
      closeBlockquote();
      html += `<h1>${applyInline(line.slice(2))}</h1>`;
      continue;
    }

    if (line.startsWith("> ")) {
      closeList();
      if (!inBlockquote) {
        html += "<blockquote>";
        inBlockquote = true;
      }
      html += `<p>${applyInline(line.slice(2))}</p>`;
      continue;
    }

    if (line.startsWith("- ") || line.startsWith("* ")) {
      closeBlockquote();
      if (!inList) {
        html += "<ul>";
        inList = true;
      }
      html += `<li>${applyInline(line.slice(2))}</li>`;
      continue;
    }

    closeList();
    closeBlockquote();
    html += `<p>${applyInline(line)}</p>`;
  }

  closeList();
  closeBlockquote();

  if (inCode) {
    html += "</code></pre>";
  }

  return html;
};
