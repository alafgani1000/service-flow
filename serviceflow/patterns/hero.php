<?php
/**
 * Title: Hero — Centered
 * Slug: serviceflow/hero
 * Categories: serviceflow-hero, serviceflow
 * Description: Above-the-fold hero section answering what you do in 3 seconds.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"letterSpacing":"0.15em"}}} -->
		<p class="is-style-eyebrow" style="letter-spacing:0.15em">⚡ <?php esc_html_e( 'CERTIFIED AUTO CARE & REPAIR', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"sf-text-balance"} -->
		<h1 class="wp-block-heading sf-text-balance"><?php esc_html_e( 'Professional Car Service You Can Trust', 'serviceflow' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"surface","className":"sf-text-balance"} -->
		<p class="has-surface-color has-text-color has-large-font-size sf-text-balance"><?php esc_html_e( 'Complete maintenance and repair services for your vehicle. Honest pricing, certified mechanics, and same-day service available.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
			<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book a Service', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"estimate"}}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#calculator"><?php esc_html_e( 'Get Estimate', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-whatsapp","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
			<div class="wp-block-button is-style-whatsapp"><a class="wp-block-button__link wp-element-button" href="https://wa.me/"><?php esc_html_e( 'WhatsApp', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:list {"className":"sf-trust-inline","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<ul class="wp-block-list sf-trust-inline" style="margin-top:var(--wp--preset--spacing--40)">
			<li><?php esc_html_e( '4.9/5 Customer Rating', 'serviceflow' ); ?></li>
			<li><?php esc_html_e( '5,000+ Vehicles Serviced', 'serviceflow' ); ?></li>
			<li><?php esc_html_e( '10+ Years Experience', 'serviceflow' ); ?></li>
			<li><?php esc_html_e( '12-Month / 20,000 km Warranty', 'serviceflow' ); ?></li>
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
