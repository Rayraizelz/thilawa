<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<title>
<?php wp_title( ' | ', true, 'right' ); ?>
<?php bloginfo( 'name' ); ?>
</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

<nav class="main-navigation">
  <a href="#" class="header-close-button sp-only"></a>
  <ul class="font-serif">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Top</a></li>
    <li><a href="/news/">What's New</a></li>
    <li><a href="/Project/">Project Overview</a></li>
    <li><a href="/Our Work/">Our Work</a></li>
    <li><a href="/Socail Performance/">Social Performance</a></li>
    <li><a href="/contact/">Contact Us</a></li>
  </ul>
</nav>

</header>