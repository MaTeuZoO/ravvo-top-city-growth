import { Button } from "@/components/ui/button";

const Header = () => {
  return (
    <header className="w-full py-6 px-6 lg:px-8 shadow-soft bg-card">
      <div className="container mx-auto flex items-center justify-between">
        <div className="flex items-center space-x-2">
          <div className="w-8 h-8 bg-gradient-hero rounded-lg"></div>
          <h1 className="text-2xl font-bold text-primary">Ravvo</h1>
        </div>
        
        <nav className="hidden md:flex items-center space-x-8">
          <a href="#metodologia" className="text-muted-foreground hover:text-primary transition-colors">
            Metodologia
          </a>
          <a href="#beneficios" className="text-muted-foreground hover:text-primary transition-colors">
            Benefícios
          </a>
          <a href="#resultados" className="text-muted-foreground hover:text-primary transition-colors">
            Resultados
          </a>
          <a href="#contato" className="text-muted-foreground hover:text-primary transition-colors">
            Contato
          </a>
        </nav>

        <Button variant="cta" size="default" className="hidden md:flex">
          Quero Mais Leads
        </Button>
      </div>
    </header>
  );
};

export default Header;