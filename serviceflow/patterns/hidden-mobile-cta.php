<?php
/**
 * Title: Mobile Sticky CTA
 * Slug: serviceflow/mobile-cta
 * Categories: serviceflow
 * Inserter: false
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","className":"sf-mobile-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sf-mobile-cta">
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"phone"}}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:"><?php esc_html_e( '📞 Call', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-whatsapp","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
		<div class="wp-block-button is-style-whatsapp"><a class="wp-block-button__link wp-element-button" href="https://wa.me/"><?php esc_html_e( '💬 WhatsApp', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( '📅 Book Now', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
