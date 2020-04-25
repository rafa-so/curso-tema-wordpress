<article <?php post_class( array( 'class' => 'secondary' ) ); ?>>
  <h2>
    <?php the_title();?>
  </h2>
  <div class="thumbnail">
    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' )); ?>
  </div>
  <div class="meta-info">
    <p> 
      by <spam><?php the_author_posts_link(); ?> </spam>
      Categories: <spam><?php the_category( '' ); ?></spam>
      <?php the_tags( 'Tags: <spam> ', ', ', '</spam>' )?>
    </p>
    
  </div>
  <?php the_excerpt(); ?>
</article>