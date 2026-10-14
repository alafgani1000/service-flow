<?php
/**
 * Booking Request Custom Post Type.
 *
 * Stores leads and appointment inquiries natively (PRD #15, #16).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class BookingRequestPostType {

	public const POST_TYPE = 'booking_request';

	public static function register(): void {
		$labels = array(
			'name'               => _x( 'Bookings', 'Post Type General Name', 'serviceflow' ),
			'singular_name'      => _x( 'Booking Request', 'Post Type Singular Name', 'serviceflow' ),
			'menu_name'          => __( 'Bookings', 'serviceflow' ),
			'all_items'          => __( 'All Bookings', 'serviceflow' ),
			'add_new_item'       => __( 'Add New Booking', 'serviceflow' ),
			'add_new'            => __( 'Add Booking', 'serviceflow' ),
			'edit_item'          => __( 'View / Edit Booking', 'serviceflow' ),
			'search_items'       => __( 'Search Bookings', 'serviceflow' ),
			'not_found'          => __( 'No bookings found', 'serviceflow' ),
			'not_found_in_trash' => __( 'No bookings found in Trash', 'serviceflow' ),
		);

		$args = array(
			'label'               => __( 'Booking Request', 'serviceflow' ),
			'description'         => __( 'Customer service requests and leads', 'serviceflow' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => false, // Handled via ServiceFlow top-level menu
			'show_in_nav_menus'   => false,
			'has_archive'         => false,
			'publicly_queryable'  => false,
			'show_in_rest'        => false,
			'capabilities'        => array(
				'create_posts' => 'do_not_allow', // Front-end only creation, or via admin
			),
			'map_meta_cap'        => true,
		);

		register_post_type( self::POST_TYPE, $args );

		// Custom admin columns for bookings
		add_filter( 'manage_booking_request_posts_columns', array( __CLASS__, 'add_admin_columns' ) );
		add_action( 'manage_booking_request_posts_custom_column', array( __CLASS__, 'render_admin_columns' ), 10, 2 );
	}

	public static function add_admin_columns( array $columns ): array {
		return array(
			'cb'             => '<input type="checkbox" />',
			'title'          => __( 'Customer', 'serviceflow' ),
			'booking_phone'  => __( 'Phone / WhatsApp', 'serviceflow' ),
			'service_name'   => __( 'Requested Service', 'serviceflow' ),
			'vehicle'        => __( 'Vehicle', 'serviceflow' ),
			'preferred_date' => __( 'Date & Time', 'serviceflow' ),
			'booking_status' => __( 'Status', 'serviceflow' ),
			'date'           => __( 'Received', 'serviceflow' ),
		);
	}

	public static function render_admin_columns( string $column, int $post_id ): void {
		switch ( $column ) {
			case 'booking_phone':
				$phone = get_post_meta( $post_id, '_serviceflow_booking_phone', true );
				$clean = preg_replace( '/\D+/', '', (string) $phone );
				if ( $phone ) {
					echo esc_html( $phone );
					if ( $clean ) {
						printf(
							' <a href="https://wa.me/%s" target="_blank" rel="noopener noreferrer" style="text-decoration:none;" title="%s">💬</a>',
							esc_attr( $clean ),
							esc_attr__( 'Open WhatsApp chat', 'serviceflow' )
						);
					}
				} else {
					echo '—';
				}
				break;

			case 'service_name':
				$service = get_post_meta( $post_id, '_serviceflow_booking_service', true );
				echo esc_html( $service ?: '—' );
				break;

			case 'vehicle':
				$vehicle = get_post_meta( $post_id, '_serviceflow_booking_vehicle', true );
				echo esc_html( $vehicle ?: '—' );
				break;

			case 'preferred_date':
				$date = get_post_meta( $post_id, '_serviceflow_preferred_date', true );
				$time = get_post_meta( $post_id, '_serviceflow_preferred_time', true );
				echo esc_html( trim( $date . ' ' . $time ) ?: '—' );
				break;

			case 'booking_status':
				$status = get_post_meta( $post_id, '_serviceflow_booking_status', true ) ?: 'new';
				$badges = array(
					'new'       => 'background:#e0f2fe;color:#0369a1;padding:2px 8px;border-radius:4px;font-weight:600;',
					'contacted' => 'background:#fef3c7;color:#92400e;padding:2px 8px;border-radius:4px;font-weight:600;',
					'confirmed' => 'background:#dcfce7;color:#15803d;padding:2px 8px;border-radius:4px;font-weight:600;',
					'completed' => 'background:#f1f5f9;color:#475569;padding:2px 8px;border-radius:4px;font-weight:600;',
					'cancelled' => 'background:#fee2e2;color:#991b1b;padding:2px 8px;border-radius:4px;font-weight:600;',
				);
				$style = $badges[ $status ] ?? '';
				printf( '<span style="%s">%s</span>', esc_attr( $style ), esc_html( ucfirst( $status ) ) );
				break;
		}
	}
}
