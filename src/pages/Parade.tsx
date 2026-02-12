import React from 'react';
import Navbar from '@/components/Navbar';
import PageHeader from '@/components/PageHeader';
import ParadeSection from '@/components/ParadeSection';
import FAQSection from '@/components/FAQSection';
import Footer from '@/components/Footer';

const Parade = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <PageHeader title="404 Day Parade" subtitle="Saturday, April 4, 2026 • Downtown Atlanta" />
      <ParadeSection />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default Parade;
