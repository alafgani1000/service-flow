<?php
/**
 * Title: Testimonials
 * Slug: serviceflow/testimonials
 * Categories: serviceflow-trust, serviceflow
 * Description: 3-column customer testimonial cards with star ratings, quotes, vehicle details, and services.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"reviews","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div id="reviews" class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'VERIFIED CUSTOMER REVIEWS', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What Local Drivers Say About Us', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Rated 4.9 out of 5 stars based on over 500+ verified customer experiences.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"className":"is-style-rating"} -->
				<p class="is-style-rating">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:quote -->
				<blockquote class="wp-block-quote">
					<p><?php esc_html_e( '“Best auto shop in town. They diagnosed a tricky brake vibration within 30 minutes, quoted me fairly, and had the car back to me before the afternoon. Completely honest mechanics.”', 'serviceflow' ); ?></p>
					<cite><strong><?php esc_html_e( 'David Miller', 'serviceflow' ); ?></strong><br/><span class="has-small-font-size"><?php esc_html_e( 'Toyota Camry • Brake Service', 'serviceflow' ); ?></span></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"className":"is-style-rating"} -->
				<p class="is-style-rating">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:quote -->
				<blockquote class="wp-block-quote">
					<p><?php esc_html_e( '“Booking through WhatsApp was super smooth. The AC in my SUV was blowing warm air in summer heat. They flushed the lines and refilled freon same day. Freezing cold now!”', 'serviceflow' ); ?></p>
					<cite><strong><?php esc_html_e( 'Sarah Jenkins', 'serviceflow' ); ?></strong><br/><span class="has-small-font-size"><?php esc_html_e( 'Ford Explorer • AC System Service', 'serviceflow' ); ?></span></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:paragraph {"className":"is-style-rating"} -->
				<p class="is-style-rating">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:quote -->
				<blockquote class="wp-block-quote">
					<p><?php esc_html_e( '“The price calculator gave me an estimate of $65 for full synthetic oil, and that was the exact total on my invoice. No upselling, no fake fees. I am a customer for life.”', 'serviceflow' ); ?></p>
					<cite><strong><?php esc_html_e( 'Marcus Chen', 'serviceflow' ); ?></strong><br/><span class="has-small-font-size"><?php esc_html_e( 'Honda Accord • Synthetic Oil Change', 'serviceflow' ); ?></span></cite>
				</blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
