<?php

add_action( 'template_redirect', 'cliff_redirect_tec_event_to_its_website_url' );
function cliff_redirect_tec_event_to_its_website_url() {
	if (
		! class_exists( 'Tribe__Events__Main' )
		|| ! is_singular( Tribe__Events__Main::POSTTYPE )
	) {
		return false;
	}
	$redirect_to = esc_url_raw( tribe_get_event_website_url( get_the_ID() ) );
	if ( empty( $redirect_to ) ) {
		return false;
	} else {
		// 301 is permanent. 302 is temporary.
		// https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#3xx_Redirection
		// function's default is 302
		wp_redirect( $redirect_to, 301 );
		exit;
	}
	return null;
}
