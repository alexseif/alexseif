export type PostSummary = {
  title: string;
  slug: string;
  summary: string | null;
  createdAt: string | null;
};

export type PostDetail = PostSummary & {
  content: string;
};

const getApiBase = () => {
  const apiBase = process.env.NEXT_PUBLIC_API_URL?.replace(/\/$/, "");
  if (!apiBase) {
    throw new Error("NEXT_PUBLIC_API_URL is not configured.");
  }
  return apiBase;
};

export async function fetchPosts(): Promise<PostSummary[]> {
  const apiBase = getApiBase();
  const res = await fetch(`${apiBase}/api/posts`, {
    cache: "force-cache",
  });

  if (!res.ok) {
    throw new Error("Failed to load posts.");
  }

  const payload = (await res.json()) as { data?: PostSummary[] };
  return payload.data ?? [];
}

export async function fetchPost(slug: string): Promise<PostDetail | null> {
  const apiBase = getApiBase();
  const res = await fetch(`${apiBase}/api/posts/${slug}`, {
    cache: "force-cache",
  });

  if (res.status === 404) {
    return null;
  }

  if (!res.ok) {
    throw new Error("Failed to load post.");
  }

  const payload = (await res.json()) as { data?: PostDetail };
  return payload.data ?? null;
}
