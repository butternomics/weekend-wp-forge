import React from 'react';
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const FAQSection = () => {
  return (
    <div id="faq" className="w-full bg-muted py-20 px-4">
      <div className="max-w-4xl mx-auto">
        <h2 className="text-4xl md:text-5xl font-black text-center text-primary mb-12 uppercase">
          Parade Info & FAQ
        </h2>

        <div className="bg-white p-6 md:p-12 shadow-xl rounded-sm">
          <Accordion type="single" collapsible className="w-full">
            <AccordionItem value="item-1">
              <AccordionTrigger className="text-xl md:text-2xl font-bold text-primary">
                What is the 404 Day Parade?
              </AccordionTrigger>
              <AccordionContent className="text-lg text-muted-foreground leading-relaxed">
                The 404 Day Parade is an annual celebration dedicated to showcasing Atlanta's vibrant culture, diversity, and creativity. This family-friendly event features a stunning array of floats, walking groups, music, dance, and community spirit as participants march through the heart of the city.
              </AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-2">
              <AccordionTrigger className="text-xl md:text-2xl font-bold text-primary">
                When and where will the parade take place?
              </AccordionTrigger>
              <AccordionContent className="text-lg text-muted-foreground leading-relaxed">
                The parade will take place on Saturday, April 4, 2026, in Downtown Atlanta. The route will begin at Ralph McGill Ave & Cortland St. and end at the intersection of Pryor St and MLK near Underground Atlanta.
              </AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-3">
              <AccordionTrigger className="text-xl md:text-2xl font-bold text-primary">
                Is there an entry fee to attend?
              </AccordionTrigger>
              <AccordionContent className="text-lg text-muted-foreground leading-relaxed">
                No, the 404 Day Parade is FREE and open to the public.
              </AccordionContent>
            </AccordionItem>

            <AccordionItem value="item-4">
              <AccordionTrigger className="text-xl md:text-2xl font-bold text-primary">
                How can I participate?
              </AccordionTrigger>
              <AccordionContent className="text-lg text-muted-foreground leading-relaxed">
                Individuals, businesses, and organizations can apply to participate as float entries, performers, or volunteers. Applications can be submitted through our official website.
              </AccordionContent>
            </AccordionItem>
          </Accordion>
        </div>
      </div>
    </div>
  );
};

export default FAQSection;
