<?php
/**
 * Global Business Settings.
 *
 * Manages central business information and feeds it to the theme via the
 * `serviceflow_business_info` filter (PRD #8, #36, #37).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Settings;

defined( 'ABSPATH' ) || exit;

final class BusinessSettings {

	public const OPTION_KEY = 'serviceflow_business_settings';

	public static function init(): void {
		add_action( 'admin_init', array( __CLASS__, 'register_settings' ) );
		add_filter( 'serviceflow_business_info', array( __CLASS__, 'supply_theme_business_info' ) );
	}

	public static function get_defaults(): array {
		return array(
			'business_name'    => (string) get_bloginfo( 'name' ),
			'phone'            => '+1 (555) 019-2834',
			'whatsapp'         => '+15550192834',
			'whatsapp_message' => 'Hello, I would like to book a service for my vehicle.',
			'email'            => (string) get_bloginfo( 'admin_email' ),
			'address'          => '124 Industrial Parkway',
			'city'             => 'North Valley',
			'region'           => 'California',
			'postal_code'      => '90210',
			'country'          => 'US',
			'hours_summary'    => 'Mon - Sat: 08:00 - 17:00',
			'maps_url'         => 'https://maps.google.com',
			'latitude'         => '',
			'longitude'        => '',
		);
	}

	public static function get_all(): array {
		$saved = get_option( self::OPTION_KEY, array() );
		return array_merge( self::get_defaults(), is_array( $saved ) ? $saved : array() );
	}

	public static function register_settings(): void {
		register_setting(
			'serviceflow_business_group',
			self::OPTION_KEY,
			array(
				'type'              => 'array',
				'sanitize_callback' => array( __CLASS__, 'sanitize' ),
				'default'           => self::get_defaults(),
			)
		);
	}

	public static function sanitize( mixed $input ): array {
		if ( ! is_array( $input ) ) {
			return self::get_defaults();
		}

		return array(
			'business_name'    => sanitize_text_field( $input['business_name'] ?? '' ),
			'phone'            => sanitize_text_field( $input['phone'] ?? '' ),
			'whatsapp'         => sanitize_text_field( $input['whatsapp'] ?? '' ),
			'whatsapp_message' => sanitize_textarea_field( $input['whatsapp_message'] ?? '' ),
			'email'            => sanitize_email( $input['email'] ?? '' ),
			'address'          => sanitize_text_field( $input['address'] ?? '' ),
			'city'             => sanitize_text_field( $input['city'] ?? '' ),
			'region'           => sanitize_text_field( $input['region'] ?? '' ),
			'postal_code'      => sanitize_text_field( $input['postal_code'] ?? '' ),
			'country'          => sanitize_text_field( $input['country'] ?? '' ),
			'hours_summary'    => sanitize_text_field( $input['hours_summary'] ?? '' ),
			'maps_url'         => esc_url_raw( $input['maps_url'] ?? '' ),
			'latitude'         => sanitize_text_field( $input['latitude'] ?? '' ),
			'longitude'        => sanitize_text_field( $input['longitude'] ?? '' ),
		);
	}

	/**
	 * Supplies saved business settings directly to the theme via filter hook.
	 *
	 * @param array $info Defaults from theme.
	 * @return array
	 */
	public static function supply_theme_business_info( array $info ): array {
		$settings = self::get_all();

		return array_merge(
			$info,
			array(
				'name'             => $settings['business_name'] ?: $info['name'],
				'phone'            => $settings['phone'] ?: $info['phone'],
				'whatsapp'         => $settings['whatsapp'] ?: $info['whatsapp'],
				'whatsapp_message' => $settings['whatsapp_message'] ?: $info['whatsapp_message'],
				'email'            => $settings['email'] ?: $info['email'],
				'address'          => $settings['address'] ?: $info['address'],
				'city'             => $settings['city'] ?: $info['city'],
				'hours_summary'    => $settings['hours_summary'] ?: $info['hours_summary'],
				'maps_url'         => $settings['maps_url'] ?: $info['maps_url'],
			)
		);
	}
}
