import React from 'react';
import { Link } from 'react-router-dom';
import logoParade from '@/assets/logo-parade.png';
import paradeMap from '@/assets/parade-map.jpg';

const applications = [
  { label: 'Small Business', href: 'https://www.eventeny.com/events/vendor/?id=43232' },
  { label: 'Car & Motorcycle Group', href: 'https://www.eventeny.com/events/vendor/?id=43248' },
  { label: 'Corporate Partner', href: 'https://www.eventeny.com/events/vendor/?id=43243' },
  { label: 'Political', href: 'https://www.eventeny.com/events/vendor/?id=43242' },
  { label: 'Nonprofit', href: 'https://www.eventeny.com/events/vendor/?id=43244' },
  { label: 'Walking Group', href: 'https://www.eventeny.com/events/vendor/?id=43246' },
  { label: 'Schools & Marching Band', href: 'https://www.eventeny.com/events/vendor/?id=43247' },
  { label: 'Volunteer', href: 'https://www.eventeny.com/events/vendor/?id=43249' },
];

const ParadeSection = () => {
  return (
    <section className="w-full bg-muted py-20 px-4">
      <div className="max-w-6xl mx-auto">
        {/* Parade Header */}
        <div className="text-center mb-12">
          <img src={logoParade} alt="Atlanta 404 Day Weekend Parade" className="mx-auto w-full max-w-2xl mb-8" />
          <h2 className="text-3xl md:text-5xl font-black text-primary uppercase mb-4">
            Join the 404 Day Parade!
          </h2>
          <p className="text-lg text-muted-foreground max-w-3xl mx-auto mb-2">
            Join the 2nd Annual 404 Day Parade! There's no place like ATL, and no better way to celebrate its culture than during 404 Day Weekend!
          </p>
          <p className="text-lg font-bold text-primary">
            Peachtree Street (Ralph McGill Blvd → Marietta St.) • Saturday, April 4th • 10 AM – 12 PM
          </p>
        </div>

        {/* CTA Buttons */}
        <div className="flex flex-wrap justify-center gap-4 mb-12">
          <a
            href="https://www.eventeny.com/events/2nd-404-day-parade-27361/"
            target="_blank"
            rel="noopener noreferrer"
            className="bg-primary text-secondary px-8 py-4 font-bold uppercase tracking-wider text-lg hover:bg-primary/90 transition-all shadow-lg"
          >
            Parade Registration
          </a>
          <a
            href="https://posh.vip/e/404-day-parade-1"
            target="_blank"
            rel="noopener noreferrer"
            className="bg-secondary text-primary px-8 py-4 font-bold uppercase tracking-wider text-lg hover:bg-secondary/80 transition-all shadow-lg"
          >
            Attend the Parade
          </a>
          <a
            href="https://docs.google.com/presentation/d/1Fkjc6nhXeej4xH8DeOf4cYKSeUp-VnKYsKCnzz-ByPk/edit"
            target="_blank"
            rel="noopener noreferrer"
            className="border-2 border-primary text-primary px-8 py-4 font-bold uppercase tracking-wider text-lg hover:bg-primary hover:text-secondary transition-all"
          >
            Sponsorship Inquiries
          </a>
        </div>

        {/* Map */}
        <div className="max-w-3xl mx-auto mb-16">
          <img src={paradeMap} alt="404 Day Parade Route Map - Downtown Atlanta" className="w-full rounded-sm shadow-2xl" />
        </div>

        {/* Application Links */}
        <div className="text-center">
          <h3 className="text-2xl md:text-3xl font-black text-primary uppercase mb-8">
            Parade Applications
          </h3>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
            {applications.map((app) => (
              <a
                key={app.label}
                href={app.href}
                target="_blank"
                rel="noopener noreferrer"
                className="bg-white border-2 border-primary text-primary px-4 py-3 font-bold text-sm uppercase tracking-wider hover:bg-primary hover:text-secondary transition-all shadow-md text-center"
              >
                {app.label}
              </a>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default ParadeSection;
