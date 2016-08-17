<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ramonacantu
 */

global $la_url;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!-- Custom -->
<link rel="icon" type="image/png" href="<?php echo $la_url ?>/images/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo $la_url ?>/js/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $la_url ?>/js/slick/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo $la_url ?>/css/style.css" />
<!-- /Custom -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	<div class="nav">

	  <div id="menu" class="menu">
	    <div class="close">
	      <a href="#" class="cerrar">
	        <img src="<?php echo $la_url; ?>/images/cerrar.svg">
	        <span>Cerrar</span>
	      </a>
	   </div>

	    <div class="menu-logo">
	      <img src="<?php echo $la_url; ?>/images/logo-blanco.svg">
	      <hr>
	      <p>Blog</p>
	    </div>

	    <ul class="links">

	      <li>
	        <a href="/index.html">
	          <span>1</span> Inicio
	        </a>
	      </li>

	      <li>
	        <a href="/bio.html">
	          <span>2</span> Bio
	        </a>
	      </li>
	      
	      <li>
	        <a href="/tratamientos.html">
	          <span>3</span> Tratamientos
	        </a>
	      </li>

	      <li>
	        <a href="/blog">
	          <span>4</span> Blog
	        </a>
	      </li>

	      <li>
	        <a href="/contacto.html">
	          <span>5</span> Contacto
	        </a>
	      </li>

	    </ul>
	  </div>
	</div><!-- .nav -->

  <a href="#menu" class="open black">
    <span>Menú</span>
    <img src="<?php echo $la_url; ?>/images/menu.svg">
  </a>

  <div class="nav-logo black blog-logo">
    <img src="<?php echo $la_url; ?>/images/logo.svg">
  </div>
	</header><!-- #masthead -->

	<div class="blog-main yellow">
	  <div class="blog-text">
	    <h3>Blog</h3>
	  </div>

	  <div class="blog-social">
	    <ul class="redes">
	      <li>
	        <a href="https://twitter.com/ramonacantu" target="_blank">
	          <img src="<?php echo $la_url; ?>/images/social-sprite-01.svg">
	        </a>
	      </li>
	      <li>
	        <a href="https://mx.linkedin.com/in/ramona-i-cantú-westendarp-873611a" target="_blank">
	          <img src="<?php echo $la_url; ?>/images/social-sprite-02.svg">
	        </a>
	      </li>
	      <li>
	        <a href="http://instagram.com" target="_blank">
	          <img src="<?php echo $la_url; ?>/images/social-sprite-03.svg">
	        </a>
	      </li>
	      <li>
	        <a href="https://www.facebook.com/ramonacantu" target="_blank">
	          <img src="<?php echo $la_url; ?>/images/social-sprite-04.svg">
	        </a>
	      </li>
	      <li>
	        <a href="https://plus.google.com/u/0/116555482627484807607/posts" target="_blank">
	          <img src="<?php echo $la_url; ?>/images/social-sprite-05.svg">
	        </a>
	      </li>
	    </ul>
	  </div>
	</div>
	<!-- .blog-main -->
	

	<div class="search-box yellow">
	<?php get_search_form(); ?>
	<div class="articulos-boton">
    <a href="/blog/#blog-list">VER ARTÍCULOS</a>
  </div>
	</div><!-- .search yellow -->

	<div id="content" class="site-content">
