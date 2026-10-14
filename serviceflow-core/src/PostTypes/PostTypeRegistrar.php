<?php
/**
 * Registers all ServiceFlow Custom Post Types.
 *
 * @package ServiceFlow\Core
 */

namespace ServiceFlow\Core\PostTypes;

defined( 'ABSPATH' ) || exit;

final class PostTypeRegistrar {

	public static function register(): void {
		ServicePostType::register();
		ServiceAreaPostType::register();
		TeamMemberPostType::register();
		TestimonialPostType::register();
		FAQPostType::register();
		ProjectPostType::register();
		BookingRequestPostType::register();
	}
}
