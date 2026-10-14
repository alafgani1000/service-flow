<?php
/**
 * Team Member Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class TeamMemberPostType {

	public const POST_TYPE = 'team_member';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'Team Members', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'Team Member', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'Team', 'serviceflow' ),
			'all_items'          => __( 'All Team Members', 'serviceflow' ),
			'add_new_item'       => __( 'Add New Team Member', 'serviceflow' ),
			'add_new'            => __( 'Add New', 'serviceflow' ),
			'edit_item'          => __( 'Edit Team Member', 'serviceflow' ),
			'update_item'        => __( 'Update Team Member', 'serviceflow' ),
			'search_items'       => __( 'Search Team Member', 'serviceflow' ),
			'not_found'          => __( 'No team members found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No team members found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Team Member', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => false,
			'show_in_nav_menus'   => true,
			'has_archive'         => false,
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
			'rewrite'             => array(
				'slug'       => 'team-member',
				'with_front' => false,
			),
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
