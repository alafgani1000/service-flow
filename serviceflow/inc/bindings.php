<?php
/**
 * Block Bindings sources.
 *
 * Lets template parts and patterns reference business data (phone, WhatsApp,
 * booking page…) without hard-coding it:
 *
 *   <!-- wp:button {"metadata":{"bindings":{"url":{"source":"serviceflow/links","args":{"key":"whatsapp"}}}}} -->
 *   <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"serviceflow/business","args":{"key":"phone"}}}}} -->
 *
 * The ServiceFlow Core plugin provides the data through the
 * `serviceflow_business_info` filter. Without it, blocks bound to missing data
 * are simply not rendered, so the theme degrades gracefully.
 *
 * @package ServiceFlow
 */

namespace ServiceFlow\Theme;

defined( 'ABSPATH' ) || exit;

/**
 * Returns business information supplied by ServiceFlow Core (or any plugin).
 *
 * @return array<string, string>
 */
function business_info(): array {
	$defaults = array(
		'name'             => (string) get_bloginfo( 'name' ),
		'phone'            => '',
		'whatsapp'         => '',
		'whatsapp_message' => '',
		'email'            => '',
		'address'          => '',
		'city'             => '',
		'hours_summary'    => '',
		'maps_url'         => '',
	);

	/**
	 * Filters the business information used by the theme.
	 *
	 * @param array<string, string> $info Business information.
	 */
	$info = apply_filters( 'serviceflow_business_info', $defaults );

	return array_merge( $defaults, is_array( $info ) ? $info : array() );
}

/**
 * Returns a single business value as a trimmed string.
 *
 * @param string $key Business info key. `full_address` combines address and city.
 */
function business_value( string $key ): string {
	$info = business_info();

	if ( 'full_address' === $key ) {
		return implode( ', ', array_filter( array( trim( (string) $info['address'] ), trim( (string) $info['city'] ) ) ) );
	}

	return isset( $info[ $key ] ) && is_scalar( $info[ $key ] ) ? trim( (string) $info[ $key ] ) : '';
}

/**
 * Returns the permalink of the first published page matching one of the slugs.
 *
 * @param string[] $slugs Page paths, in order of preference.
 */
function find_page_url( array $slugs ): string {
	static $cache = array();

	$cache_key = implode( '|', $slugs );
	if ( isset( $cache[ $cache_key ] ) ) {
		return $cache[ $cache_key ];
	}

	$url = '';
	foreach ( $slugs as $slug ) {
		$page = get_page_by_path( $slug );
		if ( $page instanceof \WP_Post && 'publish' === $page->post_status ) {
			$url = (string) get_permalink( $page );
			break;
		}
	}

	$cache[ $cache_key ] = $url;
	return $url;
}

/**
 * Returns the services listing URL (CPT archive, Services page or homepage anchor).
 */
function services_url(): string {
	if ( post_type_exists( 'service' ) ) {
		$archive = get_post_type_archive_link( 'service' );
		if ( $archive ) {
			return $archive;
		}
	}

	$page = find_page_url( array( 'services' ) );

	return '' !== $page ? $page : home_url( '/#services' );
}

/**
 * Builds a wa.me URL from the configured WhatsApp number.
 */
function whatsapp_url(): string {
	$info   = business_info();
	$number = (string) preg_replace( '/\D+/', '', (string) $info['whatsapp'] );

	if ( '' === $number ) {
		return '';
	}

	$message = trim( (string) $info['whatsapp_message'] );
	if ( '' === $message ) {
		/* translators: %s: business name. */
		$message = sprintf( __( 'Hello %s, I would like to book a service.', 'serviceflow' ), $info['name'] );
	}

	/**
	 * Filters the WhatsApp message used by generic CTAs.
	 *
	 * @param string $message Message text.
	 * @param array  $context Context data (empty for generic CTAs).
	 */
	$message = (string) apply_filters( 'serviceflow_whatsapp_message', $message, array() );

	return 'https://wa.me/' . $number . ( '' !== $message ? '?text=' . rawurlencode( $message ) : '' );
}

/**
 * Resolves a link key to a URL.
 *
 * @param string $key  Link key (booking, contact, estimate, pricing, services,
 *                     service_category, phone, whatsapp, email, directions, home).
 * @param array  $args Optional arguments (e.g. `term` for service_category).
 */
function link_url( string $key, array $args = array() ): string {
	switch ( $key ) {
		case 'phone':
			$phone = (string) preg_replace( '/[^\d+]/', '', business_value( 'phone' ) );
			$url   = '' !== $phone ? 'tel:' . $phone : '';
			break;

		case 'whatsapp':
			$url = whatsapp_url();
			break;

		case 'email':
			$email = sanitize_email( business_value( 'email' ) );
			$url   = '' !== $email ? 'mailto:' . $email : '';
			break;

		case 'directions':
			$url = business_value( 'maps_url' );
			break;

		case 'booking':
			$url = find_page_url( array( 'booking', 'book', 'contact' ) );
			$url = '' !== $url ? $url : home_url( '/#contact' );
			break;

		case 'contact':
			$url = find_page_url( array( 'contact' ) );
			$url = '' !== $url ? $url : home_url( '/#contact' );
			break;

		case 'estimate':
			$url = home_url( '/#calculator' );
			break;

		case 'pricing':
			$url = find_page_url( array( 'pricing' ) );
			$url = '' !== $url ? $url : services_url();
			break;

		case 'services':
			$url = services_url();
			break;

		case 'service_category':
			$url  = '';
			$term = isset( $args['term'] ) ? sanitize_title( (string) $args['term'] ) : '';
			if ( '' !== $term && taxonomy_exists( 'service_category' ) ) {
				$term_link = get_term_link( $term, 'service_category' );
				$url       = is_wp_error( $term_link ) ? '' : $term_link;
			}
			$url = '' !== $url ? $url : services_url();
			break;

		case 'home':
			$url = home_url( '/' );
			break;

		default:
			$url = '';
	}

	/**
	 * Filters a resolved ServiceFlow link.
	 *
	 * Return an empty string to hide the bound button.
	 *
	 * @param string $url  Resolved URL.
	 * @param string $key  Link key.
	 * @param array  $args Binding arguments.
	 */
	$url = (string) apply_filters( 'serviceflow_link_url', $url, $key, $args );

	return '' === $url ? '' : sanitize_url( $url, array( 'http', 'https', 'tel', 'mailto' ) );
}

/**
 * Registers the binding sources.
 */
function register_binding_sources(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'serviceflow/links',
		array(
			'label'              => __( 'ServiceFlow link', 'serviceflow' ),
			'get_value_callback' => static function ( array $source_args ): string {
				return link_url( (string) ( $source_args['key'] ?? '' ), $source_args );
			},
		)
	);

	register_block_bindings_source(
		'serviceflow/business',
		array(
			'label'              => __( 'ServiceFlow business info', 'serviceflow' ),
			'get_value_callback' => static function ( array $source_args ): string {
				return esc_html( business_value( (string) ( $source_args['key'] ?? '' ) ) );
			},
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_binding_sources' );

/**
 * Removes blocks whose ServiceFlow binding resolves to an empty value
 * (e.g. a WhatsApp button when no number is configured).
 *
 * @param string $content Rendered block content.
 * @param array  $block   Parsed block.
 */
function hide_empty_bound_blocks( string $content, array $block ): string {
	$bindings = $block['attrs']['metadata']['bindings'] ?? null;

	if ( ! is_array( $bindings ) ) {
		return $content;
	}

	foreach ( $bindings as $binding ) {
		$source = $binding['source'] ?? '';
		$args   = is_array( $binding['args'] ?? null ) ? $binding['args'] : array();
		$key    = (string) ( $args['key'] ?? '' );

		if ( 'serviceflow/links' === $source && '' === link_url( $key, $args ) ) {
			return '';
		}

		if ( 'serviceflow/business' === $source && '' === business_value( $key ) ) {
			return '';
		}
	}

	return $content;
}
add_filter( 'render_block', __NAMESPACE__ . '\hide_empty_bound_blocks', 20, 2 );
