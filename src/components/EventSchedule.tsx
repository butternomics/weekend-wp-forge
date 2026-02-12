import React from 'react';
import { motion } from 'framer-motion';
import iconGala from '@/assets/icon-gala.png';
import iconTakeover from '@/assets/icon-takeover.png';
import iconBlockparty from '@/assets/icon-blockparty.png';
import iconParade from '@/assets/icon-parade.png';
import iconNightparty from '@/assets/icon-nightparty.png';

const events = [
  {
    day: "Thursday",
    date: "April 2, 2026",
    title: "The 404 Scholarship Gala",
    time: "6:00 PM – 10:00 PM",
    location: "Monday Night Brewery, The Garage",
    description: "An evening celebrating Atlanta's leaders, creators, and changemakers.",
    icon: iconGala,
    buttonText: "BUY TICKETS!",
    buttonLink: "https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala",
  },
  {
    day: "Friday",
    date: "April 3, 2026",
    title: "404 City Takeover",
    time: "Details TBD",
    location: "Across Atlanta",
    description: "A citywide lineup of partner events and activations. Pull up to what's happening all across the city.",
    icon: iconTakeover,
    buttonText: null,
    buttonLink: null,
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Day Block Party",
    time: "12:00 PM – 6:00 PM",
    location: "Underground Atlanta",
    description: "The daytime main event. Music, energy, and Atlanta showing out together.",
    icon: iconBlockparty,
    buttonText: "GET FREE TICKET!",
    buttonLink: "https://posh.vip/e/404-day-weekend-block-party-underground-atlanta",
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Day Parade",
    time: "10:00 AM – Noon",
    location: "Downtown Atlanta, Peachtree Street",
    description: "Atlanta takes the streets. Floats, walking groups, bands, and the city in motion.",
    icon: iconParade,
    buttonText: "REGISTER HERE!",
    buttonLink: "https://www.eventeny.com/events/2nd-404-day-parade-27361/",
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Night Party",
    time: "10:00 PM – 2:00 AM",
    location: "@ THE STAVE ROOM",
    description: "The official after dark celebration. Late night vibes, big Atlanta moment.",
    icon: iconNightparty,
    buttonText: "GET FREE TICKET!",
    buttonLink: "https://posh.vip/e/404-day-celebration-the-stave-room",
  },
];

const EventSchedule = () => {
  return (
    <section id="schedule" className="w-full bg-white py-20 px-4">
      <div className="max-w-6xl mx-auto">
        <h2 className="text-3xl md:text-5xl font-black text-center text-primary mb-4 uppercase">
          Mark Your Calendar
        </h2>
        <p className="text-center text-2xl md:text-4xl font-black text-primary mb-4">
          April 1 – 5, 2026
        </p>
        <p className="text-center text-lg text-muted-foreground max-w-3xl mx-auto mb-16">
          Get ready for a weekend full of celebration, culture, and connection! Whether you're joining us for the 404 Day Gala, walking in the 404 Day Parade, or enjoying the local events, this is Atlanta's moment to shine.
        </p>

        <div className="space-y-16">
          {events.map((event, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: index * 0.1 }}
              className={`flex flex-col ${index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse'} gap-8 md:gap-12 items-center`}
            >
              {/* Icon */}
              <div className="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 flex items-center justify-center">
                <img src={event.icon} alt={event.title} className="w-full h-full object-contain" />
              </div>

              {/* Content */}
              <div className="flex-1 text-center md:text-left space-y-3">
                <div className="inline-block bg-secondary text-primary px-4 py-1 font-bold text-base uppercase tracking-wider">
                  {event.day}
                </div>
                <h3 className="text-2xl md:text-4xl font-black text-primary uppercase leading-none">
                  {event.title}
                </h3>
                <p className="text-lg font-bold text-primary/80">{event.date}</p>
                <div className="text-base text-muted-foreground border-l-4 border-secondary pl-4 py-2">
                  <p>{event.time}</p>
                  <p className="uppercase tracking-wide">{event.location}</p>
                </div>
                <p className="text-base text-primary/70 leading-relaxed">{event.description}</p>
                {event.buttonText && event.buttonLink && (
                  <a
                    href={event.buttonLink}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="inline-block mt-4 bg-primary text-secondary px-8 py-3 text-lg font-bold uppercase tracking-wider hover:bg-primary/90 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1 transform duration-200"
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
