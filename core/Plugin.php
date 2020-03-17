<?php

namespace StaxWoocommerce;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class Plugin
 * @package StaxWoocommerce
 */
class Plugin {

	/**
	 * @var null
	 */
	public static $instance;

	/**
	 * @return Plugin|null
	 */
	public static function instance() {
		if ( self::$instance === null ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Plugin constructor.
	 */
	public function __construct() {
		require_once STAX_WOO_CORE_PATH . '/Utils.php';
		require_once STAX_WOO_CORE_PATH . '/StaxWidgets.php';

		// Admin pages
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Base.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Dashboard.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Widgets.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Plugins.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Modules.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Templates.php';
		require_once STAX_WOO_CORE_PATH . '/admin/pages/Help.php';

		require_once STAX_WOO_CORE_PATH . '/admin/Settings.php';

		// Enhancements

		// Extra

		add_action( 'admin_footer', function () {
			if ( isset( $_GET['page'] ) && strpos( $_GET['page'], STAX_WOO_SLUG_PREFIX ) !== false ):
				?>
                <script type="text/javascript">!function (e, t, n) {
                        function a() {
                            var e = t.getElementsByTagName("script")[0], n = t.createElement("script");
                            n.type = "text/javascript", n.async = !0, n.src = "https://beacon-v2.helpscout.net", e.parentNode.insertBefore(n, e)
                        }

                        if (e.Beacon = n = function (t, n, a) {
                            e.Beacon.readyQueue.push({method: t, options: n, data: a})
                        }, n.readyQueue = [], "complete" === t.readyState) return a();
                        e.attachEvent ? e.attachEvent("onload", a) : e.addEventListener("load", a, !1)
                    }(window, document, window.Beacon || function () {
                    });</script>
                <script type="text/javascript">window.Beacon('init', '1b5e8cdd-8c69-499a-add2-c73fd404ed5e')</script>
			<?php endif;
		} );
	}

	/**
	 * Get plugin slug
	 *
	 * @return string
	 */
	public function get_slug() {
		return STAX_WOO_SLUG_PREFIX . 'woocommerce';
	}

	/**
	 * Check if current page is
	 *
	 * @param $page
	 *
	 * @return bool
	 */
	public function is_current_page( $page ) {
		$page = STAX_WOO_SLUG_PREFIX . $page;

		return isset( $_GET['page'] ) && $_GET['page'] === $page;
	}

}

Plugin::instance();
