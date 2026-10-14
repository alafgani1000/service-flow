<?php
/**
 * Developer action hooks around the header and footer template parts.
 *
 * Available actions:
 * - serviceflow_before_header / serviceflow_after_header
 * - serviceflow_before_footer / serviceflow_after_footer
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Wraps the header/footer template parts with action hooks.
 *
 * @param string $content Rendered template part.
 * @param array  $block   Parsed block.
 */
function template_part_hooks( string $content, array $block ): string {
	$slug = $block['attrs']['slug'] ?? '';

	if ( is_admin() || ! in_array( $slug, array( 'header', 'footer' ), true ) ) {
		return $content;
	}

	return capture_action( "serviceflow_before_{$slug}" ) . $content . capture_action( "serviceflow_after_{$slug}" );
}
add_filter( 'render_block_core/template-part', __NAMESPACE__ . '\template_part_hooks', 10, 2 );

/**
 * Runs an action and returns its echoed output.
 *
 * @param string $hook_name Action name.
 */
function capture_action( string $hook_name ): string {
	if ( ! has_action( $hook_name ) ) {
		return '';
	}

	ob_start();
	do_action( $hook_name );
	return (string) ob_get_clean();
}
