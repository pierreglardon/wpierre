<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3><?php the_date(); ?></h3>
        <h4><?php the_category(); ?></h4>
        <section><?php the_excerpt(); ?></section>
        <!-- <?php the_content(); ?> -->
        <h5><?php the_author(); ?></h5>
    </article>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
