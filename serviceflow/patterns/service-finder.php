<?php
/**
 * Title: Service Finder
 * Slug: serviceflow/service-finder
 * Categories: serviceflow-services, serviceflow
 * Description: Category quick-filters letting visitors navigate directly to what they need.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'QUICK SERVICE FINDER', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What does your vehicle need today?', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Select a category to view specialized services, estimated pricing, and booking options.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"maintenance"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '🛢️ Maintenance', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"brakes"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '🛑 Brake Service', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"ac"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '❄️ AC Repair', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"engine"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '⚙️ Diagnostics', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"tires"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '🛞 Tires & Alignment', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-chip","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"service_category","term":"detailing"}}}}} -->
			<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( '✨ Detailing', 'serviceflow' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
