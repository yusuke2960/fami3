<?php

add_theme_support( 'post-thumbnails' );



function addtional_styles() {
  
    wp_enqueue_style( 'front-css', get_template_directory_uri() . '/front-style.scss' );
  
}
add_action( 'wp_enqueue_scripts', 'addtional_styles' );

?>