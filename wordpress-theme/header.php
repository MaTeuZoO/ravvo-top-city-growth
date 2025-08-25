<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                    'fallback_cb' => 'ravvo_fallback_menu',
                ));
                ?>
            </nav>

            <div class="header-actions">
                <a href="#contato" class="btn btn-primary">
                    Fale Conosco
                </a>
            </div>
        </div>
    </div>
</header>

<?php
// Fallback menu caso não tenha menu configurado
function ravvo_fallback_menu() {
    echo '<ul class="primary-menu">';
    echo '<li><a href="' . home_url() . '">Início</a></li>';
    echo '<li><a href="' . home_url() . '/sobre">Sobre</a></li>';
    echo '<li><a href="' . home_url() . '/servicos">Serviços</a></li>';
    echo '<li><a href="' . home_url() . '/blog">Blog</a></li>';
    echo '<li><a href="' . home_url() . '/contato">Contato</a></li>';
    echo '</ul>';
}
?>

<style>
.site-header {
    background: hsl(var(--background));
    border-bottom: 1px solid hsl(var(--border));
    position: sticky;
    top: 0;
    z-index: 50;
    backdrop-filter: blur(10px);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
}

.site-logo {
    font-size: 1.5rem;
    font-weight: 700;
    color: hsl(var(--primary));
    text-decoration: none;
}

.site-logo img {
    max-height: 40px;
    width: auto;
}

.primary-menu {
    display: flex;
    list-style: none;
    gap: 2rem;
    margin: 0;
    padding: 0;
}

.primary-menu a {
    color: hsl(var(--foreground));
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    padding: 0.5rem 0;
}

.primary-menu a:hover,
.primary-menu .current-menu-item a {
    color: hsl(var(--primary));
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }
    
    .main-nav {
        order: 3;
        width: 100%;
    }
    
    .primary-menu {
        flex-direction: column;
        gap: 0.5rem;
        text-align: center;
    }
    
    .header-actions {
        order: 2;
    }
}
</style>