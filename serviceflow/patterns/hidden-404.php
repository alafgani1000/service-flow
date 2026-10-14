<?php
/**
 * Title: 404 Not Found
 * Slug: serviceflow/hidden-404
 * Categories: serviceflow
 * Inserter: false
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
	<p class="is-style-eyebrow"><?php esc_html_e( 'Error 404', 'serviceflow' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'Page Not Found', 'serviceflow' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'The page you are looking for may have been moved, renamed, or is temporarily unavailable. Try searching or return to our homepage.', 'serviceflow' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search our website', 'serviceflow' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'serviceflow' ); ?>","buttonUseIcon":true} /-->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Homepage', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"services"}}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'View Services', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
