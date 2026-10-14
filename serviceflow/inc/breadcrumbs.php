<?php
/**
 * Breadcrumb trail builder used by the serviceflow/breadcrumbs block.
 *
 * Structured data (BreadcrumbList) is intentionally NOT output here; that is
 * the job of ServiceFlow Core's schema compatibility layer or an SEO plugin.
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Returns the breadcrumb items for the current request.
 *
 * @return array<int, array{label: string, url: string}>
 */
function breadcrumb_items(): array {
	if ( is_front_page() ) {
		return array();
	}

	$items = array( crumb( __( 'Home', 'serviceflow' ), home_url( '/' ) ) );

	if ( is_home() ) {
		$title   = single_post_title( '', false );
		$items[] = crumb( $title ? $title : __( 'Blog', 'serviceflow' ) );
	} elseif ( is_singular() ) {
		$post = get_queried_object();

		if ( $post instanceof \WP_Post ) {
			$items = array_merge( $items, singular_ancestors( $post ) );
			$items[] = crumb( get_the_title( $post ) );
		}
	} elseif ( is_post_type_archive() ) {
		$items[] = crumb( (string) post_type_archive_title( '', false ) );
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$term = get_queried_object();

		if ( $term instanceof \WP_Term ) {
			$taxonomy = get_taxonomy( $term->taxonomy );
			$type     = $taxonomy && ! empty( $taxonomy->object_type ) ? (string) reset( $taxonomy->object_type ) : '';
			$items    = array_merge( $items, post_type_root( $type ) );

			foreach ( array_reverse( get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' ) ) as $ancestor_id ) {
				$ancestor = get_term( $ancestor_id, $term->taxonomy );
				if ( $ancestor instanceof \WP_Term ) {
					$link    = get_term_link( $ancestor );
					$items[] = crumb( $ancestor->name, is_wp_error( $link ) ? '' : $link );
				}
			}

			$items[] = crumb( $term->name );
		}
	} elseif ( is_search() ) {
		/* translators: %s: search query. */
		$items[] = crumb( sprintf( __( 'Search results for “%s”', 'serviceflow' ), get_search_query() ) );
	} elseif ( is_404() ) {
		$items[] = crumb( __( 'Page not found', 'serviceflow' ) );
	} elseif ( is_author() ) {
		$items[] = crumb( (string) get_the_author_meta( 'display_name', (int) get_queried_object_id() ) );
	} elseif ( is_archive() ) {
		$items[] = crumb( wp_strip_all_tags( get_the_archive_title() ) );
	}

	/**
	 * Filters the breadcrumb items.
	 *
	 * @param array<int, array{label: string, url: string}> $items Items, first is Home, last is current.
	 */
	return (array) apply_filters( 'serviceflow_breadcrumb_items', $items );
}

/**
 * Builds a breadcrumb item.
 *
 * @param string $label Visible label.
 * @param string $url   Optional URL (empty for the current item).
 * @return array{label: string, url: string}
 */
function crumb( string $label, string $url = '' ): array {
	return array(
		'label' => $label,
		'url'   => $url,
	);
}

/**
 * Returns the root crumb for a post type (blog page or CPT archive).
 *
 * @param string $post_type Post type name.
 * @return array<int, array{label: string, url: string}>
 */
function post_type_root( string $post_type ): array {
	if ( 'post' === $post_type ) {
		$blog_id = (int) get_option( 'page_for_posts' );
		return $blog_id ? array( crumb( get_the_title( $blog_id ), (string) get_permalink( $blog_id ) ) ) : array();
	}

	$object = $post_type ? get_post_type_object( $post_type ) : null;

	if ( $object && $object->has_archive ) {
		$link = get_post_type_archive_link( $post_type );
		return $link ? array( crumb( $object->labels->name, $link ) ) : array();
	}

	return array();
}

/**
 * Returns intermediate crumbs for a singular post (archive, category, parents).
 *
 * @param \WP_Post $post Current post.
 * @return array<int, array{label: string, url: string}>
 */
function singular_ancestors( \WP_Post $post ): array {
	$items = 'page' === $post->post_type ? array() : post_type_root( $post->post_type );

	if ( 'post' === $post->post_type ) {
		$categories = get_the_category( $post->ID );
		if ( ! empty( $categories ) ) {
			$category = $categories[0];
			foreach ( array_reverse( get_ancestors( $category->term_id, 'category', 'taxonomy' ) ) as $ancestor_id ) {
				$items[] = crumb( get_cat_name( $ancestor_id ), (string) get_category_link( $ancestor_id ) );
			}
			$items[] = crumb( $category->name, (string) get_category_link( $category ) );
		}
	}

	foreach ( array_reverse( get_post_ancestors( $post ) ) as $ancestor_id ) {
		$items[] = crumb( get_the_title( $ancestor_id ), (string) get_permalink( $ancestor_id ) );
	}

	return $items;
}
