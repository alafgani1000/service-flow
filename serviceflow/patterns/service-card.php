<?php
/**
 * Title: Service Card
 * Slug: serviceflow/service-card
 * Categories: serviceflow-services, serviceflow
 * Description: Reusable single service card with icon, title, description, price, and CTA.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card">
	<!-- wp:paragraph {"fontSize":"x-large"} -->
	<p class="has-x-large-font-size">🔧</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Service Name', 'serviceflow' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
	<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Clear, concise description explaining what this service covers and what problem it solves for the customer.', 'serviceflow' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"sf-price"} -->
	<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'Starting from', 'serviceflow' ); ?> </span>$50.00</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-arrow-link","fontSize":"small","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
		<div class="wp-block-button has-custom-font-size is-style-arrow-link has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Service', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
