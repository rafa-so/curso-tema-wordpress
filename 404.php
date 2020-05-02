<?php get_header(); ?>

  <img class="img-fluid" src="<?php header_image(); ?>" 
    height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt=""/>

    <div class="content-area">
      <main>
        <section class="middle-area">
          <div class="container">
            <div class="row">
              <div class="error-404 col-md-8">
                <header>
                    <h1>Página não encontrada</h1>
                    <p>A página solilcitada não foi encontrada</p>
                </header>

                <div class="error">
                    <p>Que tal fazer uma pesquisa: </p>
                    <?php echo get_search_form(); ?>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array(
                        'title' => 'latest posts',
                        'number' => 3, 
                    ) ); ?>
                </div>
                
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
<?php get_footer(); ?>