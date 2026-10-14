<?php
/**
 * Theme blocks (presentation-only).
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Registers theme blocks from block.json metadata.
 */
function register_blocks(): void {
	register_block_type( get_template_directory() . '/blocks/breadcrumbs' );

	wp_set_script_translations( 'serviceflow-breadcrumbs-editor-script', 'serviceflow', get_template_directory() . '/languages' );
}
add_action( 'init', __NAMESPACE__ . '\register_blocks' );
