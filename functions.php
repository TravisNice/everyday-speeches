<?php

function simplicity_setup() {

  register_nav_menu('header-menu',__( 'Header Menu' ));

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form' ) );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

  //disable WordPress sanitization to allow more than just $allowedtags from /wp-includes/kses.php
  remove_filter('pre_user_description', 'wp_filter_kses');

  //add sanitization for WordPress posts
  add_filter( 'pre_user_description', 'wp_filter_post_kses');
}
add_action( 'after_setup_theme', 'simplicity_setup' );

function add_theme_scripts() {

  wp_enqueue_style( 'simplicity', get_stylesheet_uri() );
  wp_enqueue_style( 'Cardo', "//fonts.googleapis.com/css?family=Amethysta" );
  wp_enqueue_style( 'mailchimp', "//cdn-images.mailchimp.com/embedcode/classic-081711.css" );

  wp_enqueue_script( 'adsbygoogle', "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" );
  wp_enqueue_script( 'linked_api', "//platform.linkedin.com/in.js" );
 
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>