<?php

add_action( 'widgets_init', 'register_new_sidebars' );

function register_new_sidebars() {
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => __( 'Sidebar', 'chronos' ),
    'description' => __( 'Sidebar', 'welcome' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
}

add_image_size( 'thumb-noticia', 600, 400, true );

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )      
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 add_theme_support( 'post-thumbnails' );



add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_theme_scripts() {  
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css');  
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');  
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');  
  wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');  
  wp_enqueue_style( 'style', get_stylesheet_uri() );  

  wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.11.0.min.js', true);  
  wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array ( 'jquery' ), 1.0, true);  
  wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array ( 'jquery' ), 1.0, true);    
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.0, true);  
}


/**
* Remove Woocommerce Select2 - Woocommerce 3.2.1+
*/
function woo_dequeue_select2() {
  if ( class_exists( 'woocommerce' ) ) {
      wp_dequeue_style( 'select2' );
      wp_deregister_style( 'select2' );

      wp_dequeue_script( 'selectWoo');
      wp_deregister_script('selectWoo');
  } 
}
add_action( 'wp_enqueue_scripts', 'woo_dequeue_select2', 100 );