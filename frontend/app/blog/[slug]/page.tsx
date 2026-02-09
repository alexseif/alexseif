import Link from "next/link";
import { notFound } from "next/navigation";
import { format } from "date-fns";
import { fetchPost, fetchPosts } from "@/lib/blog";
import { renderMarkdown } from "@/lib/markdown";
import { Metadata } from 'next';

// export const dynamic = "force-static";
export const revalidate = 60; // Refresh the data every 60 seconds without a rebuild

// Next.js 15+ Params are handled as Promises
type BlogPostPageProps = {
  params: Promise<{ slug: string }>;
};

/**
 * SOCIAL CARDS & SEO
 * This runs on the server to inject Open Graph tags into the <head>
 */
export async function generateMetadata({ params }: BlogPostPageProps): Promise<Metadata> {
  const { slug } = await params;
  const post = await fetchPost(slug);
  
  if (!post) return { title: 'Reflection Not Found | Alex Seif' };

  return {
    title: `${post.title} | Alex Seif`,
    description: post.summary || 'A reflection on systems and architecture.',
    openGraph: {
      title: post.title,
      description: post.summary || 'A reflection on systems and architecture.',
      type: 'article',
      url: `https://alexseif.com/blog/${slug}`,
      images: [
        {
          url: 'https://alexseif.com/og-card.png', // We'll create this file next
          width: 1200,
          height: 630,
          alt: post.title,
        },
      ],
    },
    twitter: {
      card: 'summary_large_image',
      title: post.title,
      description: post.summary || 'A reflection on systems and architecture.',
    },
  };
}

/**
 * SSG PATH GENERATION
 * Tells Next.js which pages to build at compile time
 */
export async function generateStaticParams() {
  const posts = await fetchPosts();
  return posts.map((post) => ({ slug: post.slug }));
}

/**
 * THE PAGE COMPONENT
 */
export default async function BlogPostPage({ params }: BlogPostPageProps) {
  const { slug } = await params;
  const post = await fetchPost(slug);

  if (!post) {
    notFound();
  }

  const html = renderMarkdown(post.content);

  return (
    <main className="min-h-screen bg-background text-foreground blueprint-grid">
      <section className="px-6 pb-12 pt-20">
        <div className="mx-auto max-w-3xl space-y-6">
          <Link
            href="/blog"
            className="text-xs uppercase tracking-[0.4em] text-primary font-mono hover:text-primary/80"
          >
            Back to Reflections
          </Link>
          <div className="space-y-4">
            <h1
              className="text-3xl md:text-5xl font-light text-foreground"
              style={{ fontFamily: "var(--font-playfair)" }}
            >
              {post.title}
            </h1>
            <div className="text-xs uppercase tracking-[0.3em] text-muted-foreground font-mono">
              {post.createdAt
                ? format(new Date(post.createdAt), "MMM dd, yyyy")
                : "Undated"}
            </div>
            {post.summary && (
              <p className="text-base md:text-lg text-muted-foreground leading-relaxed">
                {post.summary}
              </p>
            )}
          </div>
        </div>
      </section>

      <section className="px-6 pb-20">
        <article
          className="mx-auto max-w-3xl blog-content"
          dangerouslySetInnerHTML={{ __html: html }}
        />
      </section>
    </main>
  );
}