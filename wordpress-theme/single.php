<?php get_header(); ?>

<main class="content-area">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-post animate-fade-up">
                <header class="post-header">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail('ravvo-hero', array('class' => 'featured-image')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-meta">
                        <div class="post-categories">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                foreach ($categories as $category) {
                                    echo '<span class="category-tag">' . $category->name . '</span>';
                                }
                            }
                            ?>
                        </div>
                        
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        
                        <div class="post-info">
                            <div class="author-info">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                                <div class="author-details">
                                    <span class="author-name">Por <?php the_author(); ?></span>
                                    <span class="post-date"><?php echo get_the_date('j \d\e F \d\e Y'); ?></span>
                                </div>
                            </div>
                            
                            <div class="reading-time">
                                <?php echo ravvo_reading_time(); ?> min de leitura
                            </div>
                        </div>
                    </div>
                </header>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <footer class="post-footer">
                    <?php
                    $tags = get_the_tags();
                    if ($tags) : ?>
                        <div class="post-tags">
                            <h4>Tags:</h4>
                            <div class="tags-list">
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-link">
                                        #<?php echo $tag->name; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="post-navigation">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        
                        <?php if ($prev_post) : ?>
                            <div class="nav-previous">
                                <a href="<?php echo get_permalink($prev_post); ?>" class="nav-link">
                                    <span class="nav-direction">← Anterior</span>
                                    <span class="nav-title"><?php echo get_the_title($prev_post); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($next_post) : ?>
                            <div class="nav-next">
                                <a href="<?php echo get_permalink($next_post); ?>" class="nav-link">
                                    <span class="nav-direction">Próximo →</span>
                                    <span class="nav-title"><?php echo get_the_title($next_post); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="author-bio">
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                        </div>
                        <div class="author-info">
                            <h4>Sobre <?php the_author(); ?></h4>
                            <p><?php echo get_the_author_meta('description') ?: 'Especialista em marketing digital e estratégias de crescimento.'; ?></p>
                        </div>
                    </div>
                </footer>
            </article>

            <?php
            // Comentários (se habilitados)
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<style>
.single-post {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem 0;
}

.post-header {
    margin-bottom: 3rem;
}

.post-featured-image {
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

.post-categories {
    margin-bottom: 1rem;
}

.category-tag {
    display: inline-block;
    background: hsl(var(--primary));
    color: hsl(var(--primary-foreground));
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    margin-right: 0.5rem;
}

.post-title {
    font-size: 2.5rem;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    color: hsl(var(--foreground));
}

.post-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    border-top: 1px solid hsl(var(--border));
    border-bottom: 1px solid hsl(var(--border));
}

.author-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.author-info img {
    border-radius: 50%;
}

.author-details {
    display: flex;
    flex-direction: column;
}

.author-name {
    font-weight: 600;
    color: hsl(var(--foreground));
}

.post-date {
    font-size: 0.875rem;
    color: hsl(var(--muted-foreground));
}

.reading-time {
    font-size: 0.875rem;
    color: hsl(var(--muted-foreground));
    background: hsl(var(--muted));
    padding: 0.5rem 1rem;
    border-radius: 1rem;
}

.post-content {
    line-height: 1.8;
    font-size: 1.125rem;
    margin-bottom: 3rem;
}

.post-content h2,
.post-content h3,
.post-content h4 {
    margin: 2rem 0 1rem;
    color: hsl(var(--foreground));
}

.post-content p {
    margin-bottom: 1.5rem;
}

.post-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.5rem;
    margin: 2rem 0;
    box-shadow: var(--shadow-soft);
}

.post-content blockquote {
    border-left: 4px solid hsl(var(--primary));
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    font-size: 1.25rem;
    color: hsl(var(--muted-foreground));
}

.post-footer {
    border-top: 1px solid hsl(var(--border));
    padding-top: 2rem;
}

.post-tags {
    margin-bottom: 2rem;
}

.post-tags h4 {
    margin-bottom: 1rem;
    color: hsl(var(--foreground));
}

.tags-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tag-link {
    background: hsl(var(--muted));
    color: hsl(var(--muted-foreground));
    padding: 0.5rem 1rem;
    border-radius: 1rem;
    text-decoration: none;
    font-size: 0.875rem;
    transition: all 0.3s ease;
}

.tag-link:hover {
    background: hsl(var(--primary));
    color: hsl(var(--primary-foreground));
}

.post-navigation {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin: 2rem 0;
}

.nav-link {
    display: block;
    padding: 1rem;
    border: 1px solid hsl(var(--border));
    border-radius: 0.5rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.nav-link:hover {
    border-color: hsl(var(--primary));
    box-shadow: var(--shadow-soft);
}

.nav-direction {
    display: block;
    font-size: 0.875rem;
    color: hsl(var(--muted-foreground));
    margin-bottom: 0.5rem;
}

.nav-title {
    display: block;
    font-weight: 600;
    color: hsl(var(--foreground));
}

.nav-next {
    text-align: right;
}

.author-bio {
    display: flex;
    gap: 1rem;
    background: hsl(var(--muted));
    padding: 2rem;
    border-radius: 1rem;
    margin-top: 2rem;
}

.author-avatar img {
    border-radius: 50%;
}

.author-bio h4 {
    margin-bottom: 0.5rem;
    color: hsl(var(--foreground));
}

.author-bio p {
    color: hsl(var(--muted-foreground));
    margin: 0;
}

@media (max-width: 768px) {
    .post-title {
        font-size: 2rem;
    }
    
    .post-info {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .post-navigation {
        grid-template-columns: 1fr;
    }
    
    .nav-next {
        text-align: left;
    }
    
    .author-bio {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php
// Função para calcular tempo de leitura
function ravvo_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 palavras por minuto
    return $reading_time;
}
?>

<?php get_footer(); ?>