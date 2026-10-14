<?php
/**
 * Title: Contact & Booking Form
 * Slug: serviceflow/contact
 * Categories: serviceflow-conversion, serviceflow
 * Description: Two-column contact section with business details and lead booking form.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow"><?php esc_html_e( 'GET IN TOUCH', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Visit Our Workshop or Send a Message', 'serviceflow' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Have a question or need emergency assistance? Our service advisors are ready to assist you by phone, WhatsApp, or through the contact form.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">📍 <strong><?php esc_html_e( 'Address:', 'serviceflow' ); ?></strong> <span data-sf-field="full_address"><?php esc_html_e( '124 Industrial Parkway, North Valley', 'serviceflow' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">📞 <strong><?php esc_html_e( 'Phone:', 'serviceflow' ); ?></strong> <a href="tel:"><?php esc_html_e( '+1 (555) 019-2834', 'serviceflow' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">💬 <strong><?php esc_html_e( 'WhatsApp:', 'serviceflow' ); ?></strong> <a href="https://wa.me/"><?php esc_html_e( 'Instant Chat Available', 'serviceflow' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">🕒 <strong><?php esc_html_e( 'Hours:', 'serviceflow' ); ?></strong> <?php esc_html_e( 'Mon - Sat: 08:00 - 17:00 (Sunday Closed)', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button {"className":"is-style-outline","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"directions"}}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Open Google Maps', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Book a Service or Request Quote', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Fill out this brief form and our team will confirm your slot within 1 business hour.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<form class="sf-booking-form" action="#contact" method="post">
					<div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem;">
						<div>
							<label for="sf-name" style="display:block;font-size:0.875rem;margin-bottom:0.25rem;"><?php esc_html_e( 'Full Name *', 'serviceflow' ); ?></label>
							<input type="text" id="sf-name" name="name" required style="width:100%;" placeholder="e.g. John Doe">
						</div>
						<div>
							<label for="sf-phone" style="display:block;font-size:0.875rem;margin-bottom:0.25rem;"><?php esc_html_e( 'Phone Number *', 'serviceflow' ); ?></label>
							<input type="tel" id="sf-phone" name="phone" required style="width:100%;" placeholder="e.g. +1 555 0192">
						</div>
					</div>
					<div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem;">
						<div>
							<label for="sf-vehicle" style="display:block;font-size:0.875rem;margin-bottom:0.25rem;"><?php esc_html_e( 'Vehicle Model / Year', 'serviceflow' ); ?></label>
							<input type="text" id="sf-vehicle" name="vehicle" style="width:100%;" placeholder="e.g. 2019 Toyota Corolla">
						</div>
						<div>
							<label for="sf-service" style="display:block;font-size:0.875rem;margin-bottom:0.25rem;"><?php esc_html_e( 'Requested Service *', 'serviceflow' ); ?></label>
							<select id="sf-service" name="service" required style="width:100%;">
								<option value="oil-change"><?php esc_html_e( 'Oil Change & Filter', 'serviceflow' ); ?></option>
								<option value="brake-service"><?php esc_html_e( 'Brake Service & Repair', 'serviceflow' ); ?></option>
								<option value="ac-service"><?php esc_html_e( 'AC System Service', 'serviceflow' ); ?></option>
								<option value="diagnostics"><?php esc_html_e( 'Engine Diagnostics', 'serviceflow' ); ?></option>
								<option value="tires"><?php esc_html_e( 'Tire & Wheel Alignment', 'serviceflow' ); ?></option>
								<option value="other"><?php esc_html_e( 'Other / Custom Request', 'serviceflow' ); ?></option>
							</select>
						</div>
					</div>
					<div style="margin-bottom:1rem;">
						<label for="sf-message" style="display:block;font-size:0.875rem;margin-bottom:0.25rem;"><?php esc_html_e( 'Notes or Symptoms', 'serviceflow' ); ?></label>
						<textarea id="sf-message" name="message" rows="3" style="width:100%;" placeholder="<?php esc_attr_e( 'Describe any issues or symptoms your vehicle is experiencing...', 'serviceflow' ); ?>"></textarea>
					</div>
					<button type="submit" class="wp-element-button" style="width:100%;"><?php esc_html_e( 'Submit Booking Request', 'serviceflow' ); ?></button>
				</form>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
