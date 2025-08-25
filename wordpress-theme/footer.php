<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php bloginfo('name'); ?></h3>
                <p><?php bloginfo('description'); ?></p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">📘</a>
                    <a href="#" aria-label="Instagram">📷</a>
                    <a href="#" aria-label="LinkedIn">💼</a>
                    <a href="#" aria-label="WhatsApp">📱</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Serviços</h3>
                <a href="#">Marketing Digital</a>
                <a href="#">Gestão de Redes Sociais</a>
                <a href="#">Google Ads</a>
                <a href="#">SEO</a>
                <a href="#">Criação de Sites</a>
            </div>

            <div class="footer-section">
                <h3>Empresa</h3>
                <a href="<?php echo home_url('/sobre'); ?>">Sobre Nós</a>
                <a href="<?php echo home_url('/blog'); ?>">Blog</a>
                <a href="<?php echo home_url('/casos-de-sucesso'); ?>">Casos de Sucesso</a>
                <a href="<?php echo home_url('/carreira'); ?>">Carreira</a>
            </div>

            <div class="footer-section">
                <h3>Contato</h3>
                <p>📍 Rua Example, 123<br>São Paulo, SP</p>
                <p>📞 (11) 9999-9999</p>
                <p>✉️ contato@ravvo.com.br</p>
                
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Seu e-mail" required>
                        <button type="submit" class="btn btn-primary">Assinar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="<?php echo home_url('/privacidade'); ?>">Política de Privacidade</a>
                <a href="<?php echo home_url('/termos'); ?>">Termos de Uso</a>
            </div>
        </div>
    </div>
</footer>

<style>
.site-footer {
    background: hsl(var(--muted));
    padding: 3rem 0 1rem;
    margin-top: 4rem;
    border-top: 1px solid hsl(var(--border));
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h3 {
    color: hsl(var(--foreground));
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.footer-section h4 {
    color: hsl(var(--foreground));
    margin: 1.5rem 0 1rem;
    font-size: 1rem;
}

.footer-section a {
    color: hsl(var(--muted-foreground));
    text-decoration: none;
    display: block;
    margin-bottom: 0.5rem;
    transition: color 0.3s ease;
}

.footer-section a:hover {
    color: hsl(var(--primary));
}

.footer-section p {
    color: hsl(var(--muted-foreground));
    margin-bottom: 1rem;
    line-height: 1.6;
}

.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-links a {
    display: inline-block;
    font-size: 1.5rem;
    padding: 0.5rem;
    border-radius: 0.5rem;
    background: hsl(var(--background));
    transition: all 0.3s ease;
}

.social-links a:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-soft);
}

.newsletter-form {
    display: flex;
    gap: 0.5rem;
    margin-top: 1rem;
}

.newsletter-form input {
    flex: 1;
    padding: 0.75rem;
    border: 1px solid hsl(var(--border));
    border-radius: 0.5rem;
    background: hsl(var(--background));
    color: hsl(var(--foreground));
}

.newsletter-form input:focus {
    outline: none;
    border-color: hsl(var(--primary));
    box-shadow: 0 0 0 2px hsl(var(--primary) / 0.1);
}

.newsletter-form button {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 2rem;
    border-top: 1px solid hsl(var(--border));
    color: hsl(var(--muted-foreground));
    flex-wrap: wrap;
    gap: 1rem;
}

.footer-links {
    display: flex;
    gap: 2rem;
}

.footer-links a {
    color: hsl(var(--muted-foreground));
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: hsl(var(--primary));
}

@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .social-links {
        justify-content: center;
    }
}
</style>

<?php wp_footer(); ?>
</body>
</html>