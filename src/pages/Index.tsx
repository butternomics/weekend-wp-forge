import React from 'react';
import Navbar from "@/components/Navbar";
import Hero from "@/components/Hero";
import PartnerLogos from "@/components/PartnerLogos";
import EventSchedule from "@/components/EventSchedule";
import ParadeSection from "@/components/ParadeSection";
import FAQSection from "@/components/FAQSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <Hero />
      <PartnerLogos />
      <EventSchedule />
      <ParadeSection />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default Index;
