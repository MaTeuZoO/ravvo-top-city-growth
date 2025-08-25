import { Button } from "@/components/ui/button";
import { ArrowRight, Star, Users, TrendingUp } from "lucide-react";
import heroImage from "@/assets/hero-image.jpg";

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center bg-background overflow-hidden">
      {/* Background Gradient */}
      <div className="absolute inset-0 bg-gradient-to-br from-primary/5 via-background to-success/5"></div>
      
      {/* Decorative Elements */}
      <div className="absolute top-20 right-20 w-72 h-72 bg-gradient-hero rounded-full opacity-10 blur-3xl animate-fade-in"></div>
      <div className="absolute bottom-40 left-20 w-96 h-96 bg-gradient-success rounded-full opacity-10 blur-3xl animate-fade-in" style={{animationDelay: '0.5s'}}></div>

      <div className="container mx-auto px-6 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
          {/* Content Side */}
          <div className="space-y-8 animate-fade-up">
            {/* Badge */}
            <div className="inline-flex items-center bg-gradient-hero text-primary-foreground px-4 py-2 rounded-full text-sm font-medium shadow-medium">
              <Star className="w-4 h-4 mr-2" />
              Metodologia Google 2.0 Exclusiva
            </div>

            {/* Main Headline */}
            <div className="space-y-4">
              <h1 className="text-5xl lg:text-6xl xl:text-7xl font-bold text-foreground leading-tight">
                Domine o 
                <span className="block bg-gradient-hero bg-clip-text text-transparent">
                  Google
                </span>
                <span className="text-success">Orgânico</span>
              </h1>
              
              <p className="text-xl lg:text-2xl text-muted-foreground leading-relaxed max-w-xl">
                Transforme sua empresa na <strong className="text-foreground">referência #1</strong> da sua cidade 
                e região com nossa metodologia exclusiva de SEO orgânico.
              </p>
            </div>

            {/* Social Proof */}
            <div className="flex items-center space-x-6 text-sm text-muted-foreground">
              <div className="flex items-center">
                <Users className="w-4 h-4 mr-2 text-success" />
                +500 empresas atendidas
              </div>
              <div className="flex items-center">
                <TrendingUp className="w-4 h-4 mr-2 text-success" />
                Resultados em 30 dias
              </div>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4 pt-4">
              <Button variant="hero" size="xl" className="group">
                Quero Dominar o Google
                <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" />
              </Button>
              
              <Button variant="outline" size="xl" className="border-2">
                Ver Casos de Sucesso
              </Button>
            </div>

            {/* Stats */}
            <div className="grid grid-cols-3 gap-6 pt-8 border-t border-border">
              <div className="text-center lg:text-left">
                <div className="text-3xl lg:text-4xl font-bold text-success">+300%</div>
                <div className="text-sm text-muted-foreground">Mais Leads</div>
              </div>
              <div className="text-center lg:text-left">
                <div className="text-3xl lg:text-4xl font-bold text-success">#1</div>
                <div className="text-sm text-muted-foreground">No Google</div>
              </div>
              <div className="text-center lg:text-left">
                <div className="text-3xl lg:text-4xl font-bold text-success">100%</div>
                <div className="text-sm text-muted-foreground">Orgânico</div>
              </div>
            </div>
          </div>

          {/* Visual Side */}
          <div className="relative animate-fade-in" style={{animationDelay: '0.3s'}}>
            <div className="relative">
              {/* Main Image */}
              <div className="relative overflow-hidden rounded-2xl shadow-strong bg-gradient-card">
                <img 
                  src={heroImage}
                  alt="Metodologia Google 2.0 - Crescimento Digital"
                  className="w-full h-[600px] object-cover"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
              </div>

              {/* Floating Cards */}
              <div className="absolute -top-6 -right-6 bg-card shadow-medium rounded-xl p-4 animate-fade-in" style={{animationDelay: '0.8s'}}>
                <div className="flex items-center space-x-3">
                  <div className="w-12 h-12 bg-success rounded-lg flex items-center justify-center">
                    <TrendingUp className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <div className="text-2xl font-bold text-success">+350%</div>
                    <div className="text-xs text-muted-foreground">Crescimento</div>
                  </div>
                </div>
              </div>

              <div className="absolute -bottom-6 -left-6 bg-card shadow-medium rounded-xl p-4 animate-fade-in" style={{animationDelay: '1.1s'}}>
                <div className="flex items-center space-x-3">
                  <div className="w-12 h-12 bg-gradient-hero rounded-lg flex items-center justify-center">
                    <Star className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <div className="text-2xl font-bold text-primary">Top #1</div>
                    <div className="text-xs text-muted-foreground">Posição Google</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;