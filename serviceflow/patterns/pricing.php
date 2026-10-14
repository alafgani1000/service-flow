<?php
/**
 * Title: Pricing Guide
 * Slug: serviceflow/pricing
 * Categories: serviceflow-services, serviceflow
 * Description: Transparent pricing packages with fixed, starting from, and range formats.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"pricing","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div id="pricing" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'SIMPLE & HONEST RATES', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Transparent Service Pricing', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Fair upfront pricing with no hidden technician fees. Select a package or request a custom quote.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Basic Maintenance', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price">$45.00</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Ideal for routine scheduled checkups every 5,000 km.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-checklist","fontSize":"small"} -->
				<ul class="wp-block-list is-style-checklist has-small-font-size">
					<li><?php esc_html_e( 'Conventional engine oil & OEM filter', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Tire pressure & tread depth check', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Fluid level top-offs (wiper, coolant)', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Visual brake pad inspection', 'serviceflow' ); ?></li>
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","width":100,"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Basic', 'serviceflow' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card sf-accent-top","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card sf-accent-top">
				<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
				<p class="is-style-eyebrow"><?php esc_html_e( 'MOST POPULAR', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Full Synthetic Care', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price">$85.00</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Maximum engine protection and complete multi-point safety review.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-checklist","fontSize":"small"} -->
				<ul class="wp-block-list is-style-checklist has-small-font-size">
					<li><?php esc_html_e( 'Premium 100% full synthetic oil & filter', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Computer OBD-II diagnostic system scan', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Full 4-wheel brake inspection', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Battery health test & terminal cleaning', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Free tire rotation', 'serviceflow' ); ?></li>
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100,"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Synthetic', 'serviceflow' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Complete Overhaul', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$160.00</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Comprehensive annual major service for total road confidence.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"is-style-checklist","fontSize":"small"} -->
				<ul class="wp-block-list is-style-checklist has-small-font-size">
					<li><?php esc_html_e( 'Full synthetic oil, air & cabin filter overhaul', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Spark plug inspection / replacement', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Brake fluid & coolant flush', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( '3D laser wheel alignment', 'serviceflow' ); ?></li>
					<li><?php esc_html_e( 'Full interior vacuum & car wash', 'serviceflow' ); ?></li>
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","width":100,"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Overhaul', 'serviceflow' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
