<?php
/**
 * ServiceFlow theme bootstrap.
 *
 * The theme handles presentation only. Business data (services, booking,
 * contact details…) belongs to the ServiceFlow Core plugin and reaches the
 * theme through filters such as `serviceflow_business_info`.
 *
 * @package ServiceFlow
 */

defined( 'ABSPATH' ) || exit;

define( 'SERVICEFLOW_THEME_VERSION', '0.1.0' );

foreach ( array( 'setup', 'assets', 'bindings', 'breadcrumbs', 'blocks', 'hooks', 'compatibility' ) as $serviceflow_file ) {
	require_once __DIR__ . '/inc/' . $serviceflow_file . '.php';
}
unset( $serviceflow_file );
