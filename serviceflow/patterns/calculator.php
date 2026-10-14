<?php
/**
 * Title: Price Calculator
 * Slug: serviceflow/calculator
 * Categories: serviceflow-services, serviceflow
 * Description: Calculator section for instant vehicle service cost estimates.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"calculator","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div id="calculator" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'TRANSPARENT ESTIMATES', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Instant Service Cost Estimate', 'serviceflow' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Calculate an accurate price estimate in seconds before you visit our workshop. No surprise charges, no hidden add-ons.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checklist","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<ul class="wp-block-list is-style-checklist" style="margin-top:var(--wp--preset--spacing--30)">
				<li><?php esc_html_e( 'Upfront labor and genuine parts calculation', 'serviceflow' ); ?></li>
				<li><?php esc_html_e( 'Tailored to your vehicle class and package', 'serviceflow' ); ?></li>
				<li><?php esc_html_e( 'Direct 1-click booking with estimated quote attached', 'serviceflow' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"className":"is-style-card sf-accent-top","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card sf-accent-top">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Get Your Service Estimate', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Select your vehicle type and the desired service below:', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
						<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Vehicle Type', 'serviceflow' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"is-style-chip","fontSize":"small"} -->
						<p class="is-style-chip has-small-font-size">🚗 <?php esc_html_e( 'Compact / Sedan (Standard)', 'serviceflow' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
						<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Selected Service', 'serviceflow' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"is-style-chip","fontSize":"small"} -->
						<p class="is-style-chip has-small-font-size">🛢️ <?php esc_html_e( 'Synthetic Oil & Filter', 'serviceflow' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"sf-price-label"} -->
						<p class="sf-price-label"><?php esc_html_e( 'Estimated Total', 'serviceflow' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"sf-price"} -->
						<p class="sf-price">$65.00 – $85.00</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book This Estimate', 'serviceflow' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
