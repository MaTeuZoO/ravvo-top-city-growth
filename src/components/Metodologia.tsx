import { Card } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { CheckCircle, Zap, Target, BarChart } from "lucide-react";

const Metodologia = () => {
  const etapas = [
    {
      icon: <Target className="w-8 h-8" />,
      titulo: "Análise Estratégica",
      descricao: "Identificamos as palavras-chave que seus clientes realmente buscam",
      detalhes: ["Pesquisa de mercado", "Análise da concorrência", "Mapeamento de oportunidades"]
    },
    {
      icon: <Zap className="w-8 h-8" />,
      titulo: "Otimização Técnica",
      descricao: "Aplicamos técnicas avançadas de SEO que o Google valoriza",
      detalhes: ["SEO On-Page", "Performance técnica", "Estrutura otimizada"]
    },
    {
      icon: <BarChart className="w-8 h-8" />,
      titulo: "Crescimento Orgânico",
      descricao: "Sua empresa aparece naturalmente nas primeiras posições",
      detalhes: ["Visibilidade máxima", "Tráfego qualificado", "Leads constantes"]
    }
  ];

  return (
    <section id="metodologia" className="py-20 px-6 lg:px-8 bg-gradient-secondary">
      <div className="container mx-auto">
        <div className="text-center mb-16">
          <Badge className="mb-4 bg-success/10 text-success hover:bg-success/20">
            Metodologia Google 2.0
          </Badge>
          <h2 className="text-4xl lg:text-5xl font-bold text-primary mb-6">
            O Sistema que Revoluciona
            <span className="block text-success">Sua Presença Digital</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Nossa metodologia exclusiva combina estratégias comprovadas com técnicas avançadas 
            para posicionar seu negócio no topo do Google de forma 100% orgânica.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          {etapas.map((etapa, index) => (
            <Card key={index} className="p-8 text-center bg-gradient-card shadow-medium hover:shadow-strong transition-all duration-300 hover-scale">
              <div className="inline-flex items-center justify-center w-16 h-16 bg-gradient-hero rounded-full text-primary-foreground mb-6">
                {etapa.icon}
              </div>
              
              <h3 className="text-2xl font-bold text-primary mb-4">
                {etapa.titulo}
              </h3>
              
              <p className="text-muted-foreground mb-6">
                {etapa.descricao}
              </p>

              <ul className="space-y-2">
                {etapa.detalhes.map((detalhe, idx) => (
                  <li key={idx} className="flex items-center justify-center text-sm text-muted-foreground">
                    <CheckCircle className="w-4 h-4 text-success mr-2" />
                    {detalhe}
                  </li>
                ))}
              </ul>
            </Card>
          ))}
        </div>

        {/* Destaque Central */}
        <div className="bg-gradient-hero rounded-2xl p-8 lg:p-12 text-center shadow-strong">
          <h3 className="text-3xl lg:text-4xl font-bold text-primary-foreground mb-4">
            Resultado Garantido em 90 Dias
          </h3>
          <p className="text-xl text-primary-foreground/80 mb-6">
            Ou devolvemos 100% do seu investimento
          </p>
          <div className="flex justify-center">
            <Badge className="bg-success text-success-foreground text-lg py-2 px-6">
              Garantia Total
            </Badge>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Metodologia;