import React from 'react';
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

const events = [
  {
    day: "Thursday",
    date: "April 2, 2026",
    title: "The 404 Scholarship Gala",
    time: "6:00 PM – 10:00 PM",
    location: "Monday Night Brewery, The Garage",
    description: "An evening celebrating Atlanta's leaders, creators, and changemakers.",
    image: "https://images.unsplash.com/photo-1519750157634-b6d493a0f77c?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3",
    buttonText: "BUY TICKETS",
  },
  {
    day: "Friday",
    date: "April 3, 2026",
    title: "404 City Takeover",
    time: "Details TBD",
    location: "Across Atlanta",
    description: "A citywide lineup of partner events and activations. Pull up to what's happening all across the city.",
    image: "https://images.unsplash.com/photo-1496337589254-7e19d01cec44?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3",
    buttonText: null,
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Day Block Party",
    time: "12:00 PM – 6:00 PM",
    location: "Underground Atlanta",
    description: "The daytime main event. Music, energy, and Atlanta showing out together.",
    image: "https://images.unsplash.com/photo-1533174072545-e8d4aa97edf9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3",
    buttonText: "GET FREE TICKET",
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Day Parade",
    time: "10:00 AM – Noon",
    location: "Downtown Atlanta, Peachtree Street",
    description: "Atlanta takes the streets. Floats, walking groups, bands, and the city in motion.",
    image: "https://images.unsplash.com/photo-1531058020387-3be344556be6?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3",
    buttonText: "REGISTER HERE",
  },
  {
    day: "Saturday",
    date: "April 4, 2026",
    title: "404 Night Party",
    time: "10:00 PM – 2:00 AM",
    location: "@ THE STAVE ROOM",
    description: "The official after dark celebration. Late night vibes, big Atlanta moment.",
    image: "https://images.unsplash.com/photo-1514525253440-b393452e8d26?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3",
    buttonText: "GET FREE TICKET",
  },
];

const EventSchedule = () => {
  return (
    <div id="schedule" className="w-full bg-white py-20 px-4">
      <div className="max-w-6xl mx-auto">
        <h2 className="text-4xl md:text-6xl font-black text-center text-primary mb-16 uppercase">
          Mark Your Calendar
        </h2>
        
        <div className="space-y-24">
          {events.map((event, index) => (
            <div key={index} className={`flex flex-col ${index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse'} gap-8 md:gap-16 items-center`}>
              <div className="w-full md:w-1/2 overflow-hidden shadow-2xl rounded-sm group">
                 <div className="relative aspect-video overflow-hidden">
                    <img 
                      src={event.image} 
                      alt={event.title}
                      className="object-cover w-full h-full transform transition-transform duration-700 group-hover:scale-110"
                    />
                    <div className="absolute inset-0 bg-primary/20 group-hover:bg-transparent transition-colors duration-300" />
                 </div>
              </div>
              
              <div className="w-full md:w-1/2 text-center md:text-left space-y-4">
                <div className="inline-block bg-secondary text-primary px-4 py-1 font-bold text-lg uppercase tracking-wider mb-2">
                  {event.day}
                </div>
                <h3 className="text-3xl md:text-5xl font-black text-primary uppercase leading-none">
                  {event.title}
                </h3>
                <div className="text-xl md:text-2xl font-bold text-primary/80">
                  {event.date}
                </div>
                <div className="text-lg font-medium text-muted-foreground border-l-4 border-secondary pl-4 py-2 bg-muted/30">
                  <p>{event.time}</p>
                  <p className="uppercase tracking-wide">{event.location}</p>
                </div>
                <p className="text-lg text-primary/70 leading-relaxed">
                  {event.description}
                </p>
                {event.buttonText && (
                  <button className="mt-6 bg-primary text-white px-8 py-3 text-lg font-bold uppercase tracking-wider hover:bg-primary/90 transition-colors shadow-lg hover:shadow-xl translate-y-0 hover:-translate-y-1 transform duration-200">
                    {event.buttonText}
                  </button>
                )}
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default EventSchedule;
