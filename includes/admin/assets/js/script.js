jQuery( document ).ready( function( $ ){

	$( '#mxsbap_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( '#mxsbap_wpnonce' ).val();
		var script_string = $( '#mxsbap_script_body' ).val();
		var block_string = $( '#mxsbap_block_body' ).val();
		var is_checked_restore = $( '#mxsbap_restore_data' ).prop( 'checked' );

		var start_restore = is_checked_restore === true ? 'restore' : '0';

		var data = {

			'action': 'mxsbap_update',
			'nonce': nonce,
			'script_string': script_string,
			'block_string': block_string,
			'is_checked_restore': start_restore

		};

		jQuery.post( ajaxurl, data, function( response ){

			console.log( response )

		} );		

	} );

} );