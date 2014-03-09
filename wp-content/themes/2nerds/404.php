<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'post' ); ?>

<?php endwhile; else: ?>

  <h1>404. Whelp...this sucks</h1>

<?php endif; ?>