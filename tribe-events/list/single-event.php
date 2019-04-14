<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.19
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<div class="container">
  <div class="row">
<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<div class="col-12">
<h3 class="tribe-events-list-event-title mb-3">
	<!-- <a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"> -->
		<?php the_title() ?>
	<!-- </a> -->
</h3>
</div>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>

<div class="tribe-events-event-meta">
	<div class="author <?php echo esc_attr( $has_venue_address ); ?>">

		<!-- Schedule & Recurrence Details -->
<div class="col-12">
		<div class="tribe-event-schedule-details">
			<span class="bold">Time </span><span> | </span><?php echo tribe_events_event_schedule_details() ?>
		</div>
</div>

		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
<div class="col-12">
			<div class="tribe-events-venue-details">
			<span class="bold">Venue </span><span> | </span><?php
				$address_delimiter = empty( $venue_address ) ? ' ' : ', ';

				// These details are already escaped in various ways earlier in the process.
				echo implode( $address_delimiter, $venue_details );

				if ( tribe_show_google_map_link() ) {
					echo tribe_get_map_link_html();
				}
			?>
			</div> <!-- .tribe-events-venue-details -->
		<?php endif; ?>
</div>
	</div>
</div><!-- .tribe-events-event-meta -->

<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?>
<div class="col-12">
	<div class="mb-2">
		<span class="bold">Cost </span><span> | </span>	<span class=""><?php echo tribe_get_cost( null, true ); ?></span>
		<?php
		/**
		 * Runs after cost is displayed in list style views
		 *
		 * @since 4.5
		 */
		do_action( 'tribe_events_inside_cost' )
		?>
	</div>
</div>
<?php endif; ?>



<?php $website = tribe_get_event_website_link(); ?>
<?php if ( ! empty( $website ) ) : ?>
<div class="col-12">
	<div class="mb-3">
    <span class="bold">Bookings</span><span> | </span><span> <?php echo $website; ?>  </span>
  </div>
<?php endif ?>

</div>
</div>
</div>

<?php do_action( 'tribe_events_after_the_meta' ) ?>
<div class="container">
  <div class="row">


<div class="col-md-4 mb-md-3 mb-sm-2">
  <?php echo tribe_event_featured_image( null, 'full' ); ?>
</div><!-- Event Image -->

<div class="col-md-8 mb-md-3 mb-sm-2">
<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ); ?>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary">

<?php the_field("production_blurb") ?>

	<!-- <a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="bush-button" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> </a> -->
</div><!-- .tribe-events-list-event-description -->
</div>
<div class="col-12">
<?php the_content(); ?></div>
</div>
</div>
<?php

do_action( 'tribe_events_after_the_content' );
