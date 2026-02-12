import React from 'react';
import logoMain from '@/assets/logo-main.png';
import heroBg from '@/assets/hero-bg.jpg';

interface PageHeaderProps {
  title: string;
  subtitle: string;
}

const PageHeader = ({ title, subtitle }: PageHeaderProps) => {
  return (
    <header className="relative w-full py-20 px-4 text-center overflow-hidden">
      <div
        className="absolute inset-0 bg-cover bg-center"
        style={{ backgroundImage: `url(${heroBg})` }}
      />
      <div className="absolute inset-0 bg-primary/80" />
      <div className="relative z-10 flex flex-col items-center">
        <img
          src={logoMain}
          alt="404 Day Weekend 2026"
          className="w-28 md:w-40 mb-6 drop-shadow-xl"
        />
        <h1 className="text-4xl md:text-6xl font-black text-secondary uppercase tracking-tight drop-shadow-md">
          {title}
        </h1>
        <p className="text-base md:text-xl mt-4 text-secondary/80 uppercase tracking-widest">
          {subtitle}
        </p>
      </div>
    </header>
  );
};

export default PageHeader;
