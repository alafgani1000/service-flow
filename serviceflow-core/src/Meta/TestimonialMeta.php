<?php
/**
 * Testimonial Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class TestimonialMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_testimonial', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_testimonial_details',
			__( 'Testimonial Details', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'testimonial',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_testimonial_meta', 'serviceflow_testimonial_nonce' );

		$rating  = get_post_meta( $post->ID, '_serviceflow_rating', true ) ?: '5';
		$service = get_post_meta( $post->ID, '_serviceflow_service', true );
		$vehicle = get_post_meta( $post->ID, '_serviceflow_vehicle', true );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_rating"><?php esc_html_e( 'Star Rating', 'serviceflow' ); ?></label></th>
				<td>
					<select name="serviceflow_rating" id="sf_rating">
						<option value="5" <?php selected( $rating, '5' ); ?>>★★★★★ (5 / 5)</option>
						<option value="4" <?php selected( $rating, '4' ); ?>>★★★★☆ (4 / 5)</option>
						<option value="3" <?php selected( $rating, '3' ); ?>>★★★☆☆ (3 / 5)</option>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_service"><?php esc_html_e( 'Service Received', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_service" id="sf_service" value="<?php echo esc_attr( $service ); ?>" class="regular-text" placeholder="e.g. Brake Service & Rotor Resurfacing"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_vehicle"><?php esc_html_e( 'Customer Vehicle', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_vehicle" id="sf_vehicle" value="<?php echo esc_attr( $vehicle ); ?>" class="regular-text" placeholder="e.g. Toyota Camry 2019"></td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_testimonial_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_testimonial_nonce'] ) ), 'serviceflow_save_testimonial_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_rating'] ) ) {
			update_post_meta( $post_id, '_serviceflow_rating', absint( $_POST['serviceflow_rating'] ) );
		}

		if ( isset( $_POST['serviceflow_service'] ) ) {
			update_post_meta( $post_id, '_serviceflow_service', sanitize_text_field( wp_unslash( $_POST['serviceflow_service'] ) ) );
		}

		if ( isset( $_POST['serviceflow_vehicle'] ) ) {
			update_post_meta( $post_id, '_serviceflow_vehicle', sanitize_text_field( wp_unslash( $_POST['serviceflow_vehicle'] ) ) );
		}
	}
}
