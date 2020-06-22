<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/
function loadStylesheet()
{
	
	wp_register_style('stylesheet',get_template_directory_uri() . '/css/bootstrap.min.css', array(),false,'all');
	wp_enqueue_style('stylesheet');
	wp_register_style('style',get_template_directory_uri() . '/style.css', array(),false,'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_script','loadStylesheet');
function sunset_load_admin_scripts( $hook ){
	
	if( 'toplevel_page_alecaddd_sunset' != $hook ){ return; }
	
	wp_register_style( 'sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'sunset_admin' );
	
	wp_enqueue_media();
	
	wp_register_script( 'sunset-admin-script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sunset-admin-script' );

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '','1.0.0',true);

	add_action('wp_enqueue_script','jquery');
}
add_action( 'admin_enqueue_scripts', 'sunset_load_admin_scripts' );


