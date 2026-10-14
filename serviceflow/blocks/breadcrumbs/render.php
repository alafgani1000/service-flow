<?php
/**
 * Server-side render for serviceflow/breadcrumbs.
 *
 * @package ServiceFlow
 */

defined( 'ABSPATH' ) || exit;

$serviceflow_seo_trail = \ServiceFlow\Theme\seo_breadcrumbs();

if ( '' !== $serviceflow_seo_trail ) {
	printf(
		'<div %1$s>%2$s</div>',
		get_block_wrapper_attributes( array( 'class' => 'sf-breadcrumbs' ) ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		$serviceflow_seo_trail // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Markup generated and escaped by the SEO plugin.
	);
	return;
}

$serviceflow_items = \ServiceFlow\Theme\breadcrumb_items();

if ( count( $serviceflow_items ) < 2 ) {
	return;
}

$serviceflow_last = count( $serviceflow_items ) - 1;
?>
<nav <?php echo get_block_wrapper_attributes( array( 'class' => 'sf-breadcrumbs' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> aria-label="<?php esc_attr_e( 'Breadcrumb', 'serviceflow' ); ?>">
	<ol>
		<?php foreach ( $serviceflow_items as $serviceflow_index => $serviceflow_item ) : ?>
			<li>
				<?php if ( $serviceflow_index !== $serviceflow_last && ! empty( $serviceflow_item['url'] ) ) : ?>
					<a href="<?php echo esc_url( $serviceflow_item['url'] ); ?>"><?php echo esc_html( $serviceflow_item['label'] ); ?></a>
				<?php else : ?>
					<span<?php echo $serviceflow_index === $serviceflow_last ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $serviceflow_item['label'] ); ?></span>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ol>
</nav>
