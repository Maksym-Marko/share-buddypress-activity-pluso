<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<h1>Settings the Share BuddyPress activity Pluso plugin</h1>

<div class="mx-block_wrap">

	<form id="mxsbap_form_update" class="mx-settings" method="post" action="">

		<h2>Default script</h2>
		<textarea name="mxsbap_script_body" id="mxsbap_script_body"></textarea>

		<p class="mx-submit_button_wrap">
			<input type="hidden" id="mxsbap_wpnonce" name="mxsbap_wpnonce" value="<?php echo wp_create_nonce( 'mxsbap_nonce_request' ) ;?>" />
			<input class="button-primary" type="submit" name="mxsbap-submit" value="Save" />
		</p>

	</form>

</div>