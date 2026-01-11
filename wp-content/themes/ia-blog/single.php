<?php get_header(); ?>

<main style="max-width:800px;margin:40px auto;font-family:Arial, sans-serif;">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>

                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>

                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
