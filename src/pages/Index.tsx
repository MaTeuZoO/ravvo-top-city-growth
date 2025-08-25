// Update this page (the content is just a fallback if you fail to update the page)

import Header from "@/components/Header";
import Hero from "@/components/Hero";
import Metodologia from "@/components/Metodologia";
import Beneficios from "@/components/Beneficios";
import Contato from "@/components/Contato";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen">
      <Header />
      <Hero />
      <Metodologia />
      <Beneficios />
      <Contato />
      <Footer />
    </div>
  );
};

export default Index;
