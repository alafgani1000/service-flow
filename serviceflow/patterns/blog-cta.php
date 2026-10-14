<?php
/**
 * Title: Blog to Service Funnel CTA
 * Slug: serviceflow/blog-cta
 * Categories: serviceflow-conversion, serviceflow
 * Description: Conversion banner placed inside blog posts to funnel organic readers into service bookings.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"wide","className":"is-style-card sf-accent-top","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-card sf-accent-top has-surface-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'NEED THIS SERVICE?', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Don’t Ignore Warning Signs — Get an Instant Estimate', 'serviceflow' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Book online today or message us on WhatsApp for fast diagnosis and genuine replacement parts.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Now', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-whatsapp","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
				<div class="wp-block-button is-style-whatsapp"><a class="wp-block-button__link wp-element-button" href="https://wa.me/"><?php esc_html_e( 'WhatsApp', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
