import React from 'react';
import { motion } from 'framer-motion';

const Hero = () => {
  return (
    <div className="relative w-full min-h-[90vh] flex flex-col items-center justify-center bg-muted/30 overflow-hidden py-20 px-4">
      {/* Background Pattern */}
      <div className="absolute inset-0 bg-[url('/placeholder.svg')] opacity-5 bg-center bg-cover pointer-events-none" />
      
      <motion.div 
        initial={{ opacity: 0, y: 30 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.8 }}
        className="text-center z-10 max-w-5xl mx-auto flex flex-col items-center"
      >
        <div className="mb-12 relative transform hover:scale-105 transition-transform duration-500 cursor-default">
          {/* 3D Logo Representation */}
          <div className="relative">
            {/* Main Block */}
            <div className="bg-primary text-white p-8 md:p-12 transform -skew-y-3 shadow-[10px_10px_0px_0px_rgba(0,0,0,0.2)] border-4 border-secondary relative z-10">
              <h1 className="text-7xl md:text-9xl font-black leading-[0.85] tracking-tighter text-center">
                <span className="block text-secondary drop-shadow-md">404</span>
                <span className="block text-white drop-shadow-md">DAY!</span>
              </h1>
            </div>
            
            {/* "WEEKEND" Banner */}
            <div className="absolute -bottom-6 left-1/2 -translate-x-1/2 w-[120%] bg-secondary text-primary py-2 md:py-4 transform -skew-y-3 shadow-lg z-20 border-b-4 border-r-4 border-primary/20">
              <h2 className="text-3xl md:text-5xl font-black text-center tracking-widest uppercase">
                WEEKEND
              </h2>
            </div>
          </div>
          
          {/* Year */}
          <div className="mt-12 text-center">
             <span className="text-4xl md:text-6xl font-black text-primary/80 tracking-widest">2026</span>
          </div>
        </div>

        <motion.div 
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          transition={{ delay: 0.5, duration: 0.8 }}
          className="space-y-6 mt-8"
        >
          <h3 className="text-2xl md:text-4xl font-black text-primary uppercase tracking-wide max-w-3xl mx-auto leading-tight">
            Celebrating Atlanta's Culture, Creativity, and Community
          </h3>
          
          <div className="inline-block bg-primary text-secondary px-8 py-3 text-xl md:text-2xl font-bold rounded-sm shadow-lg uppercase tracking-wider">
            April 1–5, 2026
          </div>
        </motion.div>
      </motion.div>
    </div>
  );
};

export default Hero;
