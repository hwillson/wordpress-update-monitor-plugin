<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package  Update_Monitor
 */
class Update_Monitor_Admin {

  /**
   * The ID of this plugin.
   *
   * @access  private
   * @var  string  $plugin_name  The ID of this plugin.
   */
  private $plugin_name;

  /**
   * The version of this plugin.
   *
   * @access  private
   * @var  string  $version  The current version of this plugin.
   */
  private $version;

  /**
   * Initialize the class and set its properties.
   *
   * @param  string  $plugin_name  The name of this plugin.
   * @param  string  $version  The version of this plugin.
   */
  public function __construct($plugin_name, $version) {
    $this->plugin_name = $plugin_name;
    $this->version = $version;
  }

  /**
   * Register the stylesheets for the admin area.
   */
  public function enqueue_styles() {
    wp_enqueue_style(
      $this->plugin_name,
      plugin_dir_url(__FILE__) . 'css/update-monitor-admin.css',
      array(),
      $this->version,
      'all'
    );
  }

  /**
   * Register the JavaScript for the admin area.
   */
  public function enqueue_scripts() {
    wp_enqueue_script(
      $this->plugin_name,
      plugin_dir_url(__FILE__) . 'js/update-monitor-admin.js',
      array('jquery'),
      $this->version,
      false
    );
  }

  /**
   * Add submenu to Settings menu.
   */
  public function add_settings_submenu() {
    add_options_page(
      'Update Monitor Settings',
      'Update Monitor',
      'manage_options',
      'update-monitor-menu',
      array($this, 'update_monitor_page')
    );
  }

  /**
   * Generate the admin settings page.
   */
  public function update_monitor_page() {
    //$plugins = json_encode(get_plugins(), JSON_PRETTY_PRINT);
    $plugins = print_r(get_plugins(), true);
    require_once plugin_dir_path(__FILE__)
      . 'partials/update-monitor-admin-display.php';
  }

}
