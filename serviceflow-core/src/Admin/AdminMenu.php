<?php
/**
 * Admin Menu Registrar.
 *
 * Configures the unified ServiceFlow admin menu structure (PRD #48).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Admin;

defined( 'ABSPATH' ) || exit;

final class AdminMenu {

	public static function init(): void {
		add_action( 'admin_menu', array( __CLASS__, 'register_menus' ) );
	}

	public static function register_menus(): void {
		// Main Top-Level Menu
		add_menu_page(
			__( 'ServiceFlow', 'serviceflow' ),
			__( 'ServiceFlow', 'serviceflow' ),
			'manage_options',
			'serviceflow',
			array( DashboardPage::class, 'render' ),
			'dashicons-car',
			25
		);

		// Dashboard Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Dashboard', 'serviceflow' ),
			__( 'Dashboard', 'serviceflow' ),
			'manage_options',
			'serviceflow',
			array( DashboardPage::class, 'render' )
		);

		// Services Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Services', 'serviceflow' ),
			__( 'Services', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=service'
		);

		// Service Categories Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Service Categories', 'serviceflow' ),
			__( 'Categories', 'serviceflow' ),
			'manage_options',
			'edit-tags.php?taxonomy=service_category&post_type=service'
		);

		// Bookings Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Bookings & Leads', 'serviceflow' ),
			__( 'Bookings', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=booking_request'
		);

		// Service Areas Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Service Areas', 'serviceflow' ),
			__( 'Service Areas', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=service_area'
		);

		// Testimonials Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Testimonials', 'serviceflow' ),
			__( 'Testimonials', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=testimonial'
		);

		// Team Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Team Members', 'serviceflow' ),
			__( 'Team', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=team_member'
		);

		// FAQ Submenu
		add_submenu_page(
			'serviceflow',
			__( 'FAQ', 'serviceflow' ),
			__( 'FAQ', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=faq'
		);

		// Before & After Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Before & After', 'serviceflow' ),
			__( 'Before & After', 'serviceflow' ),
			'manage_options',
			'edit.php?post_type=project'
		);

		// Business Settings Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Business Settings', 'serviceflow' ),
			__( 'Business Settings', 'serviceflow' ),
			'manage_options',
			'serviceflow-settings',
			array( BusinessSettingsPage::class, 'render' )
		);

		// Demo Content & Tools Submenu
		add_submenu_page(
			'serviceflow',
			__( 'Demo Importer', 'serviceflow' ),
			__( 'Demo Content', 'serviceflow' ),
			'manage_options',
			'serviceflow-demo',
			array( \ServiceFlow\Core\Seed\AutoCareDemoSeeder::class, 'render_admin_page' )
		);
	}
}
