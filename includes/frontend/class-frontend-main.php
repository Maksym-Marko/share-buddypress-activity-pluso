<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSBAPFrontEndMain
{

	// Register function
	public function register()
	{

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );


	}

		public function enqueue()
		{

			wp_enqueue_style( 'mxsbap_font_awesome', MXSBAP_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxsbap_style', MXSBAP_PLUGIN_URL . 'includes/frontend/assets/css/style.css', array( 'mxsbap_font_awesome' ), MXSBAP_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxsbap_script', MXSBAP_PLUGIN_URL . 'includes/frontend/assets/js/script.js', array( 'jquery' ), MXSBAP_PLUGIN_VERSION, false );

		}

}

// Initialize
$initialize_class = new MXSBAPFrontEndMain();

// Apply scripts and styles
$initialize_class->register();