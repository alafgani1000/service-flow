<?php
/**
 * Plugin Name: ServiceFlow Core
 * Plugin URI: https://serviceflowwp.com
 * Description: Companion plugin for ServiceFlow theme. Manages business data: Services, Service Areas, Team, Testimonials, FAQ, Projects, Bookings, Business Settings, and Schema.
 * Version: 0.1.0
 * Requires at least: 6.6
 * Requires PHP: 8.1
 * Author: ServiceFlow
 * Author URI: https://serviceflowwp.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: serviceflow
 * Domain Path: /languages
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core;

defined( 'ABSPATH' ) || exit;

define( 'SERVICEFLOW_CORE_VERSION', '0.1.0' );
define( 'SERVICEFLOW_CORE_PATH', plugin_dir_path( __FILE__ ) );
define( 'SERVICEFLOW_CORE_URL', plugin_dir_url( __FILE__ ) );

/**
 * Autoloader for ServiceFlow\Core classes.
 */
spl_autoload_register(
	static function ( string $class ): void {
		$prefix = 'ServiceFlow\\Core\\';
		if ( ! str_starts_with( $class, $prefix ) ) {
			return;
		}

		$relative_class = substr( $class, strlen( $prefix ) );
		$file           = SERVICEFLOW_CORE_PATH . 'src/' . str_replace( '\\', '/', $relative_class ) . '.php';

		if ( file_exists( $file ) ) {
			require_once $file;
		}
	}
);

/**
 * Main bootstrap class for ServiceFlow Core.
 */
final class Plugin {

	private static ?Plugin $instance = null;

	public static function instance(): Plugin {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		$this->init_hooks();
	}

	private function init_hooks(): void {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		// Register post types and taxonomies
		add_action( 'init', array( PostTypes\PostTypeRegistrar::class, 'register' ), 5 );
		add_action( 'init', array( Taxonomies\ServiceCategoryTaxonomy::class, 'register' ), 4 );

		// Meta boxes and save hooks
		Meta\ServiceMeta::init();
		Meta\ServiceAreaMeta::init();
		Meta\TeamMemberMeta::init();
		Meta\TestimonialMeta::init();
		Meta\ProjectMeta::init();
		Meta\BookingRequestMeta::init();

		// Business settings & bridge to theme
		Settings\BusinessSettings::init();
		WhatsApp\WhatsAppBridge::init();

		// Schema layer
		Schema\SchemaManager::init();

		// Admin menus & screens
		if ( is_admin() ) {
			Admin\AdminMenu::init();
			Admin\BookingListPage::init();
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
		}
	}

	public function load_textdomain(): void {
		load_plugin_textdomain( 'serviceflow', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	public function enqueue_admin_assets( string $hook_suffix ): void {
		if ( ! str_contains( $hook_suffix, 'serviceflow' ) && ! str_contains( $hook_suffix, 'service' ) && ! str_contains( $hook_suffix, 'booking' ) ) {
			return;
		}

		wp_enqueue_style(
			'serviceflow-core-admin',
			SERVICEFLOW_CORE_URL . 'assets/css/admin.css',
			array(),
			SERVICEFLOW_CORE_VERSION
		);

		wp_enqueue_script(
			'serviceflow-core-admin',
			SERVICEFLOW_CORE_URL . 'assets/js/admin.js',
			array( 'jquery' ),
			SERVICEFLOW_CORE_VERSION,
			true
		);
	}
}

Plugin::instance();
