<?php
/**
 * FAQ Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class FAQPostType {

	public const POST_TYPE = 'faq';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'FAQs', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'FAQ', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'FAQ', 'serviceflow' ),
			'all_items'          => __( 'All FAQs', 'serviceflow' ),
			'add_new_item'       => __( 'Add New FAQ', 'serviceflow' ),
			'add_new'            => __( 'Add New', 'serviceflow' ),
			'edit_item'          => __( 'Edit FAQ', 'serviceflow' ),
			'update_item'        => __( 'Update FAQ', 'serviceflow' ),
			'search_items'       => __( 'Search FAQs', 'serviceflow' ),
			'not_found'          => __( 'No FAQs found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No FAQs found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'FAQ', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'page-attributes', 'custom-fields' ),
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
