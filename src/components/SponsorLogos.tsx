import React from 'react';
import partnerLogos from '@/assets/partner-logos.png';

// To add a new sponsor, simply add an object with src (imported image) and alt text.
// Example:
// import sponsorLogo from '@/assets/sponsor-name.png';
// Then add { src: sponsorLogo, alt: 'Sponsor Name', href: 'https://...' } to the array.

const sponsors: { src: string; alt: string; href?: string }[] = [
  // Add individual sponsor logos here as you get them.
  // { src: sponsorLogo, alt: 'Sponsor Name', href: 'https://sponsor.com' },
];

const SponsorLogos = () => {
  return (
    <section className="w-full bg-muted py-16 px-4">
      <div className="max-w-6xl mx-auto">
        <h3 className="text-center text-sm font-bold uppercase tracking-[0.3em] text-muted-foreground mb-10">
          Our Partners & Sponsors
        </h3>

        {/* Main partner banner */}
        <div className="flex items-center justify-center mb-10">
          <img
            src={partnerLogos}
            alt="Partners: Atlanta Influences Everything, Butter ATL, Finish First, Trap Music Museum"
            className="w-full max-w-3xl h-auto"
          />
        </div>

        {/* Individual sponsor logo grid - auto-spaces and wraps cleanly */}
        {sponsors.length > 0 && (
          <div className="flex flex-wrap items-center justify-center gap-8 md:gap-12">
            {sponsors.map((sponsor, i) => (
              <div key={i} className="flex-shrink-0">
                {sponsor.href ? (
                  <a href={sponsor.href} target="_blank" rel="noopener noreferrer">
                    <img
                      src={sponsor.src}
                      alt={sponsor.alt}
                      className="h-12 md:h-16 w-auto max-w-[160px] object-contain opacity-80 hover:opacity-100 transition-opacity"
                    />
                  </a>
                ) : (
                  <img
                    src={sponsor.src}
                    alt={sponsor.alt}
                    className="h-12 md:h-16 w-auto max-w-[160px] object-contain opacity-80"
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
