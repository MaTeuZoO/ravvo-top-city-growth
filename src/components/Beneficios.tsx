import { Card } from "@/components/ui/card";
import { 
  TrendingUp, 
  Users, 
  DollarSign, 
  Clock, 
  Shield, 
  Smartphone,
  Globe,
  Award
} from "lucide-react";

const Beneficios = () => {
  const beneficios = [
    {
      icon: <TrendingUp className="w-8 h-8" />,
      titulo: "Mais Visibilidade",
      descricao: "Apareça na primeira página do Google para suas palavras-chave principais",
      stat: "+350%",
      statLabel: "de visibilidade"
    },
    {
      icon: <Users className="w-8 h-8" />,
      titulo: "Leads Qualificados",
      descricao: "Atraia clientes que realmente estão procurando seus produtos e serviços",
      stat: "+280%",
      statLabel: "em leads"
    },
    {
      icon: <DollarSign className="w-8 h-8" />,
      titulo: "ROI Garantido",
      descricao: "Investimento com retorno comprovado e crescimento sustentável",
      stat: "15x",
      statLabel: "retorno médio"
    },
    {
      icon: <Clock className="w-8 h-8" />,
      titulo: "Resultados Rápidos",
      descricao: "Primeiras melhorias visíveis já nas primeiras semanas",
      stat: "30 dias",
      statLabel: "para ver resultados"
    },
    {
      icon: <Shield className="w-8 h-8" />,
      titulo: "100% White Hat",
      descricao: "Técnicas aprovadas pelo Google, sem riscos de penalizações",
      stat: "0%",
      statLabel: "de penalizações"
    },
    {
      icon: <Smartphone className="w-8 h-8" />,
      titulo: "Mobile First",
      descricao: "Otimização completa para dispositivos móveis e desktop",
      stat: "+90%",
      statLabel: "mobile friendly"
    },
    {
      icon: <Globe className="w-8 h-8" />,
      titulo: "Alcance Ampliado",
      descricao: "Domine sua cidade, região e expanda para novos mercados",
      stat: "3x",
      statLabel: "mais alcance"
    },
    {
      icon: <Award className="w-8 h-8" />,
      titulo: "Autoridade Digital",
      descricao: "Torne-se referência no seu segmento e supere a concorrência",
      stat: "#1",
      statLabel: "posicionamento"
    }
  ];

  return (
    <section id="beneficios" className="py-20 px-6 lg:px-8 bg-background">
      <div className="container mx-auto">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-primary mb-6">
            Transforme Seu Negócio com
            <span className="block text-success">Resultados Mensuráveis</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Veja como a Metodologia Google 2.0 revoluciona a presença digital 
            da sua empresa e gera resultados concretos para o seu faturamento.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {beneficios.map((beneficio, index) => (
            <Card 
              key={index} 
              className="p-6 bg-gradient-card shadow-soft hover:shadow-medium transition-all duration-300 hover-scale group animate-fade-up"
              style={{animationDelay: `${index * 0.1}s`}}
            >
              <div className="flex flex-col items-center text-center space-y-4">
                <div className="inline-flex items-center justify-center w-14 h-14 bg-gradient-hero rounded-xl text-primary-foreground group-hover:shadow-glow transition-all duration-300">
                  {beneficio.icon}
                </div>
                
                <div>
                  <h3 className="text-lg font-bold text-primary mb-2">
                    {beneficio.titulo}
                  </h3>
                  
                  <p className="text-sm text-muted-foreground mb-4">
                    {beneficio.descricao}
                  </p>

                  <div className="bg-success-light/20 rounded-lg p-3">
                    <div className="text-2xl font-bold text-success">
                      {beneficio.stat}
                    </div>
                    <div className="text-xs text-success/70">
                      {beneficio.statLabel}
                    </div>
                  </div>
                </div>
              </div>
            </Card>
          ))}
        </div>

        {/* Call to Action Section */}
        <div className="mt-20 text-center">
          <div className="bg-gradient-hero rounded-2xl p-8 lg:p-12 shadow-strong">
            <h3 className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-4">
              Pronto para Dominar o Google?
            </h3>
            <p className="text-xl text-primary-foreground/80 mb-8">
              Descubra como nossa metodologia pode transformar seus resultados
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <button className="bg-success hover:bg-success/90 text-success-foreground px-8 py-4 rounded-lg font-semibold text-lg hover-glow transition-all duration-300">
                Começar Agora
              </button>
              <button className="bg-white/10 hover:bg-white/20 text-white border border-white/30 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300">
                Falar com Especialista
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Beneficios;