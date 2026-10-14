<?php
/**
 * Title: Service Areas
 * Slug: serviceflow/service-areas
 * Categories: serviceflow-conversion, serviceflow
 * Description: Geographic areas served with directions and local coverage.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"areas","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div id="areas" class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'LOCAL COVERAGE', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Serving Drivers Across the Metro Area', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Conveniently located with fast highway access and complimentary customer drop-off service.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">📍 <?php esc_html_e( 'Downtown & Central', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Only 10 minutes from city center. Free morning shuttle to downtown offices.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-arrow-link","fontSize":"small","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"directions"}}}}} -->
					<div class="wp-block-button has-custom-font-size is-style-arrow-link has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get Directions', 'serviceflow' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">📍 <?php esc_html_e( 'North Valley & Heights', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Direct access via Highway 101, Exit 14. Ample customer parking on site.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-arrow-link","fontSize":"small","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"directions"}}}}} -->
					<div class="wp-block-button has-custom-font-size is-style-arrow-link has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get Directions', 'serviceflow' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">📍 <?php esc_html_e( 'South Suburbs & Westside', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Convenient pick-up and drop-off coordination available for Westside residents.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-arrow-link","fontSize":"small","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"directions"}}}}} -->
					<div class="wp-block-button has-custom-font-size is-style-arrow-link has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get Directions', 'serviceflow' ); ?></a></div>
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
