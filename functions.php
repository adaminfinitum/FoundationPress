<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');


/*
Adapted from WorPress-Starter-Theme
*/

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/library/init.php' );

/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/library/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/library/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'fp_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'fp_filter_yoast_seo_metabox' );
function fp_filter_yoast_seo_metabox() {
	return 'low';
}

?>
