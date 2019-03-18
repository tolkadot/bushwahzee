<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/modules/bar.php
 *
 * @package  TribeEventsCalendar
 * @version 4.6.26
 */
?>

<?php

$filters     = tribe_events_get_filters();
$views       = tribe_events_get_views();
$current_url = tribe_events_get_current_filter_url();
$classes     = array( 'tribe-clearfix' );

if ( ! empty( $filters ) ) {
	$classes[] = 'tribe-events-bar--has-filters';
}

if ( count( $views ) > 1 ) {
	$classes[] = 'tribe-events-bar--has-views';
}

?>

<?php do_action( 'tribe_events_bar_before_template' ) ?>

<?php
do_action( 'tribe_events_bar_after_template' );
