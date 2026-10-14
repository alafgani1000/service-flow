<?php
/**
 * Theme setup: supports, pattern categories and block styles.
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Registers theme supports.
 */
function setup(): void {
	load_theme_textdomain( 'serviceflow', get_template_directory() . '/languages' );

	// Keep the inserter focused on ServiceFlow patterns.
	remove_theme_support( 'core-block-patterns' );

	add_editor_style( array( 'assets/css/theme.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Registers pattern categories.
 */
function register_pattern_categories(): void {
	$categories = array(
		'serviceflow'              => array(
			'label'       => __( 'ServiceFlow', 'serviceflow' ),
			'description' => __( 'All ServiceFlow sections.', 'serviceflow' ),
		),
		'serviceflow-hero'         => array(
			'label'       => __( 'ServiceFlow: Hero', 'serviceflow' ),
			'description' => __( 'Above-the-fold sections that explain what you do.', 'serviceflow' ),
		),
		'serviceflow-services'     => array(
			'label'       => __( 'ServiceFlow: Services & Pricing', 'serviceflow' ),
			'description' => __( 'Service lists, finders, pricing and calculators.', 'serviceflow' ),
		),
		'serviceflow-trust'        => array(
			'label'       => __( 'ServiceFlow: Trust', 'serviceflow' ),
			'description' => __( 'Metrics, testimonials, team, before/after and FAQ.', 'serviceflow' ),
		),
		'serviceflow-conversion'   => array(
			'label'       => __( 'ServiceFlow: Conversion', 'serviceflow' ),
			'description' => __( 'Calls to action, contact and opening hours.', 'serviceflow' ),
		),
		'serviceflow-pages'        => array(
			'label'       => __( 'ServiceFlow: Full Pages', 'serviceflow' ),
			'description' => __( 'Complete page layouts.', 'serviceflow' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', __NAMESPACE__ . '\register_pattern_categories' );

/**
 * Registers block style variations. Visual rules live in assets/css/theme.css.
 */
function register_block_styles(): void {
	$styles = array(
		'core/group'     => array(
			'card' => __( 'Card', 'serviceflow' ),
		),
		'core/paragraph' => array(
			'eyebrow' => __( 'Eyebrow', 'serviceflow' ),
			'rating'  => __( 'Rating', 'serviceflow' ),
		),
		'core/list'      => array(
			'checklist' => __( 'Checklist', 'serviceflow' ),
		),
		'core/button'    => array(
			'chip'       => __( 'Chip', 'serviceflow' ),
			'whatsapp'   => __( 'WhatsApp', 'serviceflow' ),
			'arrow-link' => __( 'Text link', 'serviceflow' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );
