<?php
/**
 * Title: FAQ Accordion
 * Slug: serviceflow/faq
 * Categories: serviceflow-trust, serviceflow
 * Description: Native accessible <details> accordion answering top customer questions.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","anchor":"faq","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div id="faq" class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'CLEAR ANSWERS', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently Asked Questions', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Everything you need to know about our service process, pricing, and warranty.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:details {"summary":"<?php esc_attr_e( 'Do I need an appointment or can I walk in?', 'serviceflow' ); ?>"} -->
		<details class="wp-block-details"><summary><?php esc_html_e( 'Do I need an appointment or can I walk in?', 'serviceflow' ); ?></summary>
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Walk-ins are always welcome for routine oil changes, battery testing, and bulb replacements. For comprehensive diagnostics, brake work, and AC repairs, we recommend booking online or messaging us on WhatsApp to guarantee same-day turnaround.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_attr_e( 'How accurate is the online price estimate?', 'serviceflow' ); ?>"} -->
		<details class="wp-block-details"><summary><?php esc_html_e( 'How accurate is the online price estimate?', 'serviceflow' ); ?></summary>
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Our calculator reflects our exact labor rates and standard OEM-grade part prices for common vehicle classes. Once your car is on the lift, we verify part fitment. If any unforeseen issue is found, we call you for written approval before performing any extra work.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_attr_e( 'What warranty do you provide on repairs?', 'serviceflow' ); ?>"} -->
		<details class="wp-block-details"><summary><?php esc_html_e( 'What warranty do you provide on repairs?', 'serviceflow' ); ?></summary>
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'All our repairs and installed replacement parts are backed by a 12-month or 20,000-kilometer nationwide warranty, whichever comes first. If a part fails under normal driving conditions, we replace it at no labor charge.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_attr_e( 'How long does a standard full service take?', 'serviceflow' ); ?>"} -->
		<details class="wp-block-details"><summary><?php esc_html_e( 'How long does a standard full service take?', 'serviceflow' ); ?></summary>
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'A standard synthetic oil change and 21-point safety inspection takes between 45 and 60 minutes. Brake pad replacements take around 90 minutes. You can relax in our waiting lounge with free Wi-Fi and coffee or drop off your keys.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_attr_e( 'Which payment methods do you accept?', 'serviceflow' ); ?>"} -->
		<details class="wp-block-details"><summary><?php esc_html_e( 'Which payment methods do you accept?', 'serviceflow' ); ?></summary>
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'We accept all major credit and debit cards (Visa, MasterCard, Amex), mobile payments (Apple Pay, Google Pay), bank transfers, and cash.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
