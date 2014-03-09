<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'post' ); ?>

  <?php endwhile; else: ?>

    <p>There are no posts or pages here</p>

  <?php endif; ?>

<?php get_footer(); ?>