<?php

if ( ! function_exists( 'fp_setup' ) ):
function fp_setup() {

	/****************************************
	Backend
	*****************************************/

	// Execute shortcodes in widgets
	// add_filter('widget_text', 'do_shortcode');

	// Add RSS links to head
	// Already built into FoundationPress
	//add_theme_support( 'automatic-feed-links' );

	// Add Editor Style
	add_editor_style( 'editor-style.css' );

	// Don't update theme
	add_filter( 'http_request_args', 'fp_dont_update_theme', 5, 2 );

	// Prevent File Modifications
	// Modifications in WordPress wouldn't be included in any type of version control, therefore disallow
	define ( 'DISALLOW_FILE_EDIT', true );

	// Set Content Width
	if ( ! isset( $content_width ) ) $content_width = 960;

	// Enable Post Thumbnails
	// Handled by FoundationPress
	// add_theme_support( 'post-thumbnails' );

	// Add Image Sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Enable Custom Headers
	// add_theme_support( 'custom-header' );

	// Enable Custom Backgrounds
	// add_theme_support( 'custom-background' );

	// Remove Dashboard Meta Boxes
	add_action('wp_dashboard_setup', 'fp_remove_dashboard_widgets' );

	// Change Admin Menu Order
	add_filter('custom_menu_order', 'fp_custom_menu_order');
	add_filter('menu_order', 'fp_custom_menu_order');

	// Hide Admin Areas that are not used
	add_action( 'admin_menu', 'fp_remove_menu_pages' );

	// Remove default link for images
	add_action('admin_init', 'fp_imagelink_setup', 10);

	// Show Kitchen Sink in WYSIWYG Editor
	add_filter( 'tiny_mce_before_init', 'fp_unhide_kitchensink' );

	// Define custom post type capabilities for use with Members
	// add_action( 'admin_init', 'fp_add_post_type_caps' );

}
endif; // fp_setup
add_action('after_setup_theme', 'fp_setup');
