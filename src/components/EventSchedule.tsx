import React from 'react';
import { motion } from 'framer-motion';
import flyerGala from '@/assets/flyer-gala.jpeg';
import flyerTakeover from '@/assets/flyer-takeover.jpeg';
import flyerBlockparty from '@/assets/flyer-blockparty.jpeg';
import flyerParade from '@/assets/flyer-parade.jpeg';
import flyerNightparty from '@/assets/flyer-nightparty.jpeg';
import flyerVolunteers from '@/assets/flyer-volunteers.jpeg';

const events = [
  {
    title: "The 404 Scholarship Gala",
    time: "Thursday, April 2 • 6:00 PM – 10:00 PM",
    location: "Monday Night Brewery, The Garage",
    description: "An evening celebrating Atlanta's leaders, creators, and changemakers.",
    flyer: flyerGala,
    buttonText: "BUY TICKETS!",
    buttonLink: "https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala",
  },
  {
    title: "404 City Takeover",
    time: "Friday, April 3 • Details TBD",
    location: "Across Atlanta",
    description: "A citywide lineup of partner events and activations. Pull up to what's happening all across the city.",
    flyer: flyerTakeover,
    buttonText: null,
    buttonLink: null,
  },
  {
    title: "404 Day Block Party",
    time: "Saturday, April 4 • 12:00 PM – 6:00 PM",
    location: "Underground Atlanta",
    description: "The daytime main event. Music, energy, and Atlanta showing out together.",
    flyer: flyerBlockparty,
    buttonText: "GET FREE TICKET!",
    buttonLink: "https://posh.vip/e/404-day-weekend-block-party-underground-atlanta",
  },
  {
    title: "404 Day Parade",
    time: "Saturday, April 4 • 10:00 AM – Noon",
    location: "Downtown Atlanta, Peachtree Street",
    description: "Atlanta takes the streets. Floats, walking groups, bands, and the city in motion.",
    flyer: flyerParade,
    buttonText: "REGISTER HERE!",
    buttonLink: "https://www.eventeny.com/events/2nd-404-day-parade-27361/",
  },
  {
    title: "404 Night Party",
    time: "Saturday, April 4 • 10:00 PM – 2:00 AM",
    location: "The Stave Room",
    description: "The official after dark celebration. Late night vibes, big Atlanta moment.",
    flyer: flyerNightparty,
    buttonText: "GET FREE TICKET!",
    buttonLink: "https://posh.vip/e/404-day-celebration-the-stave-room",
  },
  {
    title: "Volunteers + Vendors Needed!",
    time: "All Weekend",
    location: "Various Locations",
    description: "Be part of the movement. Sign up to volunteer or vend at 404 Day Weekend.",
    flyer: flyerVolunteers,
    buttonText: "SIGN UP!",
    buttonLink: "https://www.eventeny.com/events/vendor/?id=43249",
  },
];

const EventSchedule = () => {
  return (
    <section id="schedule" className="w-full bg-background py-20 px-4">
      <div className="max-w-6xl mx-auto">
        <h2 className="text-3xl md:text-5xl font-black text-center text-primary mb-4 uppercase">
          Mark Your Calendar
        </h2>
        <p className="text-center text-2xl md:text-4xl font-black text-primary mb-4">
          April 1 – 5, 2026
        </p>
        <p className="text-center text-lg text-muted-foreground max-w-3xl mx-auto mb-16">
          Get ready for a weekend full of celebration, culture, and connection!
        </p>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {events.map((event, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: index * 0.08 }}
              className="group flex flex-col bg-card border border-border overflow-hidden shadow-md hover:shadow-xl transition-shadow"
            >
              {/* Flyer Image */}
              <div className="relative aspect-square overflow-hidden">
                <img
                  src={event.flyer}
                  alt={event.title}
                  className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                />
              </div>

              {/* Content */}
              <div className="flex flex-col flex-1 p-5 space-y-2">
                <h3 className="text-lg font-black text-primary uppercase leading-tight">
                  {event.title}
                </h3>
                <p className="text-sm font-bold text-primary/70">{event.time}</p>
                <p className="text-xs text-muted-foreground uppercase tracking-wider">{event.location}</p>
                <p className="text-sm text-muted-foreground leading-relaxed flex-1">{event.description}</p>
                {event.buttonText && event.buttonLink && (
                  <a
                    href={event.buttonLink}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="inline-block mt-3 bg-primary text-secondary px-6 py-2.5 text-sm font-bold uppercase tracking-wider hover:bg-primary/90 transition-all text-center shadow-md hover:shadow-lg"
                  >
                    {event.buttonText}
                  </a>
                )}
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default EventSchedule;
