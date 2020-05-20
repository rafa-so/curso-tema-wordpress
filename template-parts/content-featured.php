<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' )); ?>
    </a>
  </div>
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  </h2>
  <div class="meta-info">
    <p>
      <?php _e( 'by', 'wpcurso' ) ?> <spam><?php the_author_posts_link(); ?> </spam>
      <?php _e( 'Categories:', 'wpcurso' ) ?> <spam><?php the_category( '' ); ?></spam>
      <?php the_tags( __( 'Tags:', 'wpcurso' ), ', ' )?>
    </p>

    <p>
      <spam><?php echo get_the_date(); ?></spam>
    </p>
  </div>
  <?php the_excerpt(); ?>
</article>