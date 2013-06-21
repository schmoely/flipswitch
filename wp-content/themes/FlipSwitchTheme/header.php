<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage FLipSwitch
 * @since FlipSwitch 1.0
 */
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta charset="UTF-8">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

    <!--<link rel="stylesheet" href="http://172.16.85.14/flipswitch/wp-content/themes/FlipSwitchTheme/style.css" type="text/css" />-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.css" type="text/css" />
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
<div id="header" class="shadow">
	<div id="header-container">
		<div class="logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fs_logo.png" alt="FlipSwitch" />
		</div>

		<nav id="main-nav" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
	        <select id="resp-nav">
	        	<option>Menu</option>
	        	<option value="#">Products</option>
	        	<option value="#">Programs</option>
	        	<option value="#">Solutions</option>
	        	<option value="#">Customers</option>
	        	<option value="#">Case Studies</option>
	        	<option value="#">About</option>
	        </select>

    </div>
</div><!-- Header -->

<div id="banner-row">
	<div id="banner">
		<div id="banner-text" class="title">
		<?php if (have_posts()) : ?>  
    			<?php while (have_posts()) : the_post(); ?>  
        			<?php
echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?>
    			<?php endwhile; ?>  
    			<?php else : ?>  
    		<?php endif; ?>
		</div>

		<div id="banner-image">
		<?php if (have_posts()) : ?>  
    			<?php while (have_posts()) : the_post(); ?>  
        			<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				}
			?>
    			<?php endwhile; ?>  
    			<?php else : ?>  
    		<?php endif; ?>
		</div>
	</div>
</div>
<div id="page-content-wrapper">