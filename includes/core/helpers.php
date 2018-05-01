<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require template for admin panel
*/
function mxsbap_require_template_admin( $file ) {

	require_once MXSBAP_PLUGIN_ABS_PATH . 'includes\admin\templates\\' . $file;

}

/*
* Script
*/
function mxsbap_select_script() {

	global $wpdb;

	$table_name = $wpdb->prefix . MXSBAP_TABLE_SLUG;

	$get_scripts_string = $wpdb->get_row( "SELECT script FROM $table_name WHERE id = 1" );

	return $get_scripts_string->script;

}

/*
* Block for icons
*/
function mxsbap_select_block_icons() {

	global $wpdb;

	$table_name = $wpdb->prefix . MXSBAP_TABLE_SLUG;

	$get_scripts_string = $wpdb->get_row( "SELECT block_icons FROM $table_name WHERE id = 1" );

	return $get_scripts_string->block_icons;

}