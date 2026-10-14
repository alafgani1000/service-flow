<?php
/**
 * Service Custom Post Type.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class ServicePostType {

	public const POST_TYPE = 'service';

	public static function register(): void {
		$labels = array(
			'name'                  => _x( 'Services', 'Post Type General Name', 'serviceflow' ),
			'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'             => __( 'Services', 'serviceflow' ),
			'name_admin_bar'        => __( 'Service', 'serviceflow' ),
			'archives'              => __( 'Service Archives', 'serviceflow' ),
			'attributes'            => __( 'Service Attributes', 'serviceflow' ),
			'parent_item_colon'     => __( 'Parent Service:', 'serviceflow' ),
			'all_items'             => __( 'All Services', 'serviceflow' ),
			'add_new_item'          => __( 'Add New Service', 'serviceflow' ),
			'add_new'               => __( 'Add New', 'serviceflow' ),
			'new_item'              => __( 'New Service', 'serviceflow' ),
			'edit_item'             => __( 'Edit Service', 'serviceflow' ),
			'update_item'           => __( 'Update Service', 'serviceflow' ),
			'view_item'             => __( 'View Service', 'serviceflow' ),
			'view_items'            => __( 'View Services', 'serviceflow' ),
			'search_items'          => __( 'Search Service', 'serviceflow' ),
			'not_found'             => __( 'No services found', 'serviceflow' ),
			'not_found_in_trash'    => __( 'No services found in Trash', 'serviceflow' ),
			'featured_image'        => __( 'Service Image', 'serviceflow' ),
			'set_featured_image'    => __( 'Set service image', 'serviceflow' ),
			'remove_featured_image' => __( 'Remove service image', 'serviceflow' ),
			'use_featured_image'    => __( 'Use as service image', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Service', 'serviceflow' ),
			'description'         => __( 'Business service items with pricing and duration', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'custom-fields' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => false, // Placed under ServiceFlow top-level menu
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-hammer',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'services',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
			'rewrite'             => array(
				'slug'       => 'service',
				'with_front' => false,
			),
		);

		register_post_type( self::POST_TYPE, $args );

		// Custom admin columns
		add_filter( 'manage_service_posts_columns', array( __CLASS__, 'add_admin_columns' ) );
		add_action( 'manage_service_posts_custom_column', array( __CLASS__, 'render_admin_columns' ), 10, 2 );
		add_filter( 'manage_edit-service_sortable_columns', array( __CLASS__, 'sortable_admin_columns' ) );
	}

	public static function add_admin_columns( array $columns ): array {
		$new_columns = array();
		foreach ( $columns as $key => $title ) {
			$new_columns[ $key ] = $title;
			if ( 'title' === $key ) {
				$new_columns['price']    = __( 'Price', 'serviceflow' );
				$new_columns['duration'] = __( 'Duration', 'serviceflow' );
				$new_columns['featured'] = __( 'Featured', 'serviceflow' );
			}
		}
		return $new_columns;
	}

	public static function render_admin_columns( string $column, int $post_id ): void {
		switch ( $column ) {
			case 'price':
				$type = get_post_meta( $post_id, '_serviceflow_price_type', true ) ?: 'fixed';
				$from = get_post_meta( $post_id, '_serviceflow_price_from', true );
				$to   = get_post_meta( $post_id, '_serviceflow_price_to', true );

				if ( 'contact' === $type ) {
					esc_html_e( 'Contact for Price', 'serviceflow' );
				} elseif ( 'free' === $type ) {
					esc_html_e( 'Free Inspection', 'serviceflow' );
				} elseif ( 'starting_from' === $type ) {
					printf( '%s %s', esc_html__( 'From', 'serviceflow' ), esc_html( $from ?: '—' ) );
				} elseif ( 'range' === $type ) {
					printf( '%s – %s', esc_html( $from ?: '—' ), esc_html( $to ?: '—' ) );
				} else {
					echo esc_html( $from ?: '—' );
				}
				break;

			case 'duration':
				$duration = get_post_meta( $post_id, '_serviceflow_duration', true );
				$unit     = get_post_meta( $post_id, '_serviceflow_duration_unit', true ) ?: 'mins';
				if ( $duration ) {
					echo esc_html( $duration . ' ' . $unit );
				} else {
					echo '—';
				}
				break;

			case 'featured':
				$featured = get_post_meta( $post_id, '_serviceflow_featured', true );
				echo $featured ? '⭐ ' . esc_html__( 'Yes', 'serviceflow' ) : '—';
				break;
		}
	}

	public static function sortable_admin_columns( array $columns ): array {
		$columns['featured'] = 'featured';
		return $columns;
	}
}
