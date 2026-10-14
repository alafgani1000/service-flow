<?php
/**
 * Title: Footer
 * Slug: serviceflow/footer
 * Categories: serviceflow
 * Inserter: false
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:site-title {"level":3,"fontSize":"large"} /-->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Professional auto maintenance and repair services you can trust. Certified technicians, transparent pricing, and quality workmanship.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button {"className":"is-style-whatsapp","fontSize":"small","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
				<div class="wp-block-button has-custom-font-size is-style-whatsapp has-small-font-size"><a class="wp-block-button__link wp-element-button" href="https://wa.me/"><?php esc_html_e( 'Chat on WhatsApp', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":4,"fontSize":"medium"} -->
			<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Services', 'serviceflow' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:list {"fontSize":"small"} -->
			<ul class="wp-block-list has-small-font-size">
				<li><a href="#services"><?php esc_html_e( 'Oil Change & Filter', 'serviceflow' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Brake Service & Repair', 'serviceflow' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'AC System Service', 'serviceflow' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Engine Diagnostics', 'serviceflow' ); ?></a></li>
				<li><a href="#services"><?php esc_html_e( 'Tire & Wheel Alignment', 'serviceflow' ); ?></a></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":4,"fontSize":"medium"} -->
			<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Quick Links', 'serviceflow' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:list {"fontSize":"small"} -->
			<ul class="wp-block-list has-small-font-size">
				<li><a href="#about"><?php esc_html_e( 'About Our Workshop', 'serviceflow' ); ?></a></li>
				<li><a href="#calculator"><?php esc_html_e( 'Price Calculator', 'serviceflow' ); ?></a></li>
				<li><a href="#reviews"><?php esc_html_e( 'Customer Reviews', 'serviceflow' ); ?></a></li>
				<li><a href="#faq"><?php esc_html_e( 'Frequently Asked Questions', 'serviceflow' ); ?></a></li>
				<li><a href="#contact"><?php esc_html_e( 'Book Service', 'serviceflow' ); ?></a></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":4,"fontSize":"medium"} -->
			<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Business Info', 'serviceflow' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"full_address"}}}}} -->
			<p class="has-small-font-size"><?php esc_html_e( '124 Industrial Parkway, North Valley', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"phone"}}}}} -->
			<p class="has-small-font-size"><?php esc_html_e( '+1 (555) 019-2834', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"hours_summary"}}}}} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Mon - Sat: 08:00 - 17:00 (Sunday Closed)', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"small","textColor":"muted","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide has-muted-color has-text-color has-small-font-size">
		<!-- wp:paragraph -->
		<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Built with ServiceFlow', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
