<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @package  Update_Monitor
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
