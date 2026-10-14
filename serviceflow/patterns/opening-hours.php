<?php
/**
 * Title: Opening Hours
 * Slug: serviceflow/opening-hours
 * Categories: serviceflow-conversion, serviceflow
 * Description: Clean opening hours schedule with Open Now indicator.
 *
 * @package ServiceFlow
 */

?>
<!-- wp:group {"className":"is-style-card sf-hours","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card sf-hours">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"fontSize":"medium"} -->
		<h3 class="wp-block-heading has-medium-font-size">🕒 <?php esc_html_e( 'Opening Hours', 'serviceflow' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"success","fontSize":"small"} -->
		<p class="has-success-color has-text-color has-small-font-size" style="font-weight:700">● <?php esc_html_e( 'OPEN NOW', 'serviceflow' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:table {"hasFixedLayout":true} -->
	<figure class="wp-block-table"><table class="has-fixed-layout"><tbody>
		<tr><td><?php esc_html_e( 'Monday', 'serviceflow' ); ?></td><td>08:00 – 17:00</td></tr>
		<tr><td><?php esc_html_e( 'Tuesday', 'serviceflow' ); ?></td><td>08:00 – 17:00</td></tr>
		<tr><td><?php esc_html_e( 'Wednesday', 'serviceflow' ); ?></td><td>08:00 – 17:00</td></tr>
		<tr><td><?php esc_html_e( 'Thursday', 'serviceflow' ); ?></td><td>08:00 – 17:00</td></tr>
		<tr><td><?php esc_html_e( 'Friday', 'serviceflow' ); ?></td><td>08:00 – 17:00</td></tr>
		<tr><td><?php esc_html_e( 'Saturday', 'serviceflow' ); ?></td><td>08:30 – 15:00</td></tr>
		<tr><td><?php esc_html_e( 'Sunday', 'serviceflow' ); ?></td><td><span style="opacity:0.6"><?php esc_html_e( 'Closed', 'serviceflow' ); ?></span></td></tr>
	</tbody></table></figure>
	<!-- /wp:table -->
</div>
<!-- /wp:group -->
