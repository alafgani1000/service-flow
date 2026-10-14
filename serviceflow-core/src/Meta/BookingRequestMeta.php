<?php
/**
 * Booking Request Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class BookingRequestMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_booking_request', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_booking_details',
			__( 'Lead & Booking Details', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'booking_request',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_booking_meta', 'serviceflow_booking_nonce' );

		$phone   = get_post_meta( $post->ID, '_serviceflow_booking_phone', true );
		$email   = get_post_meta( $post->ID, '_serviceflow_booking_email', true );
		$service = get_post_meta( $post->ID, '_serviceflow_booking_service', true );
		$vehicle = get_post_meta( $post->ID, '_serviceflow_booking_vehicle', true );
		$date    = get_post_meta( $post->ID, '_serviceflow_preferred_date', true );
		$time    = get_post_meta( $post->ID, '_serviceflow_preferred_time', true );
		$message = get_post_meta( $post->ID, '_serviceflow_booking_message', true );
		$status  = get_post_meta( $post->ID, '_serviceflow_booking_status', true ) ?: 'new';

		$clean_phone = preg_replace( '/\D+/', '', (string) $phone );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_status"><?php esc_html_e( 'Booking Status', 'serviceflow' ); ?></label></th>
				<td>
					<select name="serviceflow_booking_status" id="sf_status" style="font-weight:600;">
						<option value="new" <?php selected( $status, 'new' ); ?>>🔵 <?php esc_html_e( 'New Lead', 'serviceflow' ); ?></option>
						<option value="contacted" <?php selected( $status, 'contacted' ); ?>>🟡 <?php esc_html_e( 'Contacted', 'serviceflow' ); ?></option>
						<option value="confirmed" <?php selected( $status, 'confirmed' ); ?>>🟢 <?php esc_html_e( 'Confirmed Appointment', 'serviceflow' ); ?></option>
						<option value="completed" <?php selected( $status, 'completed' ); ?>>⚪ <?php esc_html_e( 'Completed Service', 'serviceflow' ); ?></option>
						<option value="cancelled" <?php selected( $status, 'cancelled' ); ?>>🔴 <?php esc_html_e( 'Cancelled', 'serviceflow' ); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Customer Phone', 'serviceflow' ); ?></th>
				<td>
					<strong><?php echo esc_html( $phone ?: '—' ); ?></strong>
					<?php if ( $clean_phone ) : ?>
						<p style="margin-top:4px;">
							<a href="https://wa.me/<?php echo esc_attr( $clean_phone ); ?>" class="button button-secondary" target="_blank" rel="noopener noreferrer">
								💬 <?php esc_html_e( 'Chat with Customer on WhatsApp', 'serviceflow' ); ?>
							</a>
							<a href="tel:<?php echo esc_attr( $clean_phone ); ?>" class="button button-secondary">
								📞 <?php esc_html_e( 'Call Customer', 'serviceflow' ); ?>
							</a>
						</p>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Customer Email', 'serviceflow' ); ?></th>
				<td><?php echo esc_html( $email ?: '—' ); ?></td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Requested Service', 'serviceflow' ); ?></th>
				<td><strong><?php echo esc_html( $service ?: '—' ); ?></strong></td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Vehicle Information', 'serviceflow' ); ?></th>
				<td><?php echo esc_html( $vehicle ?: '—' ); ?></td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Preferred Date & Time', 'serviceflow' ); ?></th>
				<td><?php echo esc_html( trim( $date . ' ' . $time ) ?: '—' ); ?></td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Customer Symptoms / Notes', 'serviceflow' ); ?></th>
				<td>
					<div style="background:#f9fafb;padding:12px;border:1px solid #e5e7eb;border-radius:4px;white-space:pre-wrap;">
						<?php echo esc_html( $message ?: __( 'No extra notes provided.', 'serviceflow' ) ); ?>
					</div>
				</td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_booking_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_booking_nonce'] ) ), 'serviceflow_save_booking_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_booking_status'] ) ) {
			$allowed = array( 'new', 'contacted', 'confirmed', 'completed', 'cancelled' );
			$status  = sanitize_key( $_POST['serviceflow_booking_status'] );
			if ( in_array( $status, $allowed, true ) ) {
				update_post_meta( $post_id, '_serviceflow_booking_status', $status );
			}
		}
	}
}
