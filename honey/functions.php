<?php

function theme_styles() {
  wp_enqueue_style( 'bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

  global $wp_scripts;

  wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);

  wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

  $wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9');
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(''), '', true);
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script('font_awesome_js', 'https://use.fontawesome.com/be87df1b39.js', array('jquery'), '', true);
  // wp_enqueue_script('masonry_js', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '', true);
  // wp_enqueue_script('imageloader_js', get_template_directory_uri() . '/js/imageloader.pkgd.min.js', array('jquery'), '', true);
  // wp_enqueue_script('masonry_loader_js', get_template_directory_uri() . '/js/masonry_loader.js', array('masonry_js'), '', true);
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter('show_admin_bar', '__return_false');

add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}

add_action( 'init', 'register_theme_menus' );

add_theme_support( 'post-thumbnails' );

 ?>
