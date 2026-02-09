import Link from "next/link";
import { format } from "date-fns";
import { fetchPosts } from "@/lib/blog";

export const dynamic = "force-static";

export default async function BlogPage() {
  const posts = await fetchPosts();

  return (
    <main className="min-h-screen bg-background text-foreground blueprint-grid">
      <section className="relative overflow-hidden px-6 pb-16 pt-24">
        <div className="absolute inset-0 pointer-events-none">
          <div className="absolute left-0 right-0 top-16 h-px bg-gradient-to-r from-transparent via-primary/20 to-transparent" />
          <div className="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
          <div className="absolute right-8 top-0 h-full w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
        </div>
        <div className="relative mx-auto flex max-w-5xl flex-col gap-6">
          <div className="flex items-center gap-4 text-xs uppercase tracking-[0.4em] text-primary font-mono">
            <span className="h-px w-10 bg-primary/60" />
            Reflections
          </div>
          <h1
            className="text-4xl md:text-6xl font-light text-foreground"
            style={{ fontFamily: "var(--font-playfair)" }}
          >
            Quiet systems, written aloud.
          </h1>
          <p className="max-w-2xl text-base md:text-lg text-muted-foreground leading-relaxed font-sans">
            A minimalist log of architecture, intent, and the human stories that
            live inside the machines.
          </p>
        </div>
      </section>

      <section className="px-6 pb-20">
        <div className="mx-auto max-w-5xl">
          {posts.length === 0 ? (
            <div className="border border-border/60 bg-card/30 px-6 py-10 text-center text-muted-foreground">
              The archive is quiet. Draft a reflection to begin.
            </div>
          ) : (
            <div className="divide-y divide-border/60 border border-border/60 bg-card/20">
              {posts.map((post) => (
                <Link
                  key={post.slug}
                  href={`/blog/${post.slug}`}
                  className="group block px-6 py-8 transition-colors hover:bg-card/40"
                >
                  <div className="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div className="space-y-2">
                      <h2
                        className="text-2xl md:text-3xl text-foreground group-hover:text-primary transition-colors"
                        style={{ fontFamily: "var(--font-playfair)" }}
                      >
                        {post.title}
                      </h2>
                      {post.summary && (
                        <p className="text-sm md:text-base text-muted-foreground leading-relaxed">
                          {post.summary}
                        </p>
                      )}
                    </div>
                    <div className="text-xs uppercase tracking-[0.3em] text-muted-foreground font-mono">
                      {post.createdAt
                        ? format(new Date(post.createdAt), "MMM dd, yyyy")
                        : "Undated"}
                    </div>
                  </div>
                </Link>
              ))}
            </div>
          )}
        </div>
      </section>
    </main>
  );
}
