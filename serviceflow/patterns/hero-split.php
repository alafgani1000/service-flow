<?php
/**
 * Title: Hero — Split with Image
 * Slug: serviceflow/hero-split
 * Categories: serviceflow-hero, serviceflow
 * Description: Split hero layout with headline and vehicle placeholder illustration.
 *
 * @package ServiceFlow
 */

$serviceflow_hero_img = get_template_directory_uri() . '/assets/images/placeholder-hero.svg';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
			<p class="is-style-eyebrow">⚡ <?php esc_html_e( 'CERTIFIED AUTO CARE & REPAIR', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading"><?php esc_html_e( 'Expert Auto Care. Transparent Prices. Zero Surprises.', 'serviceflow' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large","textColor":"surface"} -->
			<p class="has-surface-color has-text-color has-large-font-size"><?php esc_html_e( 'From routine synthetic oil service to complete brake overhauls, our ASE-certified mechanics treat your vehicle with total precision.', 'serviceflow' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"booking"}}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Book a Service', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-whatsapp","metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
				<div class="wp-block-button is-style-whatsapp"><a class="wp-block-button__link wp-element-button" href="https://wa.me/"><?php esc_html_e( 'WhatsApp', 'serviceflow' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:list {"className":"sf-trust-inline","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="wp-block-list sf-trust-inline" style="margin-top:var(--wp--preset--spacing--40)">
				<li><?php esc_html_e( '4.9★ (500+ Google Reviews)', 'serviceflow' ); ?></li>
				<li><?php esc_html_e( 'Same-Day Diagnostics', 'serviceflow' ); ?></li>
				<li><?php esc_html_e( 'Warranty Included', 'serviceflow' ); ?></li>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $serviceflow_hero_img ); ?>" alt="<?php esc_attr_e( 'Auto repair workshop and diagnostic station', 'serviceflow' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
