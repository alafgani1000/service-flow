<?php
/**
 * Front-end assets.
 *
 * v0.1 ships zero front-end JavaScript. The mobile menu is handled by the core
 * Navigation block. Feature scripts (calculator, booking, before/after) belong
 * to ServiceFlow Core and must be enqueued only when their block renders.
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Enqueues the component stylesheet.
 */
function enqueue_assets(): void {
	$path = get_template_directory() . '/assets/css/theme.css';

	wp_enqueue_style(
		'serviceflow',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
		SERVICEFLOW_THEME_VERSION
	);

	// Allows WordPress to inline the (small) stylesheet when it fits the inline budget.
	wp_style_add_data( 'serviceflow', 'path', $path );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
