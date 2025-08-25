<?php
/**
 * Ravvo Agency Theme Functions
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configurações do tema
 */
function ravvo_theme_setup() {
    // Suporte a title tag
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a logo customizado
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Suporte a cores customizadas
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Registrar menus
    register_nav_menus(array(
        'primary' => 'Menu Principal',
        'footer'  => 'Menu do Rodapé',
    ));
    
    // Tamanhos de imagem personalizados
    add_image_size('ravvo-hero', 1200, 600, true);
    add_image_size('ravvo-card', 400, 250, true);
    add_image_size('ravvo-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'ravvo_theme_setup');

/**
 * Enfileirar scripts e estilos
 */
function ravvo_scripts() {
    // CSS principal
    wp_enqueue_style('ravvo-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Font Awesome (opcional)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');
    
    // JavaScript personalizado
    wp_enqueue_script('ravvo-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Script para comentários se necessário
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ravvo_scripts');

/**
 * Registrar áreas de widgets
 */
function ravvo_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-1',
        'description'   => 'Área de widgets da sidebar principal',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 1',
        'id'            => 'footer-1',
        'description'   => 'Primeira coluna do rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 2',
        'id'            => 'footer-2',
        'description'   => 'Segunda coluna do rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 3',
        'id'            => 'footer-3',
        'description'   => 'Terceira coluna do rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'ravvo_widgets_init');

/**
 * Personalizar excerpt
 */
function ravvo_custom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'ravvo_custom_excerpt_length', 999);

function ravvo_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ravvo_custom_excerpt_more');

/**
 * Adicionar classes personalizadas ao body
 */
function ravvo_body_classes($classes) {
    // Adicionar classe para páginas específicas
    if (is_home() || is_front_page()) {
        $classes[] = 'homepage';
    }
    
    if (is_page()) {
        $classes[] = 'page-' . get_post_field('post_name');
    }
    
    return $classes;
}
add_filter('body_class', 'ravvo_body_classes');

/**
 * Suporte a cores do Gutenberg
 */
function ravvo_gutenberg_colors() {
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => 'Azul Primário',
            'slug'  => 'primary-blue',
            'color' => '#3b82f6',
        ),
        array(
            'name'  => 'Azul Secundário',
            'slug'  => 'secondary-blue',
            'color' => '#60a5fa',
        ),
        array(
            'name'  => 'Cinza Claro',
            'slug'  => 'light-gray',
            'color' => '#f8fafc',
        ),
        array(
            'name'  => 'Cinza Escuro',
            'slug'  => 'dark-gray',
            'color' => '#1e293b',
        ),
        array(
            'name'  => 'Branco',
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
    ));
}
add_action('after_setup_theme', 'ravvo_gutenberg_colors');

/**
 * Otimizações de performance
 */
function ravvo_remove_wp_emoji() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'ravvo_remove_wp_emoji');

/**
 * Adicionar meta tags para SEO
 */
function ravvo_add_meta_tags() {
    if (is_single() || is_page()) {
        global $post;
        $description = get_post_meta($post->ID, '_meta_description', true);
        if (!$description) {
            $description = wp_trim_words(strip_tags($post->post_content), 30);
        }
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
        
        // Open Graph tags
        echo '<meta property="og:title" content="' . get_the_title() . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
        echo '<meta property="og:type" content="article">' . "\n";
        echo '<meta property="og:url" content="' . get_permalink() . '">' . "\n";
        
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            echo '<meta property="og:image" content="' . $image[0] . '">' . "\n";
        }
    }
}
add_action('wp_head', 'ravvo_add_meta_tags');

/**
 * Adicionar estrutured data (JSON-LD)
 */
function ravvo_structured_data() {
    if (is_single()) {
        global $post;
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => wp_trim_words(strip_tags($post->post_content), 30),
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author()
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
                'url' => home_url()
            )
        );
        
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            $schema['image'] = $image[0];
        }
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'ravvo_structured_data');

/**
 * Formulário de contato personalizado
 */
function ravvo_contact_form_shortcode($atts) {
    ob_start();
    ?>
    <form class="ravvo-contact-form" method="post" action="">
        <?php wp_nonce_field('ravvo_contact_form', 'ravvo_nonce'); ?>
        
        <div class="form-group">
            <label for="name">Nome *</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" id="phone" name="phone">
        </div>
        
        <div class="form-group">
            <label for="subject">Assunto *</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        
        <div class="form-group">
            <label for="message">Mensagem *</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        
        <button type="submit" name="submit_contact" class="btn btn-primary">
            Enviar Mensagem
        </button>
    </form>
    
    <style>
    .ravvo-contact-form {
        max-width: 600px;
        margin: 0 auto;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: hsl(var(--foreground));
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid hsl(var(--border));
        border-radius: 0.5rem;
        background: hsl(var(--background));
        color: hsl(var(--foreground));
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: hsl(var(--primary));
        box-shadow: 0 0 0 2px hsl(var(--primary) / 0.1);
    }
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('ravvo_contact_form', 'ravvo_contact_form_shortcode');

/**
 * Processar formulário de contato
 */
function ravvo_process_contact_form() {
    if (isset($_POST['submit_contact']) && wp_verify_nonce($_POST['ravvo_nonce'], 'ravvo_contact_form')) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $to = get_option('admin_email');
        $email_subject = 'Nova mensagem do site: ' . $subject;
        $email_message = "Nome: $name\n";
        $email_message .= "E-mail: $email\n";
        $email_message .= "Telefone: $phone\n\n";
        $email_message .= "Mensagem:\n$message";
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        if (wp_mail($to, $email_subject, $email_message, $headers)) {
            echo '<div class="contact-success">Mensagem enviada com sucesso!</div>';
        } else {
            echo '<div class="contact-error">Erro ao enviar mensagem. Tente novamente.</div>';
        }
    }
}
add_action('wp', 'ravvo_process_contact_form');