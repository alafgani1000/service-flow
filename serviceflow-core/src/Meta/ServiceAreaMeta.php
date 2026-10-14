<?php
/**
 * Service Area Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class ServiceAreaMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_service_area', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_service_area_details',
			__( 'Service Area Details', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'service_area',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_service_area_meta', 'serviceflow_service_area_nonce' );

		$city        = get_post_meta( $post->ID, '_serviceflow_city', true );
		$region      = get_post_meta( $post->ID, '_serviceflow_region', true );
		$postal_code = get_post_meta( $post->ID, '_serviceflow_postal_code', true );
		$map_url     = get_post_meta( $post->ID, '_serviceflow_map_url', true );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_city"><?php esc_html_e( 'City / District', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_city" id="sf_city" value="<?php echo esc_attr( $city ); ?>" class="regular-text" placeholder="e.g. North Valley or Jakarta Selatan"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_region"><?php esc_html_e( 'State / Province', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_region" id="sf_region" value="<?php echo esc_attr( $region ); ?>" class="regular-text" placeholder="e.g. California or DKI Jakarta"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_postal_code"><?php esc_html_e( 'Postal Code', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_postal_code" id="sf_postal_code" value="<?php echo esc_attr( $postal_code ); ?>" class="small-text" placeholder="e.g. 90210"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_map_url"><?php esc_html_e( 'Google Maps Link / Coordinates', 'serviceflow' ); ?></label></th>
				<td><input type="url" name="serviceflow_map_url" id="sf_map_url" value="<?php echo esc_attr( $map_url ); ?>" class="large-text" placeholder="https://maps.google.com/..."></td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_service_area_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_service_area_nonce'] ) ), 'serviceflow_save_service_area_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_city'] ) ) {
			update_post_meta( $post_id, '_serviceflow_city', sanitize_text_field( wp_unslash( $_POST['serviceflow_city'] ) ) );
		}

		if ( isset( $_POST['serviceflow_region'] ) ) {
			update_post_meta( $post_id, '_serviceflow_region', sanitize_text_field( wp_unslash( $_POST['serviceflow_region'] ) ) );
		}

		if ( isset( $_POST['serviceflow_postal_code'] ) ) {
			update_post_meta( $post_id, '_serviceflow_postal_code', sanitize_text_field( wp_unslash( $_POST['serviceflow_postal_code'] ) ) );
		}

		if ( isset( $_POST['serviceflow_map_url'] ) ) {
			update_post_meta( $post_id, '_serviceflow_map_url', esc_url_raw( wp_unslash( $_POST['serviceflow_map_url'] ) ) );
		}
	}
}
