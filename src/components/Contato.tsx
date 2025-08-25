import { Button } from "@/components/ui/button";
import { Card } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Phone, Mail, MapPin, Clock } from "lucide-react";

const Contato = () => {
  return (
    <section id="contato" className="py-20 px-6 lg:px-8 bg-gradient-secondary">
      <div className="container mx-auto">
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-primary mb-6">
            Vamos Conversar sobre
            <span className="block text-success">Seus Resultados?</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Entre em contato conosco e descubra como a Metodologia Google 2.0 
            pode revolucionar a presença digital da sua empresa.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          {/* Formulário */}
          <Card className="p-8 bg-gradient-card shadow-medium">
            <h3 className="text-2xl font-bold text-primary mb-6">
              Solicite uma Análise Gratuita
            </h3>
            
            <form className="space-y-6">
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label className="block text-sm font-medium text-muted-foreground mb-2">
                    Nome Completo
                  </label>
                  <Input 
                    type="text" 
                    placeholder="Seu nome completo"
                    className="w-full"
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-muted-foreground mb-2">
                    Empresa
                  </label>
                  <Input 
                    type="text" 
                    placeholder="Nome da sua empresa"
                    className="w-full"
                  />
                </div>
              </div>

              <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label className="block text-sm font-medium text-muted-foreground mb-2">
                    Email
                  </label>
                  <Input 
                    type="email" 
                    placeholder="seu@email.com"
                    className="w-full"
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-muted-foreground mb-2">
                    Telefone
                  </label>
                  <Input 
                    type="tel" 
                    placeholder="(11) 99999-9999"
                    className="w-full"
                  />
                </div>
              </div>

              <div>
                <label className="block text-sm font-medium text-muted-foreground mb-2">
                  Conte-nos sobre seu negócio
                </label>
                <Textarea 
                  placeholder="Descreva seu negócio, principais desafios e objetivos..."
                  className="w-full h-32"
                />
              </div>

              <Button variant="hero" size="xl" className="w-full">
                Solicitar Análise Gratuita
              </Button>

              <p className="text-sm text-muted-foreground text-center">
                Resposta em até 2 horas úteis. Sem spam, apenas resultados.
              </p>
            </form>
          </Card>

          {/* Informações de Contato */}
          <div className="space-y-8">
            <Card className="p-6 bg-gradient-card shadow-soft">
              <div className="flex items-center space-x-4">
                <div className="w-12 h-12 bg-gradient-hero rounded-lg flex items-center justify-center">
                  <Phone className="w-6 h-6 text-primary-foreground" />
                </div>
                <div>
                  <h4 className="font-semibold text-primary">Telefone</h4>
                  <p className="text-muted-foreground">(11) 99999-9999</p>
                </div>
              </div>
            </Card>

            <Card className="p-6 bg-gradient-card shadow-soft">
              <div className="flex items-center space-x-4">
                <div className="w-12 h-12 bg-gradient-hero rounded-lg flex items-center justify-center">
                  <Mail className="w-6 h-6 text-primary-foreground" />
                </div>
                <div>
                  <h4 className="font-semibold text-primary">Email</h4>
                  <p className="text-muted-foreground">contato@ravvo.com.br</p>
                </div>
              </div>
            </Card>

            <Card className="p-6 bg-gradient-card shadow-soft">
              <div className="flex items-center space-x-4">
                <div className="w-12 h-12 bg-gradient-hero rounded-lg flex items-center justify-center">
                  <MapPin className="w-6 h-6 text-primary-foreground" />
                </div>
                <div>
                  <h4 className="font-semibold text-primary">Localização</h4>
                  <p className="text-muted-foreground">São Paulo, SP</p>
                </div>
              </div>
            </Card>

            <Card className="p-6 bg-gradient-card shadow-soft">
              <div className="flex items-center space-x-4">
                <div className="w-12 h-12 bg-gradient-hero rounded-lg flex items-center justify-center">
                  <Clock className="w-6 h-6 text-primary-foreground" />
                </div>
                <div>
                  <h4 className="font-semibold text-primary">Horário</h4>
                  <p className="text-muted-foreground">
                    Seg - Sex: 8h às 18h<br />
                    Sáb: 9h às 13h
                  </p>
                </div>
              </div>
            </Card>

            {/* Garantia */}
            <div className="bg-gradient-hero rounded-xl p-6 text-center shadow-medium">
              <h4 className="text-xl font-bold text-primary-foreground mb-2">
                Garantia de Resultados
              </h4>
              <p className="text-primary-foreground/80">
                Resultados visíveis em 30 dias ou devolvemos seu investimento
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contato;