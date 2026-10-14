<?php
/**
 * Title: Query No Results
 * Slug: serviceflow/hidden-no-results
 * Categories: serviceflow
 * Inserter: false
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'No posts or results found', 'serviceflow' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"muted"} -->
	<p class="has-muted-color has-text-color"><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords or browse our services.', 'serviceflow' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search again', 'serviceflow' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'serviceflow' ); ?>"} /-->
</div>
<!-- /wp:group -->
