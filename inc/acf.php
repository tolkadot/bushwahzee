<?php if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> ' Contact Settings',
		'menu_title'	=> 'Contact Details',
		'menu_slug' 	=> 'contact-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'icon_url' => 'dashicons-admin-users',
    'position' => 3
	));
}
