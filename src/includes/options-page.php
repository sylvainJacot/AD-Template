<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		// 'capability'	=> 'edit_posts',
        'icon_url' => 'dashicons-admin-generic',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> '404 page',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-general-settings',
	));
		
}