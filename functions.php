<?php

// Carregando nossos scripts e folha de estilos
function load_scripts(){
  wp_enqueue_script('bootstrap-js', 
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array('jquery'), '4.4.1', true);
    wp_enqueue_style('bootstrap-css', 
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    array(), '4.4.1', 'all');

  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0',
    'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function wpcurso_config(){
  // Registrando nossos menus
  register_nav_menus(
    array(
      'my_main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'
    )
  );

  $args = array(
    'height' => 225,
    'width' => 1920
  );

  add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'wpcurso_config', 0);




function change_graphic_lib($array) {
  return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
}

add_filter('wp_image_editors', 'change_graphic_lib');