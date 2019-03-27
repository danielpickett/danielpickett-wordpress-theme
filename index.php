<?php get_header(); ?>

  <!-- Start the Loop. -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; else : ?> <!-- End the Loop. -->
    
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?> <!-- End the else. -->

<?php get_footer(); ?>