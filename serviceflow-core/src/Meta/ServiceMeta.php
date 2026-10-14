<?php
/**
 * Service Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class ServiceMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_service', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_service_details',
			__( 'Service Details & Pricing', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'service',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_service_meta', 'serviceflow_service_meta_nonce' );

		$price_type    = get_post_meta( $post->ID, '_serviceflow_price_type', true ) ?: 'starting_from';
		$price_from    = get_post_meta( $post->ID, '_serviceflow_price_from', true );
		$price_to      = get_post_meta( $post->ID, '_serviceflow_price_to', true );
		$duration      = get_post_meta( $post->ID, '_serviceflow_duration', true );
		$duration_unit = get_post_meta( $post->ID, '_serviceflow_duration_unit', true ) ?: 'mins';
		$featured      = get_post_meta( $post->ID, '_serviceflow_featured', true );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_price_type"><?php esc_html_e( 'Price Type', 'serviceflow' ); ?></label></th>
				<td>
					<select name="serviceflow_price_type" id="sf_price_type">
						<option value="fixed" <?php selected( $price_type, 'fixed' ); ?>><?php esc_html_e( 'Fixed Price', 'serviceflow' ); ?></option>
						<option value="starting_from" <?php selected( $price_type, 'starting_from' ); ?>><?php esc_html_e( 'Starting From', 'serviceflow' ); ?></option>
						<option value="range" <?php selected( $price_type, 'range' ); ?>><?php esc_html_e( 'Price Range', 'serviceflow' ); ?></option>
						<option value="contact" <?php selected( $price_type, 'contact' ); ?>><?php esc_html_e( 'Contact for Price / Custom Quote', 'serviceflow' ); ?></option>
						<option value="free" <?php selected( $price_type, 'free' ); ?>><?php esc_html_e( 'Free Inspection / Consultation', 'serviceflow' ); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_price_from"><?php esc_html_e( 'Price (From / Fixed)', 'serviceflow' ); ?></label></th>
				<td>
					<input type="text" name="serviceflow_price_from" id="sf_price_from" value="<?php echo esc_attr( $price_from ); ?>" class="regular-text" placeholder="e.g. $45.00 or Rp 350.000">
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_price_to"><?php esc_html_e( 'Price (To - for Range)', 'serviceflow' ); ?></label></th>
				<td>
					<input type="text" name="serviceflow_price_to" id="sf_price_to" value="<?php echo esc_attr( $price_to ); ?>" class="regular-text" placeholder="e.g. $85.00 or Rp 600.000">
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_duration"><?php esc_html_e( 'Estimated Duration', 'serviceflow' ); ?></label></th>
				<td>
					<input type="number" name="serviceflow_duration" id="sf_duration" value="<?php echo esc_attr( $duration ); ?>" style="width:100px;" min="1" step="1">
					<select name="serviceflow_duration_unit" id="sf_duration_unit">
						<option value="mins" <?php selected( $duration_unit, 'mins' ); ?>><?php esc_html_e( 'Minutes', 'serviceflow' ); ?></option>
						<option value="hours" <?php selected( $duration_unit, 'hours' ); ?>><?php esc_html_e( 'Hours', 'serviceflow' ); ?></option>
						<option value="days" <?php selected( $duration_unit, 'days' ); ?>><?php esc_html_e( 'Days', 'serviceflow' ); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php esc_html_e( 'Featured Service', 'serviceflow' ); ?></th>
				<td>
					<label>
						<input type="checkbox" name="serviceflow_featured" value="1" <?php checked( $featured, '1' ); ?>>
						<?php esc_html_e( 'Show on homepage featured services grid', 'serviceflow' ); ?>
					</label>
				</td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_service_meta_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_service_meta_nonce'] ) ), 'serviceflow_save_service_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_price_type'] ) ) {
			update_post_meta( $post_id, '_serviceflow_price_type', sanitize_key( $_POST['serviceflow_price_type'] ) );
		}

		if ( isset( $_POST['serviceflow_price_from'] ) ) {
			update_post_meta( $post_id, '_serviceflow_price_from', sanitize_text_field( wp_unslash( $_POST['serviceflow_price_from'] ) ) );
		}

		if ( isset( $_POST['serviceflow_price_to'] ) ) {
			update_post_meta( $post_id, '_serviceflow_price_to', sanitize_text_field( wp_unslash( $_POST['serviceflow_price_to'] ) ) );
		}

		if ( isset( $_POST['serviceflow_duration'] ) ) {
			update_post_meta( $post_id, '_serviceflow_duration', absint( $_POST['serviceflow_duration'] ) );
		}

		if ( isset( $_POST['serviceflow_duration_unit'] ) ) {
			update_post_meta( $post_id, '_serviceflow_duration_unit', sanitize_key( $_POST['serviceflow_duration_unit'] ) );
		}

		$featured = isset( $_POST['serviceflow_featured'] ) ? '1' : '0';
		update_post_meta( $post_id, '_serviceflow_featured', $featured );
	}
}
