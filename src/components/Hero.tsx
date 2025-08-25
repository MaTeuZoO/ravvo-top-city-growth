import { Button } from "@/components/ui/button";
import { ArrowRight, CheckCircle } from "lucide-react";

const Hero = () => {
  return (
    <section className="py-20 lg:py-32 px-6 lg:px-8 bg-background">
      <div className="container mx-auto">
        <div className="max-w-4xl mx-auto text-center">
          {/* Badge */}
          <div className="inline-flex items-center bg-success/10 text-success px-4 py-2 rounded-full text-sm font-medium mb-8">
            Metodologia Google 2.0
          </div>

          {/* Main Headline */}
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-bold text-foreground mb-6 leading-tight">
            Sua Empresa em
            <span className="block text-primary">1º lugar no Google</span>
          </h1>
          
          {/* Subheading */}
          <p className="text-xl lg:text-2xl text-muted-foreground mb-12 max-w-3xl mx-auto leading-relaxed">
            Aumente sua visibilidade online <strong className="text-foreground">300% de forma 100% orgânica</strong> 
            e transforme-se na referência da sua cidade e região
          </p>

          {/* Benefits List */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 max-w-2xl mx-auto">
            <div className="flex items-center justify-center md:justify-start space-x-3">
              <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
              <span className="text-muted-foreground">Resultados em 30 dias</span>
            </div>
            <div className="flex items-center justify-center md:justify-start space-x-3">
              <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
              <span className="text-muted-foreground">100% orgânico</span>
            </div>
            <div className="flex items-center justify-center md:justify-start space-x-3">
              <CheckCircle className="w-5 h-5 text-success flex-shrink-0" />
              <span className="text-muted-foreground">Garantia total</span>
            </div>
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <Button variant="hero" size="xl" className="group">
              Quero Mais Leads Agora
              <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" />
            </Button>
            
            <Button variant="outline" size="xl">
              Ver Resultados Reais
            </Button>
          </div>

          {/* Stats */}
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 pt-16 border-t border-border">
            <div className="text-center">
              <div className="text-4xl lg:text-5xl font-bold text-primary mb-2">+500</div>
              <div className="text-muted-foreground">Empresas Transformadas</div>
            </div>
            <div className="text-center">
              <div className="text-4xl lg:text-5xl font-bold text-primary mb-2">300%</div>
              <div className="text-muted-foreground">Aumento Médio em Leads</div>
            </div>
            <div className="text-center">
              <div className="text-4xl lg:text-5xl font-bold text-primary mb-2">98%</div>
              <div className="text-muted-foreground">Taxa de Sucesso</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;