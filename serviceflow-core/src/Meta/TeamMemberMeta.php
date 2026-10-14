<?php
/**
 * Team Member Meta Boxes.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Meta;

defined( 'ABSPATH' ) || exit;

final class TeamMemberMeta {

	public static function init(): void {
		add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
		add_action( 'save_post_team_member', array( __CLASS__, 'save_meta' ) );
	}

	public static function add_meta_boxes(): void {
		add_meta_box(
			'serviceflow_team_details',
			__( 'Member Details & Credentials', 'serviceflow' ),
			array( __CLASS__, 'render_meta_box' ),
			'team_member',
			'normal',
			'high'
		);
	}

	public static function render_meta_box( \WP_Post $post ): void {
		wp_nonce_field( 'serviceflow_save_team_meta', 'serviceflow_team_nonce' );

		$position      = get_post_meta( $post->ID, '_serviceflow_position', true );
		$experience    = get_post_meta( $post->ID, '_serviceflow_experience', true );
		$certification = get_post_meta( $post->ID, '_serviceflow_certification', true );
		$phone         = get_post_meta( $post->ID, '_serviceflow_phone', true );
		?>
		<table class="form-table sf-meta-table">
			<tr>
				<th scope="row"><label for="sf_position"><?php esc_html_e( 'Position / Job Title', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_position" id="sf_position" value="<?php echo esc_attr( $position ); ?>" class="regular-text" placeholder="e.g. Senior Master Mechanic"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_experience"><?php esc_html_e( 'Years of Experience', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_experience" id="sf_experience" value="<?php echo esc_attr( $experience ); ?>" class="regular-text" placeholder="e.g. 12 years experience"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_certification"><?php esc_html_e( 'Certifications & Specialties', 'serviceflow' ); ?></label></th>
				<td><input type="text" name="serviceflow_certification" id="sf_certification" value="<?php echo esc_attr( $certification ); ?>" class="large-text" placeholder="e.g. ASE Master Certified, Hybrid & EV Diagnostic Specialist"></td>
			</tr>
			<tr>
				<th scope="row"><label for="sf_phone"><?php esc_html_e( 'Direct Contact Phone (Optional)', 'serviceflow' ); ?></label></th>
				<td><input type="tel" name="serviceflow_phone" id="sf_phone" value="<?php echo esc_attr( $phone ); ?>" class="regular-text"></td>
			</tr>
		</table>
		<?php
	}

	public static function save_meta( int $post_id ): void {
		if ( ! isset( $_POST['serviceflow_team_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_team_nonce'] ) ), 'serviceflow_save_team_meta' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		if ( isset( $_POST['serviceflow_position'] ) ) {
			update_post_meta( $post_id, '_serviceflow_position', sanitize_text_field( wp_unslash( $_POST['serviceflow_position'] ) ) );
		}

		if ( isset( $_POST['serviceflow_experience'] ) ) {
			update_post_meta( $post_id, '_serviceflow_experience', sanitize_text_field( wp_unslash( $_POST['serviceflow_experience'] ) ) );
		}

		if ( isset( $_POST['serviceflow_certification'] ) ) {
			update_post_meta( $post_id, '_serviceflow_certification', sanitize_text_field( wp_unslash( $_POST['serviceflow_certification'] ) ) );
		}

		if ( isset( $_POST['serviceflow_phone'] ) ) {
			update_post_meta( $post_id, '_serviceflow_phone', sanitize_text_field( wp_unslash( $_POST['serviceflow_phone'] ) ) );
		}
	}
}
