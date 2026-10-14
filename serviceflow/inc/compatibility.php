<?php
/**
 * Third-party compatibility (SEO plugins, page builders).
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Whether a dedicated SEO plugin is active.
 *
 * ServiceFlow Core reads `serviceflow_seo_plugin_active` to avoid emitting
 * duplicate schema (LocalBusiness, BreadcrumbList…).
 */
function seo_plugin_active(): bool {
	$active = defined( 'WPSEO_VERSION' ) || class_exists( '\RankMath' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' );

	/**
	 * Filters whether an SEO plugin is considered active.
	 *
	 * @param bool $active Detected state.
	 */
	return (bool) apply_filters( 'serviceflow_seo_plugin_active', $active );
}

/**
 * Returns breadcrumbs rendered by an SEO plugin, if enabled there.
 *
 * Yoast SEO and Rank Math emit their own BreadcrumbList schema, so reusing
 * their markup keeps visible breadcrumbs and structured data in sync.
 */
function seo_breadcrumbs(): string {
	/**
	 * Filters whether SEO plugin breadcrumbs should replace the theme trail.
	 *
	 * @param bool $use Default true.
	 */
	if ( ! apply_filters( 'serviceflow_use_seo_plugin_breadcrumbs', true ) ) {
		return '';
	}

	if ( function_exists( 'rank_math_get_breadcrumbs' ) && class_exists( '\RankMath\Helper' ) && method_exists( '\RankMath\Helper', 'is_breadcrumbs_enabled' ) && \RankMath\Helper::is_breadcrumbs_enabled() ) {
		return (string) rank_math_get_breadcrumbs(
			array(
				'wrap_before' => '<nav aria-label="' . esc_attr__( 'Breadcrumb', 'serviceflow' ) . '" class="rank-math-breadcrumb"><p>',
				'wrap_after'  => '</p></nav>',
			)
		);
	}

	if ( function_exists( 'yoast_breadcrumb' ) ) {
		return (string) yoast_breadcrumb( '<nav aria-label="' . esc_attr__( 'Breadcrumb', 'serviceflow' ) . '" class="yoast-breadcrumbs">', '</nav>', false );
	}

	return '';
}

/**
 * Adds body classes. `serviceflow-landing` marks the full-width Landing Page
 * template, which is also the recommended template for Elementor pages.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function body_classes( array $classes ): array {
	$classes[] = 'serviceflow';

	if ( is_page_template( 'page-landing' ) ) {
		$classes[] = 'serviceflow-landing';
	}

	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\body_classes' );
