<?php
/**
 * Service Area Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class ServiceAreaPostType {

	public const POST_TYPE = 'service_area';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'Service Areas', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'Service Area', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'Service Areas', 'serviceflow' ),
			'all_items'          => __( 'All Service Areas', 'serviceflow' ),
			'add_new_item'       => __( 'Add New Service Area', 'serviceflow' ),
			'add_new'            => __( 'Add New', 'serviceflow' ),
			'edit_item'          => __( 'Edit Service Area', 'serviceflow' ),
			'update_item'        => __( 'Update Service Area', 'serviceflow' ),
			'search_items'       => __( 'Search Service Area', 'serviceflow' ),
			'not_found'          => __( 'No service areas found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No service areas found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Service Area', 'serviceflow' ),
			'description'         => __( 'Geographic locations and service coverage areas', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => false,
			'show_in_nav_menus'   => true,
			'has_archive'         => 'service-areas',
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
			'rewrite'             => array(
				'slug'       => 'service-area',
				'with_front' => false,
			),
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
