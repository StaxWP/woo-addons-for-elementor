<?php
/**
 * Plugin Name: Elementor Woocommerce - Stax
 * Description:
 * Plugin URI: https://staxbuilder.com
 * Author: StaxWP
 * Version: 1.0.0
 * Author URI: https://staxwp.com
 *
 * Text Domain: stax-woocommerce-for-elementor
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'STAX_WOO_VERSION', '1.0.0' );
define( 'STAX_WOO_DOMAIN', 'stax-woocommerce-for-elementor' );
define( 'STAX_WOO_HOOK_PREFIX', 'stax_el_' );
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

/*
 * Localization
 */
function stax_woocommerce_load_plugin_textdomain() {
	load_plugin_textdomain( STAX_WOO_DOMAIN, false, basename( __DIR__ ) . '/languages/' );
}

add_action( 'plugins_loaded', 'stax_woocommerce_load_plugin_textdomain' );

// Init plugin
require_once STAX_WOO_CORE_PATH . 'Plugin.php';
