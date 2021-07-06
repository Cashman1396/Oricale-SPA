<?php


function monhun_themes() {

      //Bootstrap
      wp_enqueue_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
      wp_enqueue_script( 'boot5-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js','','',true );
  
      //Slick
      wp_enqueue_style( 'slick-css',  get_stylesheet_directory_uri() . '/inc/slick/slick.css', array());
      wp_enqueue_style( 'slick-theme-css',  get_stylesheet_directory_uri() . '/inc/slick/slick-theme.css' );
     wp_enqueue_script( 'slick-js',  get_stylesheet_directory_uri() . '/inc/slick/slick.js', array( 'jquery' ), '1.8.4', TRUE );
      wp_enqueue_script( 'slick-init',   get_stylesheet_directory_uri() . '/inc/slick/slick-init.js', array( 'slick-js' ), '1.0.0',  TRUE );
  
  
      //Style
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  


}


add_action( 'wp_enqueue_scripts', 'monhun_themes' );







?>