<?php get_header(); ?>

<main>
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <p><?php the_date(); ?></p>
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                <?php endif; ?>
                <?php the_content(); ?>
            </article>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Désolé, aucun post ne correspond à vos critères.' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
