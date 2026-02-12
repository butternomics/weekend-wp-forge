import React from 'react';
import partnerLogos from '@/assets/partner-logos.png';
import sponsorShowcase from '@/assets/sponsor-showcase-atlanta.jpg';
import sponsorBeltline from '@/assets/sponsor-beltline.jpg';
import sponsorGrady from '@/assets/sponsor-grady.jpg';

// To add a new sponsor logo:
// 1. Import the image: import sponsorName from '@/assets/sponsor-name.png';
// 2. Add to the sponsors array below: { src: sponsorName, alt: 'Sponsor Name', href: 'https://...' }
// Logos auto-space and wrap cleanly on all screen sizes.

const sponsors: { src: string; alt: string; href?: string }[] = [
  { src: sponsorShowcase, alt: 'Showcase Atlanta' },
  { src: sponsorBeltline, alt: 'Atlanta Beltline' },
  { src: sponsorGrady, alt: 'Grady Health' },
];

const SponsorLogos = () => {
  return (
    <section className="w-full bg-white py-16 px-4">
      <div className="max-w-6xl mx-auto">
        <h3 className="text-center text-xl md:text-2xl font-black uppercase tracking-wider text-primary mb-3">
          Thank You to Our Partners & Sponsors
        </h3>
        <p className="text-center text-sm text-muted-foreground mb-10">
          404 Day Weekend is made possible by the support of these incredible organizations.
        </p>

        {/* Main partner banner */}
        <div className="flex items-center justify-center mb-12">
          <img
            src={partnerLogos}
            alt="Partners: Atlanta Influences Everything, Butter ATL, Finish First, Trap Music Museum"
            className="w-full max-w-3xl h-auto"
          />
        </div>

        {/* Individual sponsor logo grid */}
        {sponsors.length > 0 && (
          <div className="flex flex-wrap items-center justify-center gap-10 md:gap-14">
            {sponsors.map((sponsor, i) => (
              <div key={i} className="flex-shrink-0">
                {sponsor.href ? (
                  <a href={sponsor.href} target="_blank" rel="noopener noreferrer">
                    <img
                      src={sponsor.src}
                      alt={sponsor.alt}
                      className="h-14 md:h-20 w-auto max-w-[180px] object-contain opacity-80 hover:opacity-100 transition-opacity"
                    />
                  </a>
                ) : (
                  <img
                    src={sponsor.src}
                    alt={sponsor.alt}
                    className="h-14 md:h-20 w-auto max-w-[180px] object-contain opacity-80"
                  />
                )}
              </div>
            ))}
          </div>
        )}
      </div>
    </section>
  );
};

export default SponsorLogos;
