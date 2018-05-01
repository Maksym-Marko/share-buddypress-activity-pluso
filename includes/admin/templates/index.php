<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<h1>Settings the Share BuddyPress activity Pluso plugin</h1>



<form id="mxsbap_form_update" class="mx-settings" method="post" action="">

	<div class="mx-block_wrap">

		<h2>Script</h2>
		<textarea name="mxsbap_script_body" id="mxsbap_script_body"><?php echo mxsbap_select_script(); ?></textarea>
	
	</div>

	<div class="mx-block_wrap">

		<h2>Block for icons</h2>
		<textarea name="mxsbap_block_body" id="mxsbap_block_body"><?php echo mxsbap_select_block_icons(); ?></textarea>		

		<p class="mx-submit_button_wrap">
			<input type="hidden" id="mxsbap_wpnonce" name="mxsbap_wpnonce" value="<?php echo wp_create_nonce( 'mxsbap_nonce_request' ) ;?>" />

			<div class="mx-restore_data">
				<label for="mxsbap_restore_data">Restore data by default</label>
				<input type="checkbox" class="button preview" id="mxsbap_restore_data" />
			</div>

			<input class="button-primary" type="submit" name="mxsbap-submit" value="Save" />
		</p>
	</div>

</form>

