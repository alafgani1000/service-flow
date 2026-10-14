<?php
/**
 * WhatsApp Integration Bridge.
 *
 * Provides dynamic WhatsApp URL generation and template message resolution (PRD #17).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\WhatsApp;

use ServiceFlow\Core\Settings\BusinessSettings;

defined( 'ABSPATH' ) || exit;

final class WhatsAppBridge {

	public static function init(): void {
		add_filter( 'serviceflow_whatsapp_message', array( __CLASS__, 'filter_message' ), 10, 2 );
	}

	/**
	 * Replaces tags like {service}, {vehicle}, {date}, {time}, {name} in the message.
	 *
	 * @param string $message Default message.
	 * @param array  $context Dynamic context variables.
	 * @return string
	 */
	public static function filter_message( string $message, array $context = array() ): string {
		$settings = BusinessSettings::get_all();
		$template = ! empty( $settings['whatsapp_message'] ) ? $settings['whatsapp_message'] : $message;

		$replacements = array(
			'{service}' => $context['service'] ?? __( 'General Service', 'serviceflow' ),
			'{vehicle}' => $context['vehicle'] ?? '',
			'{date}'    => $context['date'] ?? '',
			'{time}'    => $context['time'] ?? '',
			'{name}'    => $context['name'] ?? '',
			'{phone}'   => $context['phone'] ?? '',
		);

		return trim( strtr( $template, $replacements ) );
	}

	/**
	 * Builds a full wa.me link with customized context.
	 *
	 * @param array $context Context parameters.
	 * @return string
	 */
	public static function build_url( array $context = array() ): string {
		$settings = BusinessSettings::get_all();
		$phone    = preg_replace( '/\D+/', '', (string) $settings['whatsapp'] );

		if ( empty( $phone ) ) {
			return '';
		}

		$message = self::filter_message( '', $context );

		return 'https://wa.me/' . $phone . ( ! empty( $message ) ? '?text=' . rawurlencode( $message ) : '' );
	}
}
