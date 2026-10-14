<?php
/**
 * Project (Before / After) Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class ProjectPostType {

	public const POST_TYPE = 'project';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'Projects', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'Project', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'Before & After', 'serviceflow' ),
			'all_items'          => __( 'All Projects', 'serviceflow' ),
			'add_new_item'       => __( 'Add New Project', 'serviceflow' ),
			'add_new'            => __( 'Add New', 'serviceflow' ),
			'edit_item'          => __( 'Edit Project', 'serviceflow' ),
			'update_item'        => __( 'Update Project', 'serviceflow' ),
			'search_items'       => __( 'Search Projects', 'serviceflow' ),
			'not_found'          => __( 'No projects found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No projects found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Project', 'serviceflow' ),
			'description'         => __( 'Before and after repair projects and portfolio', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => false,
			'show_in_nav_menus'   => true,
			'has_archive'         => 'projects',
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
			'rewrite'             => array(
				'slug'       => 'project',
				'with_front' => false,
			),
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
