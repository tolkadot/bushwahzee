<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	// '/custom-comments.php',                 // Custom Comments file.
	// '/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	// '/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
  '/post-query-form.php',                      // Load deprecated functions.
  /* Bushwahzee specific */
  '/social-widget.php',                      // Load deprecated functions.
  '/acf.php',                      // Load deprecated functions.
  '/music-bands-widget.php',                      // Load deprecated functions.
  '/services-widget.php',                      // Load deprecated functions.
  '/events-cal.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// add_action( 'admin_bar_menu', 'show_template' );
// function show_template() {
// global $template;
// print_r( $template );
// }
