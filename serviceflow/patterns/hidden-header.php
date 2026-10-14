<?php
/**
 * Title: Header
 * Slug: serviceflow/header
 * Categories: serviceflow
 * Inserter: false
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","className":"sf-announcement","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"base","fontSize":"small","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull sf-announcement has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph -->
		<p>⚡ <?php esc_html_e( 'Fast & Reliable Auto Care • Certified Technicians • Warranty on All Repairs', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"sf-hide-mobile","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group sf-hide-mobile">
		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"hours_summary"}}}}} -->
		<p><?php esc_html_e( 'Mon - Sat: 08:00 - 17:00', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"phone"}}}}} -->
		<p><?php esc_html_e( '+1 (555) 019-2834', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sf-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignfull sf-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->
		<!-- wp:site-title {"level":0} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"}} -->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Services', 'serviceflow' ); ?>","url":"#services"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Calculator', 'serviceflow' ); ?>","url":"#calculator"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'About', 'serviceflow' ); ?>","url":"#about"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Reviews', 'serviceflow' ); ?>","url":"#reviews"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'FAQ', 'serviceflow' ); ?>","url":"#faq"} /-->
		<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'serviceflow' ); ?>","url":"#contact"} /-->
	<!-- /wp:navigation -->

	<!-- wp:buttons {"className":"sf-hide-mobile"} -->
	<div class="wp-block-buttons sf-hide-mobile">
		<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book Service', 'serviceflow' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
