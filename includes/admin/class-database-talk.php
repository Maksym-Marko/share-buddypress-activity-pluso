<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSBAPDataBaseTalk
{

	public function __construct()
	{

		$this->mxsbap_observe_update_data();

	}

	// observe function
	public function mxsbap_observe_update_data()
	{

		add_action( 'wp_ajax_mxsbap_update', array( $this, 'prepare_update_script' ) );

	}

	// prepare for data updates
	public function prepare_update_script()
	{
		
		// checked POST nonce is not empty
		if( empty( $_POST['nonce'] ) ) wp_die( '0' );

		// Checked or nonce match
		if( wp_verify_nonce( $_POST['nonce'], 'mxsbap_nonce_request' ) ){

			$this->update_script( $_POST['script_string'] );

		}

		wp_die();

	}

		// update data
		public function update_script( $string_script )
		{

			echo $string_script;

		}

}

new MXSBAPDataBaseTalk();