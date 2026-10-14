<?php
/**
 * Title: About Page Layout
 * Slug: serviceflow/page-about
 * Categories: serviceflow-pages, serviceflow
 * Description: Full-page layout for company story, values, team, and credibility (PRD #30).
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
		<p class="is-style-eyebrow"><?php esc_html_e( 'OUR STORY & VALUES', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php esc_html_e( 'Building Trust Through Transparent Automotive Care', 'serviceflow' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"large","textColor":"surface"} -->
		<p class="has-surface-color has-text-color has-large-font-size"><?php esc_html_e( 'Founded in 2014, our workshop was established on one simple principle: treat every customer vehicle like our own family is riding in it.', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"serviceflow/trust-metrics"} /-->

<!-- wp:pattern {"slug":"serviceflow/why-choose-us"} /-->

<!-- wp:pattern {"slug":"serviceflow/team"} /-->

<!-- wp:pattern {"slug":"serviceflow/logo-cloud"} /-->

<!-- wp:pattern {"slug":"serviceflow/cta"} /-->
