<?php get_header(); ?>

<main class="content-area">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="card animate-fade-up">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded-lg mb-4')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="post-meta">
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                            <span class="post-author">por <?php the_author(); ?></span>
                        </div>
                        
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary">
                            Leia Mais
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '← Anterior',
                    'next_text' => 'Próximo →',
                ));
                ?>
            </div>
            
        <?php else : ?>
            <div class="no-posts">
                <h2>Nenhum conteúdo encontrado</h2>
                <p>Desculpe, mas não há posts para exibir.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.post-title a {
    font-size: 1.5rem;
    font-weight: 600;
    text-decoration: none;
    color: hsl(var(--foreground));
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: hsl(var(--primary));
}

.post-meta {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 0.875rem;
    color: hsl(var(--muted-foreground));
}

.post-excerpt {
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 3rem;
}

.pagination a, .pagination span {
    padding: 0.75rem 1rem;
    border: 1px solid hsl(var(--border));
    border-radius: 0.5rem;
    text-decoration: none;
    color: hsl(var(--foreground));
    transition: all 0.3s ease;
}

.pagination a:hover {
    background: hsl(var(--primary));
    color: hsl(var(--primary-foreground));
    border-color: hsl(var(--primary));
}

.pagination .current {
    background: hsl(var(--primary));
    color: hsl(var(--primary-foreground));
    border-color: hsl(var(--primary));
}

.no-posts {
    text-align: center;
    padding: 4rem 0;
}

@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
    }
    
    .post-meta {
        flex-direction: column;
        gap: 0.5rem;
    }
}
</style>

<?php get_footer(); ?>