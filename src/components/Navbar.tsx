import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import { Menu, X } from 'lucide-react';
import logoMain from '@/assets/logo-main.png';

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);

  const navLinks = [
    { label: 'Home', to: '/' },
    { label: 'Events', to: '/events' },
    { label: 'Parade', to: '/parade' },
    { label: '404 Fund', to: '/404-fund' },
    { label: 'Blog', to: '/blog' },
    { label: 'Partner With Us', to: '/#contact' },
  ];

  return (
    <nav className="w-full bg-primary text-primary-foreground sticky top-0 z-50 shadow-lg">
      <div className="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        <Link to="/" className="flex items-center gap-3">
          <img src={logoMain} alt="404 Day Weekend 2026" className="h-12 md:h-16 w-auto" />
        </Link>

        {/* Desktop Nav */}
        <div className="hidden md:flex items-center gap-8">
          {navLinks.map((link) => (
            <Link
              key={link.label}
              to={link.to}
              className="text-sm font-bold uppercase tracking-widest text-secondary hover:text-white transition-colors"
            >
              {link.label}
            </Link>
          ))}
          <a
            href="https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala"
            target="_blank"
            rel="noopener noreferrer"
            className="bg-secondary text-primary px-5 py-2 text-sm font-bold uppercase tracking-wider hover:bg-white transition-colors"
          >
            Get Tickets
          </a>
        </div>

        {/* Mobile toggle */}
        <button
          onClick={() => setIsOpen(!isOpen)}
          className="md:hidden text-secondary"
          aria-label="Toggle menu"
        >
          {isOpen ? <X size={28} /> : <Menu size={28} />}
        </button>
      </div>

      {/* Mobile Nav */}
      {isOpen && (
        <div className="md:hidden bg-primary border-t border-secondary/20 px-4 pb-6">
          {navLinks.map((link) => (
            <Link
              key={link.label}
              to={link.to}
              onClick={() => setIsOpen(false)}
              className="block py-3 text-lg font-bold uppercase tracking-wider text-secondary hover:text-white transition-colors border-b border-secondary/10"
            >
              {link.label}
            </Link>
          ))}
          <a
            href="https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala"
            target="_blank"
            rel="noopener noreferrer"
            className="block mt-4 bg-secondary text-primary px-5 py-3 text-center text-lg font-bold uppercase tracking-wider"
          >
            Get Tickets
          </a>
        </div>
      )}
    </nav>
  );
};

export default Navbar;
