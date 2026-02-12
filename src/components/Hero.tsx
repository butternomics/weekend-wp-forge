import React from 'react';
import { motion } from 'framer-motion';
import { Link } from 'react-router-dom';
import logoMain from '@/assets/logo-main.png';
import heroBg from '@/assets/hero-bg.jpg';

const Hero = () => {
  const actions = [
    { title: "Event Schedule", to: "/events" },
    { title: "Partner With Us", to: "/#contact" },
    { title: "Parade Info & FAQ", href: "https://www.eventeny.com/events/2nd-404-day-parade-27361/" },
    { title: "Vendor Applications", href: "https://docs.google.com/forms/d/e/1FAIpQLSdNfOTJ-LjDyE1GaD1GIdhS3tPRhF11ieaKoExBF6TnDogRcA/viewform" },
    { title: "Be a Volunteer", href: "https://www.eventeny.com/events/vendor/?id=43249" },
  ];

  return (
    <div className="relative w-full min-h-[100vh] flex flex-col items-center justify-center overflow-hidden">
      {/* Background Image */}
      <div
        className="absolute inset-0 bg-cover bg-center"
        style={{ backgroundImage: `url(${heroBg})` }}
      />
      <div className="absolute inset-0 bg-gradient-to-b from-primary/40 via-muted/60 to-muted/80" />

      <motion.div
        initial={{ opacity: 0, y: 30 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.8 }}
        className="relative z-10 text-center flex flex-col items-center px-4 py-20 max-w-5xl mx-auto"
      >
        {/* Logo */}
        <img
          src={logoMain}
          alt="404 Day Weekend 2026"
          className="w-48 md:w-72 lg:w-80 mb-8 drop-shadow-2xl"
        />

        {/* Title */}
        <h1 className="text-5xl md:text-7xl lg:text-8xl font-black text-primary uppercase tracking-tighter leading-[0.9] mb-6 drop-shadow-md">
          404 Day<br />Weekend 2026
        </h1>

        <p className="text-lg md:text-xl text-primary/80 uppercase tracking-[0.3em] mb-2 font-medium">
          Celebrating Atlanta's Culture, Creativity, and Community
        </p>
        <p className="text-xl md:text-2xl font-bold text-primary uppercase tracking-[0.2em] mb-12">
          April 1–5, 2026
        </p>

        {/* Action Buttons - matching original layout */}
        <div className="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full max-w-3xl mb-4">
          {actions.slice(0, 3).map((action) =>
            action.href ? (
              <a
                key={action.title}
                href={action.href}
                target="_blank"
                rel="noopener noreferrer"
                className="bg-primary text-secondary px-6 py-4 text-sm md:text-base font-bold uppercase tracking-widest hover:bg-primary/90 transition-all hover:-translate-y-1 transform duration-200 shadow-xl text-center"
              >
                {action.title}
              </a>
            ) : (
              <Link
                key={action.title}
                to={action.to!}
                className="bg-primary text-secondary px-6 py-4 text-sm md:text-base font-bold uppercase tracking-widest hover:bg-primary/90 transition-all hover:-translate-y-1 transform duration-200 shadow-xl text-center"
              >
                {action.title}
              </Link>
            )
          )}
        </div>
        <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full max-w-2xl">
          {actions.slice(3).map((action) => (
            <a
              key={action.title}
              href={action.href}
              target="_blank"
              rel="noopener noreferrer"
              className="bg-primary text-secondary px-6 py-4 text-sm md:text-base font-bold uppercase tracking-widest hover:bg-primary/90 transition-all hover:-translate-y-1 transform duration-200 shadow-xl text-center"
            >
              {action.title}
            </a>
          ))}
        </div>
      </motion.div>
    </div>
  );
};

export default Hero;
