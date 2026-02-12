import React from 'react';
import Navbar from '@/components/Navbar';
import EventSchedule from '@/components/EventSchedule';
import Footer from '@/components/Footer';

const Events = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <header className="bg-primary text-secondary py-16 px-4 text-center">
        <h1 className="text-4xl md:text-6xl font-black uppercase tracking-tight">Event Schedule</h1>
        <p className="text-lg md:text-xl mt-4 text-secondary/80 uppercase tracking-widest">April 1–5, 2026 • Atlanta, GA</p>
      </header>
      <EventSchedule />
      <Footer />
    </div>
  );
};

export default Events;
