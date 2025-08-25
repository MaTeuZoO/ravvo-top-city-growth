const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground py-12 px-6 lg:px-8">
      <div className="container mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
          {/* Logo e Descrição */}
          <div className="md:col-span-2">
            <div className="flex items-center space-x-2 mb-4">
              <div className="w-8 h-8 bg-success rounded-lg"></div>
              <h3 className="text-2xl font-bold">Ravvo</h3>
            </div>
            <p className="text-primary-foreground/80 mb-6 max-w-md">
              Especialistas em captação de leads e posicionamento no Google. 
              Transformamos empresas em líderes digitais através da nossa Metodologia Google 2.0.
            </p>
            <div className="flex space-x-4">
              <div className="w-10 h-10 bg-primary-foreground/10 rounded-lg flex items-center justify-center hover:bg-primary-foreground/20 transition-colors cursor-pointer">
                <span className="text-sm font-bold">f</span>
              </div>
              <div className="w-10 h-10 bg-primary-foreground/10 rounded-lg flex items-center justify-center hover:bg-primary-foreground/20 transition-colors cursor-pointer">
                <span className="text-sm font-bold">in</span>
              </div>
              <div className="w-10 h-10 bg-primary-foreground/10 rounded-lg flex items-center justify-center hover:bg-primary-foreground/20 transition-colors cursor-pointer">
                <span className="text-sm font-bold">ig</span>
              </div>
            </div>
          </div>

          {/* Serviços */}
          <div>
            <h4 className="text-lg font-semibold mb-4">Serviços</h4>
            <ul className="space-y-2 text-primary-foreground/80">
              <li><a href="#" className="hover:text-primary-foreground transition-colors">SEO Orgânico</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Google Ads</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Marketing Digital</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Captação de Leads</a></li>
              <li><a href="#" className="hover:text-primary-foreground transition-colors">Consultoria</a></li>
            </ul>
          </div>

          {/* Contato */}
          <div>
            <h4 className="text-lg font-semibold mb-4">Contato</h4>
            <ul className="space-y-2 text-primary-foreground/80">
              <li>(11) 99999-9999</li>
              <li>contato@ravvo.com.br</li>
              <li>São Paulo, SP</li>
              <li>Seg - Sex: 8h às 18h</li>
            </ul>
          </div>
        </div>

        {/* Linha divisória */}
        <div className="border-t border-primary-foreground/20 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <p className="text-primary-foreground/60 text-sm">
              © 2024 Ravvo. Todos os direitos reservados.
            </p>
            <div className="flex space-x-6 text-sm text-primary-foreground/60 mt-4 md:mt-0">
              <a href="#" className="hover:text-primary-foreground transition-colors">Política de Privacidade</a>
              <a href="#" className="hover:text-primary-foreground transition-colors">Termos de Uso</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;