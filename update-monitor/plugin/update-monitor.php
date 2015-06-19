<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           Update_Monitor
 *
 * @wordpress-plugin
 * Plugin Name:       Update Monitor
 * Plugin URI:        TODO
 * Description:       WordPress plugin that gathers and tracks pending WordPress core / plugin update details.
 * Version:           0.0.1
 * Author:            Hugh Willson (Octonary Inc.)
 * Author URI:        TODO
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Text Domain:       Update_Monitor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-update-monitor-activator.php
 */
function activate_update_monitor() {
  require_once plugin_dir_path( __FILE__ )
    . 'includes/class-update-monitor-activator.php';
  Update_Monitor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-update-monitor-deactivator.php
 */
function deactivate_update_monitor() {
  require_once plugin_dir_path( __FILE__ )
    . 'includes/class-update-monitor-deactivator.php';
  Update_Monitor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_update_monitor' );
register_deactivation_hook( __FILE__, 'deactivate_update_monitor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-update-monitor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 */
function run_update_monitor() {

  $plugin = new Update_Monitor();
  $plugin->run();

}
run_update_monitor();
