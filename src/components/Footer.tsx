import React from 'react';

const Footer = () => {
  return (
    <footer className="w-full bg-primary text-white py-16 px-4">
      <div className="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
          <h3 className="text-3xl font-black uppercase mb-6 text-secondary">404 Day Weekend</h3>
          <p className="text-lg opacity-80 mb-6 max-w-md">
            Celebrating Atlanta's culture, creativity, and community. Join us for a weekend of events that showcase the best of our city.
          </p>
          <div className="flex gap-4">
            <a href="#" className="bg-secondary text-primary px-4 py-2 font-bold hover:bg-white transition-colors">
              Instagram
            </a>
            <a href="#" className="bg-secondary text-primary px-4 py-2 font-bold hover:bg-white transition-colors">
              Twitter
            </a>
            <a href="#" className="bg-secondary text-primary px-4 py-2 font-bold hover:bg-white transition-colors">
              Facebook
            </a>
          </div>
        </div>
        
        <div className="flex flex-col gap-4">
          <h4 className="text-xl font-bold uppercase text-secondary">Contact Us</h4>
          <p className="text-lg opacity-80">
            For additional questions, please email us at <br/>
            <a href="mailto:official404day@gmail.com" className="underline hover:text-secondary">official404day@gmail.com</a>
          </p>
          
          <div className="mt-8">
            <h4 className="text-xl font-bold uppercase text-secondary mb-4">Parade Application Links</h4>
            <div className="flex flex-wrap gap-2">
              {['Small Business', 'Nonprofit', 'Schools', 'Walking Groups', 'Volunteers'].map((item) => (
                <a key={item} href="#" className="text-sm border border-white/30 px-3 py-1 hover:border-secondary hover:text-secondary transition-colors">
                  {item}
                </a>
              ))}
            </div>
          </div>
        </div>
      </div>
      <div className="max-w-6xl mx-auto mt-16 pt-8 border-t border-white/10 text-center opacity-50 text-sm">
        © 2026 404 Day Weekend. All rights reserved.
      </div>
    </footer>
  );
};

export default Footer;
