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

</div> <!-- page-content-wrapper -->

<div id="footer">
	<div id="footer-left">
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'menu' => 'Footer 1' ) ); ?>
		</div>
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'menu' => 'Footer 2' ) ); ?>
		</div>
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'menu' => 'Footer 3' ) ); ?>
		</div>
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'menu' => 'Footer 4' ) ); ?>
		</div>
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'menu' => 'Footer 5' ) ); ?>
		</div>
	</div>
	<div id="footer-right">

	<?php dynamic_sidebar( 'footer' ); ?>

	</div>
</div>

<?php add_thickbox(); ?>

<?php wp_footer(); ?> 

</body>
</html>