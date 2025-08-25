import { Button } from "@/components/ui/button";
import { ArrowRight, TrendingUp, Search, Target } from "lucide-react";
import heroImage from "@/assets/hero-image.jpg";

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center justify-center bg-gradient-hero overflow-hidden">
      {/* Background Elements */}
      <div className="absolute inset-0 opacity-10">
        <img 
          src={heroImage} 
          alt="Digital Marketing Growth" 
          className="w-full h-full object-cover"
        />
      </div>
      
      {/* Floating Elements */}
      <div className="absolute top-20 left-10 animate-fade-in" style={{animationDelay: '0.5s'}}>
        <div className="bg-success/20 p-3 rounded-full">
          <TrendingUp className="w-6 h-6 text-success" />
        </div>
      </div>
      
      <div className="absolute top-32 right-16 animate-fade-in" style={{animationDelay: '0.8s'}}>
        <div className="bg-primary-light/20 p-3 rounded-full">
          <Search className="w-6 h-6 text-primary-light" />
        </div>
      </div>
      
      <div className="absolute bottom-32 left-20 animate-fade-in" style={{animationDelay: '1.1s'}}>
        <div className="bg-success-light/30 p-3 rounded-full">
          <Target className="w-6 h-6 text-success" />
        </div>
      </div>

      {/* Main Content */}
      <div className="container mx-auto px-6 lg:px-8 text-center relative z-10">
        <div className="max-w-4xl mx-auto">
          <h1 className="text-5xl lg:text-7xl font-bold text-primary-foreground mb-6 animate-fade-up">
            Transforme Seu Negócio em
            <span className="block bg-gradient-to-r from-success to-success-light bg-clip-text text-transparent">
              Líder do Mercado
            </span>
          </h1>
          
          <p className="text-xl lg:text-2xl text-primary-foreground/80 mb-8 animate-fade-up" style={{animationDelay: '0.3s'}}>
            Metodologia Google 2.0: Aumente sua visibilidade 100% orgânica e 
            torne-se a empresa TOP da sua cidade e região
          </p>

          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-up" style={{animationDelay: '0.6s'}}>
            <Button variant="success" size="xl" className="group">
              Quero Dominar o Google
              <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" />
            </Button>
            
            <Button variant="outline" size="xl" className="bg-white/10 border-white/30 text-white hover:bg-white/20">
              Ver Resultados
            </Button>
          </div>

          {/* Stats */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 animate-fade-up" style={{animationDelay: '0.9s'}}>
            <div className="text-center">
              <div className="text-4xl font-bold text-success">+300%</div>
              <div className="text-primary-foreground/70">Aumento em Leads</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-success">#1</div>
              <div className="text-primary-foreground/70">Posição no Google</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-success">100%</div>
              <div className="text-primary-foreground/70">Orgânico</div>
            </div>
          </div>
        </div>
      </div>

      {/* Bottom Wave */}
      <div className="absolute bottom-0 left-0 w-full">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" className="relative block w-full h-16">
          <path d="M1200 0L0 0 892.31 114.72 1200 0z" className="fill-background"></path>
        </svg>
      </div>
    </section>
  );
};

export default Hero;