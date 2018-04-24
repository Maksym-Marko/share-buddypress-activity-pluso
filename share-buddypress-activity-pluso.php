<?php
/*
Plugin Name: Share BuddyPress activity Pluso
Plugin URI: https://github.com/Maxim-us/share-buddypress-activity-pluso
Description: ...
Author: Marko Maksym
Version: 1.0
Author URI: https://github.com/Maxim-us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Define MXSBAP_PLUGIN_PATH
if ( ! defined( 'MXSBAP_PLUGIN_PATH' ) ) {

	define( 'MXSBAP_PLUGIN_PATH', __FILE__ );

}

// Define MXSBAP_PLUGIN_URL
if ( ! defined( 'MXSBAP_PLUGIN_URL' ) ) {

	// Return http://my-domain.com/wp-content/plugins/wp-plugin-skeleton/
	define( 'MXSBAP_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

// Define MXSBAP_PLUGN_BASE_NAME
if ( ! defined( 'MXSBAP_PLUGN_BASE_NAME' ) ) {

	// Return share-buddypress-activity-pluso/share-buddypress-activity-pluso.php
	define( 'MXSBAP_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

// Include the main MXSBAPMainClass class.
if ( ! class_exists( 'MXSBAPMainClass' ) ) {

	require_once plugin_dir_path( __FILE__ ) . '/includes/class-final-main-class.php';

	// Create new instance
	new MXSBAPMainClass();

	/*
	* Registration hooks
	*/
	// Activation
	register_activation_hook( __FILE__, array( 'MXSBAPBasisPluginClass', 'activate' ) );

	// Deactivation
	register_deactivation_hook( __FILE__, array( 'MXSBAPBasisPluginClass', 'deactivate' ) );

}