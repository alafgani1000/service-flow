<?php
/**
 * Business Settings Admin Screen.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Admin;

use ServiceFlow\Core\Settings\BusinessSettings;

defined( 'ABSPATH' ) || exit;

final class BusinessSettingsPage {

	public static function render(): void {
		$settings = BusinessSettings::get_all();
		?>
		<div class="wrap sf-admin-wrap">
			<h1><?php esc_html_e( 'ServiceFlow — Business Settings', 'serviceflow' ); ?></h1>
			<p class="description"><?php esc_html_e( 'These details automatically connect to your website header, footer, booking forms, WhatsApp buttons, and Schema.org local business records.', 'serviceflow' ); ?></p>

			<form method="post" action="options.php">
				<?php
				settings_fields( 'serviceflow_business_group' );
				?>
				<table class="form-table">
					<tr>
						<th scope="row"><label for="business_name"><?php esc_html_e( 'Business Name', 'serviceflow' ); ?></label></th>
						<td>
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[business_name]" id="business_name" value="<?php echo esc_attr( $settings['business_name'] ); ?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="phone"><?php esc_html_e( 'Primary Phone Number', 'serviceflow' ); ?></label></th>
						<td>
							<input type="tel" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[phone]" id="phone" value="<?php echo esc_attr( $settings['phone'] ); ?>" class="regular-text" placeholder="+1 (555) 019-2834">
							<p class="description"><?php esc_html_e( 'Shown in header and mobile call button.', 'serviceflow' ); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="whatsapp"><?php esc_html_e( 'WhatsApp Number', 'serviceflow' ); ?></label></th>
						<td>
							<input type="tel" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[whatsapp]" id="whatsapp" value="<?php echo esc_attr( $settings['whatsapp'] ); ?>" class="regular-text" placeholder="+15550192834">
							<p class="description"><?php esc_html_e( 'International format with country code, e.g. +1... or 628...', 'serviceflow' ); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="whatsapp_message"><?php esc_html_e( 'Default WhatsApp Lead Message', 'serviceflow' ); ?></label></th>
						<td>
							<textarea name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[whatsapp_message]" id="whatsapp_message" rows="3" class="large-text"><?php echo esc_textarea( $settings['whatsapp_message'] ); ?></textarea>
							<p class="description"><?php esc_html_e( 'Available tags: {service}, {vehicle}, {date}, {time}, {name}', 'serviceflow' ); ?></p>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="email"><?php esc_html_e( 'Contact Email', 'serviceflow' ); ?></label></th>
						<td>
							<input type="email" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[email]" id="email" value="<?php echo esc_attr( $settings['email'] ); ?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="address"><?php esc_html_e( 'Street Address', 'serviceflow' ); ?></label></th>
						<td>
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[address]" id="address" value="<?php echo esc_attr( $settings['address'] ); ?>" class="large-text" placeholder="124 Industrial Parkway">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="city"><?php esc_html_e( 'City & State/Region', 'serviceflow' ); ?></label></th>
						<td>
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[city]" id="city" value="<?php echo esc_attr( $settings['city'] ); ?>" class="regular-text" placeholder="City">
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[region]" id="region" value="<?php echo esc_attr( $settings['region'] ); ?>" class="regular-text" placeholder="State / Province">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="postal_code"><?php esc_html_e( 'Postal Code & Country', 'serviceflow' ); ?></label></th>
						<td>
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[postal_code]" id="postal_code" value="<?php echo esc_attr( $settings['postal_code'] ); ?>" class="small-text" placeholder="Postal Code">
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[country]" id="country" value="<?php echo esc_attr( $settings['country'] ); ?>" class="small-text" placeholder="Country Code">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="hours_summary"><?php esc_html_e( 'Hours Summary', 'serviceflow' ); ?></label></th>
						<td>
							<input type="text" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[hours_summary]" id="hours_summary" value="<?php echo esc_attr( $settings['hours_summary'] ); ?>" class="regular-text" placeholder="Mon - Sat: 08:00 - 17:00">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="maps_url"><?php esc_html_e( 'Google Maps Link', 'serviceflow' ); ?></label></th>
						<td>
							<input type="url" name="<?php echo esc_attr( BusinessSettings::OPTION_KEY ); ?>[maps_url]" id="maps_url" value="<?php echo esc_attr( $settings['maps_url'] ); ?>" class="large-text">
						</td>
					</tr>
				</table>
				<?php submit_button( __( 'Save Business Settings', 'serviceflow' ) ); ?>
			</form>
		</div>
		<?php
	}
}
