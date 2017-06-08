<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<header class="header clearfix">
<div class="site-title">
<h1><a href="/"><?php bloginfo( 'name '); ?></a></h1>
<h3><?php bloginfo( 'description' ); ?></h3>
</div>
</header>

<div class="menu">
<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '' ) ); ?></nav>
</div>