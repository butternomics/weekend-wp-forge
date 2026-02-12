import React from 'react';
import Navbar from '@/components/Navbar';
import PageHeader from '@/components/PageHeader';
import EventSchedule from '@/components/EventSchedule';
import Footer from '@/components/Footer';

const Events = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <PageHeader title="Event Schedule" subtitle="April 1–5, 2026 • Atlanta, GA" />
      <EventSchedule />
      <Footer />
    </div>
  );
};

export default Events;
