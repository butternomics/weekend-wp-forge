import React from 'react';
import Hero from "@/components/Hero";
import ActionGrid from "@/components/ActionGrid";
import EventSchedule from "@/components/EventSchedule";
import FAQSection from "@/components/FAQSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Hero />
      <ActionGrid />
      <EventSchedule />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default Index;
