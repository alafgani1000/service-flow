<?php
/**
 * Testimonial Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class TestimonialPostType {

	public const POST_TYPE = 'testimonial';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'Testimonials', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'Testimonial', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'Testimonials', 'serviceflow' ),
			'all_items'          => __( 'All Testimonials', 'serviceflow' ),
			'add_new_item'       => __( 'Add New Testimonial', 'serviceflow' ),
			'add_new'            => __( 'Add New', 'serviceflow' ),
			'edit_item'          => __( 'Edit Testimonial', 'serviceflow' ),
			'update_item'        => __( 'Update Testimonial', 'serviceflow' ),
			'search_items'       => __( 'Search Testimonials', 'serviceflow' ),
			'not_found'          => __( 'No testimonials found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No testimonials found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Testimonial', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => false,
			'show_in_nav_menus'   => false,
			'has_archive'         => false,
			'publicly_queryable'  => false,
			'show_in_rest'        => true,
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
