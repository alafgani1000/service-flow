<?php
/**
 * Title: Trust Metrics
 * Slug: serviceflow/trust-metrics
 * Categories: serviceflow-trust, serviceflow
 * Description: Trust metrics bar highlighting customer satisfaction and volume.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"className":"sf-accent-top"} -->
		<div class="wp-block-column sf-accent-top">
			<!-- wp:paragraph {"className":"sf-metric"} -->
			<p class="sf-metric">4.9 ★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"surface"} -->
			<p class="has-surface-color has-text-color has-small-font-size"><?php esc_html_e( 'Average customer rating across Google & local platforms.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"sf-accent-top"} -->
		<div class="wp-block-column sf-accent-top">
			<!-- wp:paragraph {"className":"sf-metric"} -->
			<p class="sf-metric">5,000+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"surface"} -->
			<p class="has-surface-color has-text-color has-small-font-size"><?php esc_html_e( 'Vehicles serviced and repaired with full diagnostic check.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"sf-accent-top"} -->
		<div class="wp-block-column sf-accent-top">
			<!-- wp:paragraph {"className":"sf-metric"} -->
			<p class="sf-metric">10+ <?php esc_html_e( 'Yrs', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"surface"} -->
			<p class="has-surface-color has-text-color has-small-font-size"><?php esc_html_e( 'Years providing trusted automotive services locally.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"sf-accent-top"} -->
		<div class="wp-block-column sf-accent-top">
			<!-- wp:paragraph {"className":"sf-metric"} -->
			<p class="sf-metric">100%</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"surface"} -->
			<p class="has-surface-color has-text-color has-small-font-size"><?php esc_html_e( 'Genuine parts and transparent upfront estimates.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
