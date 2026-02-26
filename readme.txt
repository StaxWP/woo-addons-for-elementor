=== Stax Addons for WooCommerce and Elementor ===
Contributors: staxwp, codezz, geowrge, rtynio
Tags: woocommerce widgets, product grid, product gallery, elementor addons, woocommerce elementor
Requires at least: 5.0
Requires PHP: 7.4
Tested up to: 6.9
Stable tag: 1.2.2
Requires Plugins: elementor, woocommerce
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Lightweight WooCommerce widgets for Elementor — product grids, image galleries, and more. Fast, modular, zero bloat.

== Description ==

**Stax Addons for WooCommerce and Elementor** gives you powerful WooCommerce widgets inside the Elementor page builder. Display products, product images, and more — without bloating your site.

= Why Stax? =

* **Lightweight & Fast** — Assets (CSS & JS) are loaded only when a widget is actually used on the page. No unnecessary bloat.
* **Modular** — Enable only the widgets you need from the settings panel. Keep your Elementor editor clean and fast.
* **Easy to Use** — Drag, drop, and customize. No coding required.

= WooCommerce Widgets for Elementor =

* **Product Grid / Product List** — Showcase your WooCommerce products with advanced layout options, custom columns, sorting, and filtering. Perfect for shop pages, landing pages, and product showcases.
* **Product Images Gallery** — Display WooCommerce product images on single product pages with a clean, customizable gallery layout.

= Who Is This For? =

* WooCommerce store owners who use Elementor to build their pages
* Designers and developers who want lightweight WooCommerce widgets without heavy multipurpose plugins
* Anyone looking to create custom product displays beyond the default WooCommerce layout

= Performance First =

Unlike heavy all-in-one addons that load dozens of scripts on every page, Stax only loads assets for widgets you actually use. Your PageSpeed score stays high.

= More from StaxWP =

* [Stax Addons for Elementor](https://wordpress.org/plugins/stax-addons-for-elementor/) — 20+ free widgets for Elementor
* [BuddyBuilder](https://staxwp.com/go/buddybuilder) — BuddyPress builder for Elementor
* [Visibility Logic](https://wordpress.org/plugins/visibility-logic-elementor/) — Show/hide Elementor widgets based on conditions

= Third-Party Services =

This plugin uses [Appsero](https://appsero.com/) SDK to collect optional, anonymized telemetry data upon user confirmation. This helps us troubleshoot issues faster and improve the plugin. See the [Appsero Privacy Policy](https://appsero.com/privacy-policy/).

== Installation ==

1. Make sure **WooCommerce** and **Elementor** are installed and active.
2. Upload the plugin to your `wp-content/plugins` directory, or install it directly from the WordPress plugin directory.
3. Activate the plugin from the Plugins page.
4. Edit any page with Elementor — you'll find the new WooCommerce widgets in the **Stax** category in the widget panel.

== Frequently Asked Questions ==

= Where can I find the Stax WooCommerce widgets in Elementor? =

Open any page with Elementor, and look for the **Stax** category in the widget panel on the left side. All WooCommerce widgets from this plugin are grouped there.

= Will this slow down my site? =

No. The plugin only loads CSS and JavaScript for widgets that are actively used on the page. If a widget isn't on the page, its assets are not loaded at all.

= Does this work with the free version of Elementor? =

Yes. Stax Addons for WooCommerce and Elementor works with both the free and Pro versions of Elementor.

= Is WooCommerce required? =

Yes. This plugin extends WooCommerce with Elementor widgets, so both WooCommerce and Elementor must be installed and active.

= Can I use this alongside other Elementor addons? =

Absolutely. The plugin is designed to be lightweight and conflict-free. It works alongside other Elementor addon plugins without issues.

= Can I disable widgets I don't use? =

Yes. Go to the Stax WooCommerce settings page in your WordPress admin to enable or disable individual widgets.

== Changelog ==

= 1.2.1 =
* Fixed compatibility with Elementor 3.5+ (updated widget registration API)

= 1.2.0 =
* Renamed plugin for WordPress.org guidelines compliance
* Added Requires Plugins header for Elementor and WooCommerce dependencies
* Removed load_plugin_textdomain (handled by WordPress since 4.6)
* Fixed missing text domain in translation strings
* Added direct file access protection to template files
* Updated Appsero SDK to v2.0
* Added composer.json
* Bumped minimum PHP to 7.4

= 1.1.0 =
* Integrate Appsero and add extra security checks

= 1.0.0 =
* Initial release
