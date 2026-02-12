import React from 'react';
import Navbar from '@/components/Navbar';
import PageHeader from '@/components/PageHeader';
import EventSchedule from '@/components/EventSchedule';
import SponsorLogos from '@/components/SponsorLogos';
import Footer from '@/components/Footer';

const partnerEvents = [
  { title: 'Atlanta Food Festival', date: 'April 3, 2026', href: '#' },
  { title: 'Art on the Beltline', date: 'April 3–5, 2026', href: '#' },
  { title: 'Underground Music Showcase', date: 'April 4, 2026', href: '#' },
  { title: 'Atlanta Comedy Night', date: 'April 4, 2026', href: '#' },
  { title: 'Midtown Jazz Experience', date: 'April 5, 2026', href: '#' },
  { title: 'West End Culture Walk', date: 'April 3, 2026', href: '#' },
];

const Events = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <PageHeader title="Event Schedule" subtitle="April 1–5, 2026 • Atlanta, GA" />

      {/* Featured 404 Day Weekend Events */}
      <div className="w-full bg-background pt-6 pb-0 px-4">
        <div className="max-w-6xl mx-auto">
          <div className="flex items-center gap-4 mb-2">
            <span className="bg-secondary text-primary px-4 py-1 text-xs font-bold uppercase tracking-widest">Featured</span>
            <h2 className="text-2xl md:text-3xl font-black text-primary uppercase">404 Day Weekend Events</h2>
          </div>
          <p className="text-muted-foreground mb-0">Official events produced by the 404 Day Weekend team.</p>
        </div>
      </div>

      <EventSchedule />

      {/* Partner Events */}
      <section className="w-full bg-muted/50 py-16 px-4">
        <div className="max-w-6xl mx-auto">
          <div className="flex items-center gap-4 mb-2">
            <span className="border-2 border-primary text-primary px-4 py-1 text-xs font-bold uppercase tracking-widest">Partner</span>
            <h2 className="text-2xl md:text-3xl font-black text-primary uppercase">Partner Events</h2>
          </div>
          <p className="text-muted-foreground mb-8">Events hosted by our partners and community during 404 Day Weekend.</p>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            {partnerEvents.map((event, i) => (
              <a
                key={i}
                href={event.href}
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center justify-between bg-card border border-border p-5 hover:border-primary/30 hover:shadow-md transition-all group"
              >
                <div>
                  <h3 className="text-base font-bold text-primary uppercase group-hover:text-primary/80 transition-colors">
                    {event.title}
                  </h3>
                  <p className="text-sm text-muted-foreground mt-1">{event.date}</p>
                </div>
                <span className="text-primary/40 group-hover:text-primary transition-colors text-lg ml-4">→</span>
              </a>
            ))}
          </div>
        </div>
      </section>

      <SponsorLogos />
      <Footer />
    </div>
  );
};

export default Events;
