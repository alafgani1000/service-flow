<?php
/**
 * Title: Featured Services Grid
 * Slug: serviceflow/services-grid
 * Categories: serviceflow-services, serviceflow
 * Description: 6-card grid displaying primary auto care services with pricing and booking links.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"services","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div id="services" class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'OUR CORE SERVICES', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Comprehensive Auto Care & Repair', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Every service includes a multi-point safety inspection and warranty on parts and labor.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">🛢️</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Oil Change & Filter', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Full synthetic or conventional oil replacement with OEM filter change and 21-point vehicle inspection.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$45.00</p>
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
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">🛑</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Brake Service & Repair', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Brake pad replacement, rotor resurfacing, brake fluid flush, and comprehensive hydraulic system checks.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$95.00</p>
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
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">❄️</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'AC System Service', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'AC gas recharge, compressor diagnostics, leak testing, cabin filter replacement, and odor sterilization.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$60.00</p>
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
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">💻</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Engine Diagnostics', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'OBD-II computer scanning, sensor analysis, live data readout, and precise troubleshooting for check engine lights.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$40.00</p>
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
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">⚡</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Battery Replacement', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Alternator and starter testing, battery terminal cleaning, and genuine replacement batteries with 2-year warranty.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$85.00</p>
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
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"fontSize":"x-large"} -->
				<p class="has-x-large-font-size">🛞</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Tire & Alignment', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '3D computerized four-wheel laser alignment, high-speed wheel balancing, tire rotation, and tread inspection.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"sf-price"} -->
				<p class="sf-price"><span class="sf-price-label"><?php esc_html_e( 'From', 'serviceflow' ); ?> </span>$50.00</p>
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
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
