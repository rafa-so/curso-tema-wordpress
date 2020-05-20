<?php get_header(); ?>

  <img class="img-fluid" src="<?php header_image(); ?>" 
    height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt=""/>

    <div class="content-area">
      <main>
        <section class="middle-area">
          <div class="container">
            <div class="row">
              <div class="news col-md-8">
                <?php 
                  if( have_posts() ):
                    while( have_posts() ): 
                      the_post();
                      get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;
                ?>
                  <div class="row">
                    <div class="pages text-left col-6">
                      <?php previous_posts_link( __( '<< Newer posts', 'wpcurso' ) )?>
                    </div>
                    <div class="pages text-right xol-6">
                      <?php next_posts_link( __( 'Older posts >>', 'wpcurso' ) )?>
                    </div>
                  </div>
                <?php
                  else:
                    echo __( 'There\'s nothing yet to be displayed...', 'wpcurso' );
                  endif;
                ?>
              </div>
              <?php get_sidebar('blog'); ?>
            </div>
          </div>
        </section>
      </main>
    </div>
<?php get_footer(); ?>