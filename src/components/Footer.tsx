import React from 'react';
import { Link } from 'react-router-dom';
import logoMain from '@/assets/logo-main.png';

const Footer = () => {
  return (
    <footer id="contact" className="w-full bg-primary text-primary-foreground py-16 px-4">
      <div className="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
        <div>
          <img src={logoMain} alt="404 Day Weekend" className="w-32 mb-6" />
          <p className="text-base opacity-80 mb-6 max-w-sm">
            Celebrating Atlanta's culture, creativity, and community. Join us for a weekend of events that showcase the best of our city.
          </p>
          <div className="flex gap-3">
            <a href="https://www.instagram.com/butter.atl" target="_blank" rel="noopener noreferrer" className="bg-secondary text-primary px-4 py-2 text-sm font-bold hover:bg-white transition-colors">
              Instagram
            </a>
            <a href="https://twitter.com/atlantainfluenc" target="_blank" rel="noopener noreferrer" className="bg-secondary text-primary px-4 py-2 text-sm font-bold hover:bg-white transition-colors">
              Twitter
            </a>
            <a href="#" className="bg-secondary text-primary px-4 py-2 text-sm font-bold hover:bg-white transition-colors">
              Facebook
            </a>
          </div>
        </div>

        <div>
          <h4 className="text-lg font-bold uppercase text-secondary mb-4">Quick Links</h4>
          <div className="flex flex-col gap-2">
            <Link to="/events" className="text-secondary/80 hover:text-secondary transition-colors">Events</Link>
            <Link to="/parade" className="text-secondary/80 hover:text-secondary transition-colors">Parade</Link>
            <Link to="/blog" className="text-secondary/80 hover:text-secondary transition-colors">Blog</Link>
            <a href="https://www.eventeny.com/events/vendor/?id=43249" target="_blank" rel="noopener noreferrer" className="text-secondary/80 hover:text-secondary transition-colors">Volunteer</a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdNfOTJ-LjDyE1GaD1GIdhS3tPRhF11ieaKoExBF6TnDogRcA/viewform" target="_blank" rel="noopener noreferrer" className="text-secondary/80 hover:text-secondary transition-colors">Vendor Application</a>
          </div>
        </div>

        <div>
          <h4 className="text-lg font-bold uppercase text-secondary mb-4">Contact Us</h4>
          <p className="text-base opacity-80 mb-6">
            For additional questions, please email us at<br />
            <a href="mailto:official404day@gmail.com" className="underline hover:text-secondary font-bold">official404day@gmail.com</a>
          </p>

          <h4 className="text-lg font-bold uppercase text-secondary mb-3">Parade Applications</h4>
          <div className="flex flex-wrap gap-2">
            {[
              { label: 'Small Business', href: 'https://www.eventeny.com/events/vendor/?id=43232' },
              { label: 'Nonprofit', href: 'https://www.eventeny.com/events/vendor/?id=43244' },
              { label: 'Schools', href: 'https://www.eventeny.com/events/vendor/?id=43247' },
              { label: 'Walking Groups', href: 'https://www.eventeny.com/events/vendor/?id=43246' },
              { label: 'Volunteers', href: 'https://www.eventeny.com/events/vendor/?id=43249' },
            ].map((item) => (
              <a
                key={item.label}
                href={item.href}
                target="_blank"
                rel="noopener noreferrer"
                className="text-xs border border-secondary/30 px-3 py-1 hover:border-secondary hover:text-secondary transition-colors"
              >
                {item.label}
              </a>
            ))}
          </div>
        </div>
      </div>
      <div className="max-w-6xl mx-auto mt-16 pt-8 border-t border-secondary/10 text-center opacity-50 text-sm">
        © 2026 404 Day Weekend. All rights reserved.
      </div>
    </footer>
  );
};

export default Footer;
