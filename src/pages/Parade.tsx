import React from 'react';
import Navbar from '@/components/Navbar';
import ParadeSection from '@/components/ParadeSection';
import FAQSection from '@/components/FAQSection';
import Footer from '@/components/Footer';

const Parade = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <header className="bg-primary text-secondary py-16 px-4 text-center">
        <h1 className="text-4xl md:text-6xl font-black uppercase tracking-tight">404 Day Parade</h1>
        <p className="text-lg md:text-xl mt-4 text-secondary/80 uppercase tracking-widest">Saturday, April 4, 2026 • Downtown Atlanta</p>
      </header>
      <ParadeSection />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default Parade;
