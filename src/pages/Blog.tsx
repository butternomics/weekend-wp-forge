import React from 'react';
import { Link } from 'react-router-dom';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';

const blogPosts = [
  {
    slug: 'what-is-404-day',
    title: 'What is 404 Day? The Story Behind Atlanta\'s Biggest Celebration',
    excerpt: 'Discover the origins of 404 Day Weekend and why it has become one of Atlanta\'s most anticipated annual events celebrating culture, creativity, and community.',
    date: 'March 15, 2026',
    category: 'Culture',
  },
  {
    slug: 'parade-guide-2026',
    title: '2026 Parade Guide: Everything You Need to Know',
    excerpt: 'Your complete guide to the 2nd Annual 404 Day Parade — route details, parking tips, what to bring, and how to get the best viewing spots.',
    date: 'March 10, 2026',
    category: 'Parade',
  },
  {
    slug: 'scholarship-gala-preview',
    title: 'Inside the 404 Scholarship Gala: Celebrating Atlanta\'s Changemakers',
    excerpt: 'A preview of the 3rd Annual 404 Fund Scholarship Gala at Monday Night Brewery. Meet the honorees and learn about the scholarships being awarded.',
    date: 'March 5, 2026',
    category: 'Events',
  },
  {
    slug: 'atlanta-culture-spotlight',
    title: 'Atlanta Culture Spotlight: The Creatives Shaping the City',
    excerpt: 'From music to art to food, meet the Atlanta creators and entrepreneurs who are defining the city\'s identity and making 404 Day Weekend possible.',
    date: 'February 28, 2026',
    category: 'Culture',
  },
];

const Blog = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <header className="bg-primary text-secondary py-16 px-4 text-center">
        <h1 className="text-4xl md:text-6xl font-black uppercase tracking-tight">Blog</h1>
        <p className="text-lg md:text-xl mt-4 text-secondary/80 uppercase tracking-widest">Stories, News & Updates</p>
      </header>

      <main className="max-w-4xl mx-auto py-16 px-4">
        <div className="space-y-12">
          {blogPosts.map((post) => (
            <article key={post.slug} className="border-b border-border pb-12 group">
              <div className="flex items-center gap-4 mb-3">
                <span className="bg-secondary text-primary px-3 py-1 text-xs font-bold uppercase tracking-wider">
                  {post.category}
                </span>
                <time className="text-sm text-muted-foreground">{post.date}</time>
              </div>
              <Link to={`/blog/${post.slug}`}>
                <h2 className="text-2xl md:text-3xl font-black text-primary uppercase leading-tight mb-3 group-hover:text-primary/70 transition-colors">
                  {post.title}
                </h2>
              </Link>
              <p className="text-lg text-muted-foreground leading-relaxed mb-4">
                {post.excerpt}
              </p>
              <Link
                to={`/blog/${post.slug}`}
                className="inline-block text-primary font-bold uppercase tracking-wider text-sm border-b-2 border-secondary hover:text-secondary transition-colors"
              >
                Read More →
              </Link>
            </article>
          ))}
        </div>
      </main>

      <Footer />
    </div>
  );
};

export default Blog;
