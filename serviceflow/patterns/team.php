<?php
/**
 * Title: Team Members
 * Slug: serviceflow/team
 * Categories: serviceflow-trust, serviceflow
 * Description: 4-column team member grid with photo, role, and experience.
 *
 * @package ServiceFlow
 */

$serviceflow_avatar = get_template_directory_uri() . '/assets/images/placeholder.svg';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","align":"center"} -->
		<p class="has-text-align-center is-style-eyebrow"><?php esc_html_e( 'OUR EXPERIENCED CREW', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"align":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Meet Our Certified Mechanics', 'serviceflow' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Decades of combined automotive experience under one roof.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( $serviceflow_avatar ); ?>" alt="<?php esc_attr_e( 'Robert Hansen', 'serviceflow' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Robert Hansen', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"small"} -->
				<p class="is-style-eyebrow has-small-font-size"><?php esc_html_e( 'Workshop Manager', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '16 years experience in shop operations and master engine diagnostics.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( $serviceflow_avatar ); ?>" alt="<?php esc_attr_e( 'Alex Ramirez', 'serviceflow' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Alex Ramirez', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"small"} -->
				<p class="is-style-eyebrow has-small-font-size"><?php esc_html_e( 'Senior Diagnostic Tech', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '12 years experience specializing in modern computer and electrical systems.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( $serviceflow_avatar ); ?>" alt="<?php esc_attr_e( 'James Cooper', 'serviceflow' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'James Cooper', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"small"} -->
				<p class="is-style-eyebrow has-small-font-size"><?php esc_html_e( 'Brake & Suspension Specialist', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '10 years experience in precision alignments, suspension, and braking.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( $serviceflow_avatar ); ?>" alt="<?php esc_attr_e( 'Elena Vance', 'serviceflow' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Elena Vance', 'serviceflow' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"small"} -->
				<p class="is-style-eyebrow has-small-font-size"><?php esc_html_e( 'Lead Service Advisor', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
				<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '8 years dedicated to transparent communication and prompt customer estimates.', 'serviceflow' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
