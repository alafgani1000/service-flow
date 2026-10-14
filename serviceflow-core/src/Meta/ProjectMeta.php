<?php
/**
 * Project (Before / After) Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class ProjectMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_project', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_project_details',
			__( 'Project & Transformation Details', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'project',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_project_meta', 'serviceflow_project_nonce' );

		$service  = get_post_meta( $post->ID, '_serviceflow_service', true );
		$vehicle  = get_post_meta( $post->ID, '_serviceflow_vehicle', true );
		$duration = get_post_meta( $post->ID, '_serviceflow_completion_time', true );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_project_service"><?php esc_html_e( 'Service Performed', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_service" id="sf_project_service" value="<?php echo esc_attr( $service ); ?>" class="regular-text" placeholder="e.g. Headlight Restoration & UV Coating"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_project_vehicle"><?php esc_html_e( 'Vehicle Model / Year', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_vehicle" id="sf_project_vehicle" value="<?php echo esc_attr( $vehicle ); ?>" class="regular-text" placeholder="e.g. 2018 Honda Civic"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_project_duration"><?php esc_html_e( 'Completion Turnaround', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_completion_time" id="sf_project_duration" value="<?php echo esc_attr( $duration ); ?>" class="regular-text" placeholder="e.g. 90 Minutes"></td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_project_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_project_nonce'] ) ), 'serviceflow_save_project_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_service'] ) ) {
			update_post_meta( $post_id, '_serviceflow_service', sanitize_text_field( wp_unslash( $_POST['serviceflow_service'] ) ) );
		}

		if ( isset( $_POST['serviceflow_vehicle'] ) ) {
			update_post_meta( $post_id, '_serviceflow_vehicle', sanitize_text_field( wp_unslash( $_POST['serviceflow_vehicle'] ) ) );
		}

		if ( isset( $_POST['serviceflow_completion_time'] ) ) {
			update_post_meta( $post_id, '_serviceflow_completion_time', sanitize_text_field( wp_unslash( $_POST['serviceflow_completion_time'] ) ) );
		}
	}
}
