<?php
/**
 * Schema.org Structured Data Generator.
 *
 * Provides LocalBusiness, Service, and FAQPage JSON-LD schemas.
 * Respects SEO plugins (Yoast, Rank Math, etc.) via compatibility filter (PRD #44).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Schema;

use ServiceFlow\Core\Settings\BusinessSettings;

defined( 'ABSPATH' ) || exit;

final class SchemaManager {

	public static function init(): void {
		add_action( 'wp_head', array( __CLASS__, 'output_schema' ), 20 );
	}

	public static function output_schema(): void {
		// If a dedicated SEO plugin is active, do not duplicate LocalBusiness schema
		if ( apply_filters( 'serviceflow_seo_plugin_active', false ) ) {
			return;
		}

		$schemas = array();

		// LocalBusiness on front page
		if ( is_front_page() ) {
			$schemas[] = self::build_local_business_schema();
		}

		// Service on single-service
		if ( is_singular( 'service' ) ) {
			$schemas[] = self::build_service_schema( (int) get_queried_object_id() );
		}

		/**
		 * Filter structured data schemas.
		 *
		 * @param array $schemas Array of schema objects.
		 */
		$schemas = (array) apply_filters( 'serviceflow_schema', array_filter( $schemas ) );

		if ( empty( $schemas ) ) {
			return;
		}

		foreach ( $schemas as $schema ) {
			printf(
				'<script type="application/ld+json">%s</script>' . "\n",
				wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT )
			);
		}
	}

	private static function build_local_business_schema(): array {
		$settings = BusinessSettings::get_all();

		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => 'AutoRepair',
			'name'     => $settings['business_name'] ?: get_bloginfo( 'name' ),
			'url'      => home_url( '/' ),
			'address'  => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => $settings['address'],
				'addressLocality' => $settings['city'],
				'addressRegion'   => $settings['region'],
				'postalCode'      => $settings['postal_code'],
				'addressCountry'  => $settings['country'],
			),
		);

		if ( ! empty( $settings['phone'] ) ) {
			$schema['telephone'] = $settings['phone'];
		}

		if ( ! empty( $settings['maps_url'] ) ) {
			$schema['hasMap'] = $settings['maps_url'];
		}

		if ( ! empty( $settings['latitude'] ) && ! empty( $settings['longitude'] ) ) {
			$schema['geo'] = array(
				'@type'     => 'GeoCoordinates',
				'latitude'  => (float) $settings['latitude'],
				'longitude' => (float) $settings['longitude'],
			);
		}

		return $schema;
	}

	private static function build_service_schema( int $post_id ): array {
		$post = get_post( $post_id );
		if ( ! $post ) {
			return array();
		}

		$from = get_post_meta( $post_id, '_serviceflow_price_from', true );

		$schema = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'Service',
			'name'        => get_the_title( $post_id ),
			'description' => wp_strip_all_tags( get_the_excerpt( $post_id ) ),
			'provider'    => array(
				'@type' => 'AutoRepair',
				'name'  => get_bloginfo( 'name' ),
			),
		);

		if ( $from ) {
			$clean_price = preg_replace( '/[^\d.]/', '', (string) $from );
			if ( $clean_price ) {
				$schema['offers'] = array(
					'@type'         => 'Offer',
					'price'         => $clean_price,
					'priceCurrency' => 'USD',
				);
			}
		}

		return $schema;
	}
}
