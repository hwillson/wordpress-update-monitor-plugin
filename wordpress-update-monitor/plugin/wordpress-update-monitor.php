<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           Wordpress_Update_Monitor
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Update Monitor
 * Plugin URI:        TODO
 * Description:       Wordpress plugin that gathers and tracks pending Wordpress core / plugin update details.
 * Version:           0.0.1
 * Author:            Hugh Willson (Octonary Inc.)
 * Author URI:        TODO
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Text Domain:       Wordpress_Update_Monitor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
  Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
  Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 */
function run_plugin_name() {

  $plugin = new Plugin_Name();
  $plugin->run();

}
run_plugin_name();
