<?php
/**
 * Title: Before / After Project
 * Slug: serviceflow/before-after
 * Categories: serviceflow-trust, serviceflow
 * Description: Side-by-side before and after transformation comparison.
 *
 * @package ServiceFlow
 */

$serviceflow_img = get_template_directory_uri() . '/assets/images/placeholder.svg';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'REAL WORKSHOP RESULTS', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Before & After Transformations', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'See our actual repair, paint restoration, and detailing results before and after service.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"sf-before-after","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide sf-before-after">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $serviceflow_img ); ?>" alt="<?php esc_attr_e( 'Headlight oxidation before restoration', 'serviceflow' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'BEFORE: Heavy Oxidation', 'serviceflow' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $serviceflow_img ); ?>" alt="<?php esc_attr_e( 'Headlight clarity after restoration', 'serviceflow' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e( 'AFTER: 100% Crystal Clear', 'serviceflow' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Project: Headlight Restoration & Ceramic UV Seal • Vehicle: 2018 Honda Civic • Turnaround: 90 Minutes', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
