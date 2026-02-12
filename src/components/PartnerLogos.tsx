import React from 'react';
import partnerLogos from '@/assets/partner-logos.png';

const PartnerLogos = () => {
  return (
    <div className="w-full bg-white py-10 px-4">
      <div className="max-w-4xl mx-auto flex items-center justify-center">
        <img
          src={partnerLogos}
          alt="Partners: Atlanta Influences Everything, Butter ATL, Finish First, Trap Music Museum"
          className="w-full max-w-3xl h-auto opacity-90"
        />
      </div>
    </div>
  );
};

export default PartnerLogos;
