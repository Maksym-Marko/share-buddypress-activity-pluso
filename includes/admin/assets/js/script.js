jQuery( document ).ready( function( $ ){

	$( '#mxsbap_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( '#mxsbap_wpnonce' ).val();
		var script_string = $( '#mxsbap_script_body' ).val();

		var data = {

			'action': 'mxsbap_update',
			'nonce': nonce,
			'script_string': script_string


		};

		jQuery.post( ajaxurl, data, function( response ){

			console.log( response )

		} );

		

	} );

} );