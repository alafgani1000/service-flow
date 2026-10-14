<?php
/**
 * AutoCare Demo Content Seeder.
 *
 * Imports the full AutoCare workshop content: 8 Services, Categories, 4 Team Members,
 * 5 Testimonials, 5 Service Areas, and 10 FAQs (PRD #51, #68).
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\Seed;

use ServiceFlow\Core\Settings\BusinessSettings;

defined( 'ABSPATH' ) || exit;

final class AutoCareDemoSeeder {

	public static function render_admin_page(): void {
		$message = '';

		if ( isset( $_POST['serviceflow_import_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['serviceflow_import_nonce'] ) ), 'serviceflow_import_demo' ) ) {
			if ( current_user_can( 'manage_options' ) ) {
				$count   = self::run_seed();
				$message = sprintf(
					/* translators: %d: number of items created */
					__( 'AutoCare demo data successfully imported! %d records created/updated.', 'serviceflow' ),
					$count
				);
			}
		}
		?>
		<div class="wrap sf-admin-wrap">
			<h1><?php esc_html_e( 'AutoCare Workshop — 1-Click Demo Importer', 'serviceflow' ); ?></h1>
			<p class="description"><?php esc_html_e( 'Populate your website with complete, professional AutoCare workshop content in seconds (PRD #51, #68).', 'serviceflow' ); ?></p>

			<?php if ( $message ) : ?>
				<div class="notice notice-success is-dismissible"><p><?php echo esc_html( $message ); ?></p></div>
			<?php endif; ?>

			<div class="sf-card" style="background:#fff;padding:24px;border:1px solid #c3c4c7;border-radius:6px;max-width:680px;margin-top:20px;">
				<h2><?php esc_html_e( 'What gets imported?', 'serviceflow' ); ?></h2>
				<ul style="line-height:2;list-style:disc;padding-inline-start:20px;">
					<li><strong>8 Services:</strong> Oil Change, Brake Service, AC System, Engine Diagnostics, Battery, Tire Service, Wheel Alignment, Car Detailing.</li>
					<li><strong>6 Categories:</strong> Maintenance, Repair, Inspection, Detailing, Electrical, AC.</li>
					<li><strong>4 Team Members:</strong> Workshop Manager, Diagnostic Tech, Brake Specialist, Service Advisor.</li>
					<li><strong>5 Testimonials:</strong> Real vehicle reviews with star ratings and services.</li>
					<li><strong>5 Service Areas:</strong> Downtown, North Valley, South Suburbs, Eastside, West Metro.</li>
					<li><strong>10 FAQs:</strong> Detailed answers regarding appointments, pricing, warranties, turnaround.</li>
					<li><strong>Business Settings:</strong> Default address, working hours, phone, and WhatsApp format.</li>
				</ul>

				<form method="post" onsubmit="return confirm('<?php echo esc_js( __( 'Are you sure you want to import AutoCare demo content? This will create demo services, team, and FAQs.', 'serviceflow' ) ); ?>');">
					<?php wp_nonce_field( 'serviceflow_import_demo', 'serviceflow_import_nonce' ); ?>
					<p style="margin-top:20px;">
						<button type="submit" class="button button-primary button-hero">
							🚀 <?php esc_html_e( 'Import AutoCare Workshop Demo Now', 'serviceflow' ); ?>
						</button>
					</p>
				</form>
			</div>
		</div>
		<?php
	}

	public static function run_seed(): int {
		$created = 0;

		// 1. Categories
		$categories = array(
			'Maintenance' => 'Scheduled preventative fluid and safety care',
			'Repair'      => 'Mechanical and electrical repairs',
			'Inspection'  => 'Computerized safety and emissions inspections',
			'Detailing'   => 'Interior and exterior vehicle rejuvenation',
			'Electrical'  => 'Battery, alternator, and wiring diagnostics',
			'AC'          => 'Air conditioning compressor and refrigerant service',
		);

		$cat_ids = array();
		foreach ( $categories as $name => $desc ) {
			$term = wp_insert_term(
				$name,
				'service_category',
				array(
					'description' => $desc,
					'slug'        => sanitize_title( $name ),
				)
			);
			if ( ! is_wp_error( $term ) ) {
				$cat_ids[ $name ] = $term['term_id'];
				$created++;
			} else {
				$existing = get_term_by( 'name', $name, 'service_category' );
				if ( $existing ) {
					$cat_ids[ $name ] = $existing->term_id;
				}
			}
		}

		// 2. Services (8 items)
		$services = array(
			array(
				'title'    => 'Oil Change & Filter Service',
				'desc'     => 'Complete synthetic or conventional engine oil drain and refill with genuine OEM filter replacement and 21-point safety inspection.',
				'type'     => 'starting_from',
				'from'     => '$45.00',
				'to'       => '',
				'duration' => 45,
				'unit'     => 'mins',
				'featured' => '1',
				'category' => 'Maintenance',
			),
			array(
				'title'    => 'Brake Service & Pad Replacement',
				'desc'     => 'Front and rear ceramic brake pads replacement, rotor inspection/resurfacing, caliper lubrication, and fluid top-off.',
				'type'     => 'starting_from',
				'from'     => '$95.00',
				'to'       => '',
				'duration' => 90,
				'unit'     => 'mins',
				'featured' => '1',
				'category' => 'Repair',
			),
			array(
				'title'    => 'Air Conditioning Recharge & Repair',
				'desc'     => 'R134a/R1234yf freon recharge, UV leak detection, compressor clutch check, and cabin pollen filter replacement.',
				'type'     => 'range',
				'from'     => '$60.00',
				'to'       => '$140.00',
				'duration' => 60,
				'unit'     => 'mins',
				'featured' => '1',
				'category' => 'AC',
			),
			array(
				'title'    => 'Computerized Engine Diagnostics',
				'desc'     => 'OBD-II comprehensive digital scanner diagnostics, fault code analysis, sensor tests, and clear explanation of check engine lights.',
				'type'     => 'fixed',
				'from'     => '$40.00',
				'to'       => '',
				'duration' => 30,
				'unit'     => 'mins',
				'featured' => '1',
				'category' => 'Inspection',
			),
			array(
				'title'    => 'Battery Testing & Replacement',
				'desc'     => 'Cold-cranking amp (CCA) load test, alternator output check, cable terminal de-corrosion, and AGM/Lead-Acid battery replacement.',
				'type'     => 'starting_from',
				'from'     => '$85.00',
				'to'       => '',
				'duration' => 30,
				'unit'     => 'mins',
				'featured' => '1',
				'category' => 'Electrical',
			),
			array(
				'title'    => 'Tire Service & High-Speed Balancing',
				'desc'     => 'Tire mounting, computerized dynamic wheel balancing, rotation pattern execution, and precision tread depth analysis.',
				'type'     => 'starting_from',
				'from'     => '$50.00',
				'to'       => '',
				'duration' => 45,
				'unit'     => 'mins',
				'featured' => '0',
				'category' => 'Maintenance',
			),
			array(
				'title'    => '3D Laser Wheel Alignment',
				'desc'     => 'Computerized four-wheel camber, caster, and toe angle calibration to OEM factory specifications for even tire wear.',
				'type'     => 'fixed',
				'from'     => '$65.00',
				'to'       => '',
				'duration' => 60,
				'unit'     => 'mins',
				'featured' => '0',
				'category' => 'Maintenance',
			),
			array(
				'title'    => 'Complete Car Detailing & Paint Protection',
				'desc'     => 'Multi-stage foam wash, clay bar decontamination, paint polish, ceramic sealant coating, and deep interior steam cleaning.',
				'type'     => 'starting_from',
				'from'     => '$120.00',
				'to'       => '',
				'duration' => 120,
				'unit'     => 'mins',
				'featured' => '0',
				'category' => 'Detailing',
			),
		);

		foreach ( $services as $s ) {
			$post_id = wp_insert_post(
				array(
					'post_title'   => $s['title'],
					'post_content' => $s['desc'],
					'post_excerpt' => $s['desc'],
					'post_status'  => 'publish',
					'post_type'    => 'service',
				)
			);
			if ( $post_id && ! is_wp_error( $post_id ) ) {
				update_post_meta( $post_id, '_serviceflow_price_type', $s['type'] );
				update_post_meta( $post_id, '_serviceflow_price_from', $s['from'] );
				update_post_meta( $post_id, '_serviceflow_price_to', $s['to'] );
				update_post_meta( $post_id, '_serviceflow_duration', $s['duration'] );
				update_post_meta( $post_id, '_serviceflow_duration_unit', $s['unit'] );
				update_post_meta( $post_id, '_serviceflow_featured', $s['featured'] );

				if ( isset( $cat_ids[ $s['category'] ] ) ) {
					wp_set_object_terms( $post_id, array( $cat_ids[ $s['category'] ] ), 'service_category' );
				}
				$created++;
			}
		}

		// 3. Team Members (4 items)
		$team = array(
			array(
				'name'          => 'Robert Hansen',
				'position'      => 'Workshop Manager',
				'experience'    => '16 years experience',
				'certification' => 'ASE Master Technician, Shop Operations Specialist',
			),
			array(
				'name'          => 'Alex Ramirez',
				'position'      => 'Senior Diagnostic Technician',
				'experience'    => '12 years experience',
				'certification' => 'Advanced Engine Performance (L1), OBD-II Master',
			),
			array(
				'name'          => 'James Cooper',
				'position'      => 'Brake & Suspension Specialist',
				'experience'    => '10 years experience',
				'certification' => 'Chassis Specialist, 3D Laser Alignment Certified',
			),
			array(
				'name'          => 'Elena Vance',
				'position'      => 'Lead Service Advisor',
				'experience'    => '8 years experience',
				'certification' => 'Certified Automotive Service Consultant (C1)',
			),
		);

		foreach ( $team as $t ) {
			$post_id = wp_insert_post(
				array(
					'post_title'  => $t['name'],
					'post_status' => 'publish',
					'post_type'   => 'team_member',
				)
			);
			if ( $post_id && ! is_wp_error( $post_id ) ) {
				update_post_meta( $post_id, '_serviceflow_position', $t['position'] );
				update_post_meta( $post_id, '_serviceflow_experience', $t['experience'] );
				update_post_meta( $post_id, '_serviceflow_certification', $t['certification'] );
				$created++;
			}
		}

		// 4. Testimonials (5 items)
		$testimonials = array(
			array(
				'name'    => 'David Miller',
				'quote'   => 'Best auto shop in town. They diagnosed a tricky brake vibration within 30 minutes, quoted me fairly, and had the car back to me before the afternoon. Completely honest mechanics.',
				'vehicle' => 'Toyota Camry 2020',
				'service' => 'Brake Service & Pad Replacement',
				'rating'  => 5,
			),
			array(
				'name'    => 'Sarah Jenkins',
				'quote'   => 'Booking through WhatsApp was super smooth. The AC in my SUV was blowing warm air in summer heat. They flushed the lines and refilled freon same day. Freezing cold now!',
				'vehicle' => 'Ford Explorer 2019',
				'service' => 'Air Conditioning Recharge',
				'rating'  => 5,
			),
			array(
				'name'    => 'Marcus Chen',
				'quote'   => 'The price calculator gave me an estimate of $45 for synthetic oil, and that was the exact total on my invoice. No upselling, no fake fees. I am a customer for life.',
				'vehicle' => 'Honda Accord 2021',
				'service' => 'Oil Change & Filter',
				'rating'  => 5,
			),
			array(
				'name'    => 'Lisa Rodriguez',
				'quote'   => 'My battery died unexpectedly in the morning. AutoCare tested my alternator, installed an OEM battery with a 2-year warranty in 25 minutes. Phenomenal service.',
				'vehicle' => 'Nissan Rogue 2018',
				'service' => 'Battery Testing & Replacement',
				'rating'  => 5,
			),
			array(
				'name'    => 'Tom Harrison',
				'quote'   => 'Honest technicians who show you the worn parts in person. The wheel alignment transformed the handling of my truck. Highly recommend them to anyone.',
				'vehicle' => 'Chevrolet Silverado',
				'service' => 'Wheel Alignment & Tire Balance',
				'rating'  => 5,
			),
		);

		foreach ( $testimonials as $test ) {
			$post_id = wp_insert_post(
				array(
					'post_title'   => $test['name'],
					'post_content' => $test['quote'],
					'post_status'  => 'publish',
					'post_type'    => 'testimonial',
				)
			);
			if ( $post_id && ! is_wp_error( $post_id ) ) {
				update_post_meta( $post_id, '_serviceflow_rating', $test['rating'] );
				update_post_meta( $post_id, '_serviceflow_vehicle', $test['vehicle'] );
				update_post_meta( $post_id, '_serviceflow_service', $test['service'] );
				$created++;
			}
		}

		// 5. Service Areas (5 items)
		$areas = array(
			array(
				'name'   => 'Downtown & Central',
				'city'   => 'North Valley',
				'region' => 'California',
				'desc'   => 'Only 10 minutes from city center. Complimentary morning customer shuttle to downtown business district.',
			),
			array(
				'name'   => 'North Valley & Heights',
				'city'   => 'North Valley',
				'region' => 'California',
				'desc'   => 'Direct highway access via Exit 14. Dedicated spacious customer parking and quick-turn bay.',
			),
			array(
				'name'   => 'South Suburbs & Westside',
				'city'   => 'Westville',
				'region' => 'California',
				'desc'   => 'Serving all southwestern communities with quick emergency roadside diagnostic towing.',
			),
			array(
				'name'   => 'East Metro Industrial Hub',
				'city'   => 'East Valley',
				'region' => 'California',
				'desc'   => 'Commercial fleet maintenance and private vehicle repairs for industrial park employees.',
			),
			array(
				'name'   => 'Uptown Business Corridor',
				'city'   => 'North Valley',
				'region' => 'California',
				'desc'   => 'Drop your keys before work and pick up your road-tested, washed car at the end of the day.',
			),
		);

		foreach ( $areas as $a ) {
			$post_id = wp_insert_post(
				array(
					'post_title'   => $a['name'],
					'post_content' => $a['desc'],
					'post_excerpt' => $a['desc'],
					'post_status'  => 'publish',
					'post_type'    => 'service_area',
				)
			);
			if ( $post_id && ! is_wp_error( $post_id ) ) {
				update_post_meta( $post_id, '_serviceflow_city', $a['city'] );
				update_post_meta( $post_id, '_serviceflow_region', $a['region'] );
				$created++;
			}
		}

		// 6. FAQs (10 items)
		$faqs = array(
			'Do I need an appointment or can I walk in?'          => 'Walk-ins are always welcome for routine oil changes, battery testing, and bulb replacements. For comprehensive diagnostics and major repairs, we recommend booking online or messaging us on WhatsApp to guarantee same-day turnaround.',
			'How accurate is the online price estimate?'         => 'Our price calculator reflects our exact labor rates and standard OEM-grade part prices for common vehicle classes. Once your car is on the lift, we verify part fitment. If any unforeseen issue is found, we call you for written approval before performing any extra work.',
			'What warranty do you provide on repairs?'           => 'All our repairs and installed replacement parts are backed by a 12-month or 20,000-kilometer nationwide warranty, whichever comes first. If a part fails under normal driving conditions, we replace it at no labor charge.',
			'How long does a standard full service take?'        => 'A standard synthetic oil change and 21-point safety inspection takes between 45 and 60 minutes. Brake pad replacements take around 90 minutes. You can relax in our waiting lounge with free Wi-Fi and coffee or drop off your keys.',
			'Which payment methods do you accept?'               => 'We accept all major credit and debit cards (Visa, MasterCard, Amex), mobile payments (Apple Pay, Google Pay), bank transfers, and cash.',
			'Do you use original OEM replacement parts?'         => 'Yes, we exclusively install genuine manufacturer OEM parts or premium OEM-equivalent brands (Bosch, Brembo, Denso) with full manufacturer warranty coverage.',
			'Can you service hybrid and electric vehicles?'      => 'Yes, our technicians are certified in high-voltage safety and hybrid drive systems including Toyota, Honda, and Tesla regenerative braking and battery cooling systems.',
			'Do you provide towing or roadside pickup?'          => 'Yes, we coordinate with local flatbed towing partners. If your vehicle cannot be safely driven, call our service advisor for rapid dispatch.',
			'Will my vehicle manufacturer warranty remain valid?' => 'Yes. By law, scheduled servicing at an independent certified workshop with OEM parts protects and maintains your factory manufacturer warranty.',
			'Do you offer courtesy cars or customer drop-off?'   => 'We offer a complimentary morning drop-off shuttle to downtown offices and metro transit stations while your vehicle is being worked on.',
		);

		foreach ( $faqs as $q => $ans ) {
			$post_id = wp_insert_post(
				array(
					'post_title'   => $q,
					'post_content' => $ans,
					'post_status'  => 'publish',
					'post_type'    => 'faq',
				)
			);
			if ( $post_id && ! is_wp_error( $post_id ) ) {
				$created++;
			}
		}

		// 7. Ensure default business settings are seeded
		$settings = BusinessSettings::get_all();
		update_option( BusinessSettings::OPTION_KEY, $settings );

		return $created;
	}
}
