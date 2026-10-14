<?php
/**
 * Admin Dashboard Page.
 *
 * Displays website readiness, quick statistics, and setup shortcuts (PRD #49).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Admin;

use ServiceFlow\Core\Settings\BusinessSettings;

defined( 'ABSPATH' ) || exit;

final class DashboardPage {

	public static function render(): void {
		$settings = BusinessSettings::get_all();

		$service_count  = wp_count_posts( 'service' )->publish ?? 0;
		$booking_count  = wp_count_posts( 'booking_request' )->publish ?? 0;
		$review_count   = wp_count_posts( 'testimonial' )->publish ?? 0;
		$area_count     = wp_count_posts( 'service_area' )->publish ?? 0;

		$has_phone    = ! empty( $settings['phone'] );
		$has_whatsapp = ! empty( $settings['whatsapp'] );
		$has_address  = ! empty( $settings['address'] );
		$has_services = $service_count > 0;

		$steps_done = ( $has_phone ? 1 : 0 ) + ( $has_whatsapp ? 1 : 0 ) + ( $has_address ? 1 : 0 ) + ( $has_services ? 1 : 0 );
		$progress   = round( ( $steps_done / 4 ) * 100 );
		?>
		<div class="wrap sf-admin-wrap">
			<h1><?php esc_html_e( 'ServiceFlow Dashboard', 'serviceflow' ); ?></h1>
			<p class="description"><?php esc_html_e( 'Manage your local service business website, conversion settings, and customer booking leads.', 'serviceflow' ); ?></p>

			<div class="sf-dashboard-grid" style="display:grid;grid-template-columns:2fr 1fr;gap:24px;margin-top:20px;">
				<div class="sf-main-col">
					<!-- Setup Progress Card -->
					<div class="sf-card" style="background:#fff;padding:24px;border:1px solid #c3c4c7;border-radius:6px;box-shadow:0 1px 1px rgba(0,0,0,.04);">
						<h2><?php esc_html_e( 'Website Setup Progress', 'serviceflow' ); ?>: <?php echo esc_html( $progress ); ?>%</h2>
						<div style="background:#e5e7eb;height:12px;border-radius:6px;overflow:hidden;margin:12px 0 20px;">
							<div style="background:#ff6a13;height:100%;width:<?php echo esc_attr( $progress ); ?>%;"></div>
						</div>
						<ul style="list-style:none;padding:0;margin:0;line-height:2;">
							<li><?php echo $has_address ? '✅' : '⚪'; ?> <?php esc_html_e( 'Business Information & Address', 'serviceflow' ); ?></li>
							<li><?php echo $has_whatsapp ? '✅' : '⚪'; ?> <?php esc_html_e( 'WhatsApp Direct Booking Configured', 'serviceflow' ); ?></li>
							<li><?php echo $has_services ? '✅' : '⚪'; ?> <?php printf( esc_html__( 'Services Catalog (%d created)', 'serviceflow' ), (int) $service_count ); ?></li>
							<li><?php echo $has_phone ? '✅' : '⚪'; ?> <?php esc_html_e( 'Emergency & Contact Phone Number', 'serviceflow' ); ?></li>
						</ul>
					</div>

					<!-- Quick Actions -->
					<div class="sf-card" style="background:#fff;padding:24px;border:1px solid #c3c4c7;border-radius:6px;box-shadow:0 1px 1px rgba(0,0,0,.04);margin-top:20px;">
						<h2><?php esc_html_e( 'Quick Actions', 'serviceflow' ); ?></h2>
						<p>
							<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=service' ) ); ?>" class="button button-primary">➕ <?php esc_html_e( 'Add New Service', 'serviceflow' ); ?></a>
							<a href="<?php echo esc_url( admin_url( 'admin.php?page=serviceflow-settings' ) ); ?>" class="button button-secondary">⚙️ <?php esc_html_e( 'Business Settings', 'serviceflow' ); ?></a>
							<a href="<?php echo esc_url( admin_url( 'admin.php?page=serviceflow-demo' ) ); ?>" class="button button-secondary">🚀 <?php esc_html_e( 'Import AutoCare Demo', 'serviceflow' ); ?></a>
						</p>
					</div>
				</div>

				<div class="sf-side-col">
					<!-- Statistics Card -->
					<div class="sf-card" style="background:#fff;padding:24px;border:1px solid #c3c4c7;border-radius:6px;box-shadow:0 1px 1px rgba(0,0,0,.04);">
						<h3><?php esc_html_e( 'Business Overview', 'serviceflow' ); ?></h3>
						<p><strong><?php echo esc_html( (string) $booking_count ); ?></strong> <?php esc_html_e( 'Total Booking Requests', 'serviceflow' ); ?></p>
						<p><strong><?php echo esc_html( (string) $service_count ); ?></strong> <?php esc_html_e( 'Published Services', 'serviceflow' ); ?></p>
						<p><strong><?php echo esc_html( (string) $area_count ); ?></strong> <?php esc_html_e( 'Service Areas Covered', 'serviceflow' ); ?></p>
						<p><strong><?php echo esc_html( (string) $review_count ); ?></strong> <?php esc_html_e( 'Customer Reviews', 'serviceflow' ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
