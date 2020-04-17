<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso WordPress</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class() ?>>
    <header>
      <section class="top-bar">
        <div class="container">
          <div class="row">
            <div class="social-media-icons col-xl-9 col-sm-7 col-6">Ícones Sociais</div>
            <div class="search col-xl-3 col-sm-5 col-6 tex-right">Pesquisa</div>
          </div>
        </div>
      </section>
      <section class="menu-area">
        <section class="logo">Logo</section>
        <nav class="menu">Menu</nav>
      </section>
    </header>