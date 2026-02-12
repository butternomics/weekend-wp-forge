import React from 'react';
import { Button } from "@/components/ui/button";
import { ArrowRight } from "lucide-react";

const ActionGrid = () => {
  const actions = [
    { title: "Event Schedule", href: "#schedule" },
    { title: "Partner with Us", href: "#contact" },
    { title: "Parade Info & FAQ", href: "#faq" },
    { title: "Vendor Applications", href: "#" },
    { title: "Be a Volunteer", href: "#" },
  ];

  return (
    <div className="w-full bg-muted py-16 px-4">
      <div className="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {actions.map((action, index) => (
          <Button
            key={index}
            asChild
            className="h-24 md:h-32 text-xl md:text-2xl font-bold bg-primary hover:bg-primary/90 text-white uppercase tracking-wider rounded-none shadow-lg transition-transform hover:scale-[1.02] duration-200"
          >
            <a href={action.href} className="flex flex-col items-center justify-center gap-2">
              {action.title}
              {index === 0 && <ArrowRight className="w-6 h-6 animate-pulse" />}
            </a>
          </Button>
        ))}
      </div>
    </div>
  );
};

export default ActionGrid;
