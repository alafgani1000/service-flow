/**
 * Editor preview for serviceflow/breadcrumbs (no build step required).
 *
 * The real trail is rendered on the server; the editor shows a static sample.
 */
( function ( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;

	function preventNavigation( event ) {
		event.preventDefault();
	}

	wp.blocks.registerBlockType( 'serviceflow/breadcrumbs', {
		edit: function () {
			var blockProps = wp.blockEditor.useBlockProps( {
				className: 'sf-breadcrumbs',
				'aria-label': __( 'Breadcrumb', 'serviceflow' ),
			} );

			return el(
				'nav',
				blockProps,
				el(
					'ol',
					null,
					el( 'li', null, el( 'a', { href: '#', onClick: preventNavigation }, __( 'Home', 'serviceflow' ) ) ),
					el( 'li', null, el( 'a', { href: '#', onClick: preventNavigation }, __( 'Parent', 'serviceflow' ) ) ),
					el( 'li', null, el( 'span', { 'aria-current': 'page' }, __( 'Current page', 'serviceflow' ) ) )
				)
			);
		},
		save: function () {
			return null;
		},
	} );
} )( window.wp );
