<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Airforcee Theme Settings',
		'menu_title'	=> 'Airforce Theme Settings',
		'menu_slug' 	=> 'airforce-theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}
