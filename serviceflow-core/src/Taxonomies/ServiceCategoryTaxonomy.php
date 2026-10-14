<?php
/**
 * Service Category Taxonomy.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Taxonomies;

defined( 'ABSPATH' ) || exit;

final class ServiceCategoryTaxonomy {

	public const TAXONOMY = 'service_category';

	public static function register(): void {
		$labels = array(
			'name'              => _x( 'Service Categories', 'taxonomy general name', 'serviceflow' ),
			'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'serviceflow' ),
			'search_items'      => __( 'Search Categories', 'serviceflow' ),
			'all_items'         => __( 'All Categories', 'serviceflow' ),
			'parent_item'       => __( 'Parent Category', 'serviceflow' ),
			'parent_item_colon' => __( 'Parent Category:', 'serviceflow' ),
			'edit_item'         => __( 'Edit Category', 'serviceflow' ),
			'update_item'       => __( 'Update Category', 'serviceflow' ),
			'add_new_item'      => __( 'Add New Category', 'serviceflow' ),
			'new_item_name'     => __( 'New Category Name', 'serviceflow' ),
			'menu_name'         => __( 'Categories', 'serviceflow' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'         => 'service-category',
				'with_front'   => false,
				'hierarchical' => true,
			),
		);

		register_taxonomy( self::TAXONOMY, array( 'service' ), $args );
	}
}
