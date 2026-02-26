<?php
/**
 * Plugin Name: Stax Addons for WooCommerce and Elementor
 * Description: WooCommerce Addons and Widgets for Elementor builder
 * Plugin URI: https://staxwp.com/elementor/woocommerce-addons-widgets/
 * Author: StaxWP
 * Version: 1.2.2
 * Author URI: https://staxwp.com
 * Requires Plugins: elementor, woocommerce
 *
 * Elementor tested up to: 3.14.1
 * Elementor Pro tested up to: 3.14.1
 *
 * License: GPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * Text Domain: stax-woo-addons-for-elementor
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'STAX_WOO_VERSION', '1.2.2' );
define( 'STAX_WOO_DOMAIN', 'stax-woo-addons-for-elementor' );
define( 'STAX_WOO_HOOK_PREFIX', 'stax_woocommerce_' );
define( 'STAX_WOO_SLUG_PREFIX', 'stax-woocommerce-' );

define( 'STAX_WOO_FILE', __FILE__ );
define( 'STAX_WOO_PLUGIN_BASE', plugin_basename( STAX_WOO_FILE ) );
define( 'STAX_WOO_PATH', plugin_dir_path( STAX_WOO_FILE ) );
define( 'STAX_WOO_URL', plugins_url( '/', STAX_WOO_FILE ) );
define( 'STAX_WOO_CORE_PATH', STAX_WOO_PATH . 'core/' );
define( 'STAX_WOO_WIDGET_PATH', STAX_WOO_PATH . 'widgets/' );
define( 'STAX_WOO_ENH_PATH', STAX_WOO_PATH . 'enhancements/' );
define( 'STAX_WOO_EXTRA_PATH', STAX_WOO_PATH . 'extra/' );
define( 'STAX_WOO_WIDGET_URL', STAX_WOO_URL . 'widgets/' );
define( 'STAX_WOO_ASSETS_URL', STAX_WOO_URL . 'assets/' );

require __DIR__ . '/vendor/autoload.php';

// Init plugin
require_once STAX_WOO_CORE_PATH . 'Plugin.php';

/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_stax_woo_addons_for_elementor() {

	$client = new Appsero\Client( '80b48872-f803-4f38-888d-dbd72eee1c54', 'Stax Addons for WooCommerce and Elementor', __FILE__ );

	// Active insights
	$client->insights()->init();

}

appsero_init_tracker_stax_woo_addons_for_elementor();
