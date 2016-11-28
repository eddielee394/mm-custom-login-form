<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://tutorialonline.net/
 * @since             1.0.0
 * @package           Mm_Sc
 *
 * @wordpress-plugin
 * Plugin Name:       Membermouse Shortcode
 * Plugin URI:        http://tutorialonline.net/
 * Description:       Login form shortcode for Membermouse
 * Version:           1.0.0
 * Author:            Yamen Shahin
 * Author URI:        http://tutorialonline.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mm-sc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mm-sc-activator.php
 */
function activate_mm_sc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mm-sc-activator.php';
	Mm_Sc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mm-sc-deactivator.php
 */
function deactivate_mm_sc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mm-sc-deactivator.php';
	Mm_Sc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mm_sc' );
register_deactivation_hook( __FILE__, 'deactivate_mm_sc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mm-sc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mm_sc() {

	$plugin = new Mm_Sc();
	$plugin->run();

}
run_mm_sc();
