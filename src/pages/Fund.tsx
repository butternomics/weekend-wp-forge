import React from 'react';
import { motion } from 'framer-motion';
import Navbar from '@/components/Navbar';
import PageHeader from '@/components/PageHeader';
import SponsorLogos from '@/components/SponsorLogos';
import Footer from '@/components/Footer';
import logoMain from '@/assets/logo-main.png';
import logo404Fund from '@/assets/logo-404fund.webp';
import fundImpact from '@/assets/fund-impact.jpg';
import lagerImage from '@/assets/404-lager.png';
import logoMondayNight from '@/assets/logo-mondaynight.png';
import logoCFGA from '@/assets/logo-cfga.png';
import logoAUC from '@/assets/logo-auc.jpeg';

const Fund = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navbar />
      <PageHeader title="The 404 Fund" subtitle="Supporting Atlanta's Future, One Community at a Time" />

      {/* Mission */}
      <section className="w-full bg-background py-20 px-4">
        <div className="max-w-5xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center"
          >
            <div>
              <span className="bg-secondary text-primary px-4 py-1 text-xs font-bold uppercase tracking-widest">Our Mission</span>
              <h2 className="text-3xl md:text-4xl font-black text-primary uppercase mt-4 mb-6">
                Supporting 404 Day = Supporting the 404 Fund
              </h2>
              <p className="text-lg text-muted-foreground leading-relaxed mb-4">
                The 404 Fund is a non-profit in partnership with the Community Foundation For Greater Atlanta. It is the philanthropic arm of 404 Day Weekend.
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed mb-6">
                This fund is dedicated to enhancing life in Atlanta by offering financial support to organizations focused on <strong className="text-primary">education</strong>, <strong className="text-primary">affordable housing</strong>, <strong className="text-primary">food insecurity</strong>, and <strong className="text-primary">mental health</strong>.
              </p>
              <p className="text-sm text-muted-foreground italic">
                A portion of the proceeds from each 404 Day Weekend event goes to The 404 Fund.
              </p>
            </div>
            <div className="flex items-center justify-center bg-primary p-12 rounded-lg">
              <img src={logo404Fund} alt="The 404 Fund" className="w-full max-w-xs h-auto" />
            </div>
          </motion.div>
        </div>
      </section>

      {/* Impact Stats */}
      <section className="w-full bg-primary py-20 px-4">
        <div className="max-w-5xl mx-auto text-center">
          <h2 className="text-3xl md:text-4xl font-black text-secondary uppercase mb-12">
            Economic Impact
          </h2>
          <div className="grid grid-cols-1 sm:grid-cols-3 gap-8 mb-12">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0 }}
              className="text-center"
            >
              <p className="text-5xl md:text-6xl font-black text-secondary">100K+</p>
              <p className="text-secondary/70 uppercase tracking-wider text-sm mt-2">Total Attendees</p>
            </motion.div>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.1 }}
              className="text-center"
            >
              <p className="text-5xl md:text-6xl font-black text-secondary">$2.7M+</p>
              <p className="text-secondary/70 uppercase tracking-wider text-sm mt-2">Economic Impact Since 2022</p>
            </motion.div>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.2 }}
              className="text-center"
            >
              <p className="text-5xl md:text-6xl font-black text-secondary">$215K+</p>
              <p className="text-secondary/70 uppercase tracking-wider text-sm mt-2">Scholarships Awarded</p>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Programs */}
      <section className="w-full bg-background py-20 px-4">
        <div className="max-w-5xl mx-auto">
          <h2 className="text-3xl md:text-4xl font-black text-primary uppercase text-center mb-12">
            Our Programs
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              className="bg-card border border-border p-8 space-y-4"
            >
              <span className="bg-secondary text-primary px-3 py-1 text-xs font-bold uppercase tracking-widest">Education</span>
              <h3 className="text-2xl font-black text-primary uppercase">404 Day Scholarship</h3>
              <p className="text-muted-foreground leading-relaxed">
                Each year, thousands of students of color in Georgia leave college because of financial gaps as small as $1,500. The 404 Fund Scholarship was created to change that — helping juniors and seniors stay on track to graduate. In partnership with the AUC Consortium, we award scholarships to support the next generation of Atlanta's talent.
              </p>
            </motion.div>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.1 }}
              className="bg-card border border-border p-8 space-y-4"
            >
              <span className="bg-secondary text-primary px-3 py-1 text-xs font-bold uppercase tracking-widest">Small Business</span>
              <h3 className="text-2xl font-black text-primary uppercase">Maynard Jackson Small Business Grant</h3>
              <p className="text-muted-foreground leading-relaxed">
                Small businesses power Georgia's economy, and Atlanta is the hub. The Maynard Jackson Small Business Grant honors that legacy, providing critical support to help local businesses overcome challenges and grow — continuing Maynard Jackson's vision for a thriving, inclusive entrepreneurial ecosystem in Atlanta.
              </p>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Our Friends */}
      <section className="w-full bg-muted/50 py-20 px-4">
        <div className="max-w-5xl mx-auto text-center">
          <h2 className="text-3xl md:text-4xl font-black text-primary uppercase mb-6">
            Our Friends
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto mb-12">
            The 404 Fund is supported by organizations that believe in Atlanta's future.
          </p>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
            <div className="bg-card border border-border p-6 space-y-4 flex flex-col items-center text-center">
              <img src={logoMondayNight} alt="Monday Night Brewing" className="h-16 w-auto object-contain" />
              <h4 className="text-lg font-black text-primary uppercase">Monday Night Brewing</h4>
              <p className="text-sm text-muted-foreground">Monday Night Brewing's specialty-crafted 404 Atlanta Lager dedicates 4.04% of net proceeds to The 404 Fund.</p>
            </div>
            <div className="bg-card border border-border p-6 space-y-4 flex flex-col items-center text-center">
              <img src={logoCFGA} alt="Community Foundation for Greater Atlanta" className="h-16 w-auto object-contain" />
              <h4 className="text-lg font-black text-primary uppercase">Community Foundation for Greater Atlanta</h4>
              <p className="text-sm text-muted-foreground">Committed to advancing prosperity, strengthening our region one neighborhood and neighbor at a time.</p>
            </div>
            <div className="bg-card border border-border p-6 space-y-4 flex flex-col items-center text-center">
              <img src={logoAUC} alt="AUC Consortium" className="h-16 w-auto object-contain" />
              <h4 className="text-lg font-black text-primary uppercase">AUC Consortium</h4>
              <p className="text-sm text-muted-foreground">Spelman College, Morehouse College, Morehouse School of Medicine, and Clark Atlanta University — partnering to award academic scholarships.</p>
            </div>
          </div>
        </div>
      </section>

      {/* 404 Lager Section */}
      <section className="w-full bg-background py-20 px-4">
        <div className="max-w-5xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center"
          >
            <div className="overflow-hidden shadow-xl border border-border">
              <img src={lagerImage} alt="404 Atlanta Lager by Monday Night Brewing" className="w-full h-auto" />
            </div>
            <div>
              <span className="bg-secondary text-primary px-4 py-1 text-xs font-bold uppercase tracking-widest">Partnership</span>
              <h2 className="text-3xl md:text-4xl font-black text-primary uppercase mt-4 mb-6">
                404 Day × Monday Night Brewing
              </h2>
              <p className="text-lg text-muted-foreground leading-relaxed mb-4">
                In 2024, Monday Night Brewing launched <strong className="text-primary">404 Atlanta Lager</strong>.
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed mb-4">
                Monday Night Brewing is dedicating <strong className="text-primary">4.04% of net proceeds</strong> from 404 Atlanta Lager to The 404 Fund.
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed">
                This non-profit entity supports: scholarships and educational grants; youth education and employment initiatives; housing and food insecurity services; and mental health programs.
              </p>
            </div>
          </motion.div>
        </div>
      </section>

      {/* CTA */}
      <section className="w-full bg-primary py-16 px-4 text-center">
        <div className="max-w-3xl mx-auto">
          <img src={logoMain} alt="404 Day Weekend" className="w-24 mx-auto mb-6" />
          <h2 className="text-3xl md:text-4xl font-black text-secondary uppercase mb-4">
            Support the 404 Fund
          </h2>
          <p className="text-secondary/70 text-lg mb-8">
            Attend the 3rd Annual 404 Fund Scholarship Gala on April 2, 2026 at Monday Night Brewery.
          </p>
          <a
            href="https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-block bg-secondary text-primary px-10 py-4 text-lg font-bold uppercase tracking-wider hover:bg-white transition-colors shadow-xl"
          >
            Get Gala Tickets
          </a>
        </div>
      </section>

      <SponsorLogos />
      <Footer />
    </div>
  );
};

export default Fund;
