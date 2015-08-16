<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" type="text/css" rel="stylesheet">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
    <div class="headerMain">
		<div class="headerTopMain"><div class="headerTop"><hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php /*?><?php bloginfo( 'name' ); ?><?php */?><img src="<?php echo get_template_directory_uri()?>/images/logo.gif" /></a></h1><div class="socialIcon"><?php dynamic_sidebar('header'); ?></div>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		
       <div style="clear:both;"></div></div></div>
       <!--Home Page Slider--> 
   
        <?php 
		if(is_page('home'))
		{ ?>
         <section style="max-width:1200px; margin:auto; float:none; margin-bottom:40px;">    
         <div id="header-img" > 
         
		<?php if ( get_header_image() ) : ?>
		
        
        
        <article class="slider-button">
        	
        	<div class="text-wrapper">

        		<h2>Alex Midler's 4th annual "Roll-a-thon"</h2>

        		<div class="donate-now"> <a  href="https://www.crowdrise.com/roll-a-thon">DONATE</a></div>

        	</div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" alt="" /></a>
        </article>
        
        
         <article>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg" class="header-image" alt="" /></a>
        </article>
        
        
         <article>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/slider3.jpg" class="header-image" alt="" /></a>
        </article>
        
        <article>
        <iframe width="100%" id="video-h" src="https://www.youtube.com/embed/_kDsEciTQI8" frameborder="0" allowfullscreen> </iframe>
        </article>
        
        
        
        
        
        
        
        
        
		<?php endif; ?>
        
        </div> </section>
        
	<?php	}
		
		?>
        <div style="clear:both;"></div>
</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">