/**
 * ServiceFlow Core — Admin script
 */
( function ( $ ) {
	'use strict';
	$( function () {
		// Toggle price range input visibility depending on price type selection
		var $priceType = $( '#sf_price_type' );
		var $priceToRow = $( '#sf_price_to' ).closest( 'tr' );

		function updatePriceFields() {
			if ( $priceType.val() === 'range' ) {
				$priceToRow.show();
			} else {
				$priceToRow.hide();
			}
		}

		if ( $priceType.length ) {
			$priceType.on( 'change', updatePriceFields );
			updatePriceFields();
		}
	} );
} )( jQuery );
