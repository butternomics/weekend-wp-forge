import React from 'react';
import { useParams, Link } from 'react-router-dom';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';

const posts: Record<string, { title: string; date: string; category: string; content: string }> = {
  'what-is-404-day': {
    title: "What is 404 Day? The Story Behind Atlanta's Biggest Celebration",
    date: 'March 15, 2026',
    category: 'Culture',
    content: `<p>Every city has its signature celebration — and for Atlanta, that's 404 Day Weekend. Named after the city's iconic area code, 404 Day has grown from a grassroots idea into one of the most anticipated weekends on Atlanta's cultural calendar.</p>
<h2>The Origins</h2>
<p>404 Day Weekend was born from a simple vision: to create a moment where all of Atlanta — every neighborhood, every community, every culture — could come together and celebrate what makes the city special. The first event brought together local artists, entrepreneurs, and community leaders for a day of connection and pride.</p>
<h2>What Makes It Special</h2>
<p>Unlike other city festivals, 404 Day Weekend is built by the community, for the community. From the scholarship gala honoring local changemakers to the parade marching down Peachtree Street, every event reflects the authentic spirit of Atlanta.</p>
<h2>2026: Bigger Than Ever</h2>
<p>This year's 404 Day Weekend runs April 1–5, 2026, featuring five days of events including the 404 Scholarship Gala, the City Takeover, the Block Party at Underground Atlanta, the 2nd Annual Parade, and the official Night Party at The Stave Room.</p>`,
  },
  'parade-guide-2026': {
    title: '2026 Parade Guide: Everything You Need to Know',
    date: 'March 10, 2026',
    category: 'Parade',
    content: `<p>The 2nd Annual 404 Day Parade is happening Saturday, April 4, 2026, and it's going to be bigger and better than ever. Here's everything you need to know.</p>
<h2>Route & Timing</h2>
<p>The parade kicks off at 10:00 AM sharp from Civic Center MARTA Station, heading south on Peachtree Street through the heart of downtown, ending at Underground Atlanta. Assembly begins at 8:00 AM.</p>
<h2>Getting There</h2>
<p>MARTA is your best bet. Key stations along the route include Civic Center (start), Peachtree Center (middle), and Five Points (end). Street parking will be limited due to road closures.</p>
<h2>What to Expect</h2>
<p>Floats, marching bands, walking groups, dance teams, and community organizations will all be represented. The parade is FREE and open to the public — just show up and enjoy!</p>`,
  },
  'scholarship-gala-preview': {
    title: "Inside the 404 Scholarship Gala: Celebrating Atlanta's Changemakers",
    date: 'March 5, 2026',
    category: 'Events',
    content: `<p>The 3rd Annual 404 Fund Scholarship Gala kicks off 404 Day Weekend on Thursday, April 2, at Monday Night Brewery's The Garage.</p>
<h2>An Evening of Purpose</h2>
<p>This isn't your typical gala. It's an evening dedicated to recognizing the leaders, creators, and changemakers who are building Atlanta's future. Past honorees have included educators, entrepreneurs, artists, and community organizers.</p>
<h2>The Scholarships</h2>
<p>Proceeds from the gala support scholarships for Atlanta students pursuing higher education. The 404 Fund has already awarded thousands in scholarships to deserving students.</p>`,
  },
  'atlanta-culture-spotlight': {
    title: "Atlanta Culture Spotlight: The Creatives Shaping the City",
    date: 'February 28, 2026',
    category: 'Culture',
    content: `<p>Atlanta has always been a city defined by its creatives. From the music that echoes from every corner to the art that adorns its walls, creativity is in Atlanta's DNA.</p>
<h2>Music</h2>
<p>From trap to R&B to gospel, Atlanta's music scene continues to influence the world. The city's producers, artists, and labels have shaped the sound of modern music.</p>
<h2>Art & Design</h2>
<p>Atlanta's visual arts scene is thriving, with galleries, street art, and design studios adding color and character to every neighborhood.</p>
<h2>Food & Culture</h2>
<p>Atlanta's food scene blends Southern tradition with global influences, creating a culinary landscape that's uniquely ATL.</p>`,
  },
};

const BlogPost = () => {
  const { slug } = useParams<{ slug: string }>();
  const post = slug ? posts[slug] : null;

  if (!post) {
    return (
      <div className="min-h-screen bg-background">
        <Navbar />
        <div className="max-w-4xl mx-auto py-20 px-4 text-center">
          <h1 className="text-4xl font-black text-primary mb-4">Post Not Found</h1>
          <Link to="/blog" className="text-primary font-bold underline">← Back to Blog</Link>
        </div>
        <Footer />
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-background">
      <Navbar />

      <article className="max-w-3xl mx-auto py-16 px-4">
        <div className="mb-8">
          <Link to="/blog" className="text-primary font-bold uppercase tracking-wider text-sm hover:text-secondary transition-colors">
            ← Back to Blog
          </Link>
        </div>

        <div className="flex items-center gap-4 mb-4">
          <span className="bg-secondary text-primary px-3 py-1 text-xs font-bold uppercase tracking-wider">
            {post.category}
          </span>
          <time className="text-sm text-muted-foreground">{post.date}</time>
        </div>

        <h1 className="text-3xl md:text-5xl font-black text-primary uppercase leading-tight mb-8">
          {post.title}
        </h1>

        <div
          className="prose prose-lg max-w-none text-primary/80
            [&_h2]:text-2xl [&_h2]:font-black [&_h2]:text-primary [&_h2]:uppercase [&_h2]:mt-10 [&_h2]:mb-4
            [&_p]:text-lg [&_p]:leading-relaxed [&_p]:mb-6"
          dangerouslySetInnerHTML={{ __html: post.content }}
        />
      </article>

      <Footer />
    </div>
  );
};

export default BlogPost;
