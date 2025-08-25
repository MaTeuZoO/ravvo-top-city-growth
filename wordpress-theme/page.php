<?php get_header(); ?>

<main class="content-area">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-page animate-fade-up">
                <header class="page-header">
                    <?php if (has_post_thumbnail() && !is_front_page()) : ?>
                        <div class="page-featured-image">
                            <?php the_post_thumbnail('ravvo-hero', array('class' => 'featured-image')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!is_front_page()) : ?>
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php endif; ?>
                </header>

                <div class="page-content">
                    <?php if (is_front_page()) : ?>
                        <!-- Hero Section para Homepage -->
                        <section class="hero-home">
                            <div class="hero-content">
                                <h1>Transformamos Sua Empresa em uma Máquina de Vendas</h1>
                                <p>Somos especialistas em marketing digital que geram resultados reais. Mais leads, mais vendas, mais crescimento para o seu negócio.</p>
                                <div class="hero-actions">
                                    <a href="#contato" class="btn btn-primary">Quero Mais Leads Agora</a>
                                    <a href="#metodologia" class="btn btn-secondary">Como Funciona</a>
                                </div>
                            </div>
                            <div class="hero-stats">
                                <div class="stat">
                                    <div class="stat-number">+300%</div>
                                    <div class="stat-label">Aumento em Leads</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Empresas Atendidas</div>
                                </div>
                                <div class="stat">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">Satisfação</div>
                                </div>
                            </div>
                        </section>

                        <!-- Seção de Serviços -->
                        <section class="services-section">
                            <div class="section-header">
                                <h2>Nossos Serviços</h2>
                                <p>Soluções completas para o crescimento do seu negócio digital</p>
                            </div>
                            
                            <div class="services-grid">
                                <div class="service-card">
                                    <div class="service-icon">🎯</div>
                                    <h3>Google Ads</h3>
                                    <p>Campanhas otimizadas que geram leads qualificados e aumentam suas vendas.</p>
                                </div>
                                
                                <div class="service-card">
                                    <div class="service-icon">📱</div>
                                    <h3>Redes Sociais</h3>
                                    <p>Gestão completa das suas redes sociais com conteúdo que engaja e converte.</p>
                                </div>
                                
                                <div class="service-card">
                                    <div class="service-icon">📈</div>
                                    <h3>SEO</h3>
                                    <p>Posicionamento no Google para que seus clientes te encontrem facilmente.</p>
                                </div>
                                
                                <div class="service-card">
                                    <div class="service-icon">💻</div>
                                    <h3>Sites & Landing Pages</h3>
                                    <p>Desenvolvimento de sites otimizados para conversão e experiência do usuário.</p>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>

                    <?php the_content(); ?>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">',
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>

            <?php
            // Comentários (se habilitados na página)
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<style>
.single-page {
    padding: 2rem 0;
}

.page-header {
    margin-bottom: 3rem;
    text-align: center;
}

.page-featured-image {
    margin-bottom: 2rem;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: var(--shadow-medium);
}

.featured-image {
    width: 100%;
    height: auto;
    display: block;
}

.page-title {
    font-size: 2.5rem;
    line-height: 1.2;
    color: hsl(var(--foreground));
    margin: 0;
}

.page-content {
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.8;
}

.page-content h2,
.page-content h3,
.page-content h4 {
    margin: 2rem 0 1rem;
    color: hsl(var(--foreground));
}

.page-content p {
    margin-bottom: 1.5rem;
    font-size: 1.125rem;
}

.page-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.5rem;
    margin: 2rem 0;
    box-shadow: var(--shadow-soft);
}

/* Estilos específicos para Homepage */
.hero-home {
    text-align: center;
    padding: 4rem 0;
    background: var(--gradient-secondary);
    border-radius: 2rem;
    margin-bottom: 4rem;
}

.hero-content h1 {
    font-size: 3rem;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    color: hsl(var(--foreground));
}

.hero-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    color: hsl(var(--muted-foreground));
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

.hero-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 2rem;
    max-width: 600px;
    margin: 0 auto;
}

.stat {
    text-align: center;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: hsl(var(--primary));
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    color: hsl(var(--muted-foreground));
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.services-section {
    padding: 4rem 0;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: hsl(var(--foreground));
}

.section-header p {
    font-size: 1.25rem;
    color: hsl(var(--muted-foreground));
    max-width: 600px;
    margin: 0 auto;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.service-card {
    background: var(--gradient-card);
    border: 1px solid hsl(var(--border));
    border-radius: 1rem;
    padding: 2rem;
    text-align: center;
    box-shadow: var(--shadow-soft);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-medium);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.service-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: hsl(var(--foreground));
}

.service-card p {
    color: hsl(var(--muted-foreground));
    line-height: 1.6;
    margin: 0;
}

.page-links {
    margin: 2rem 0;
    text-align: center;
}

.page-links a {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    background: hsl(var(--primary));
    color: hsl(var(--primary-foreground));
    text-decoration: none;
    border-radius: 0.25rem;
    transition: all 0.3s ease;
}

.page-links a:hover {
    background: hsl(var(--primary) / 0.8);
}

@media (max-width: 768px) {
    .page-title {
        font-size: 2rem;
    }
    
    .hero-content h1 {
        font-size: 2rem;
    }
    
    .hero-content p {
        font-size: 1rem;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-stats {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .page-content {
        padding: 0 1rem;
    }
}
</style>

<?php get_footer(); ?>