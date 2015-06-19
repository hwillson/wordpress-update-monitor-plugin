=== Update Monitor ===

Contributors: hwillson
Tags: plugins, updates, monitor
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0
License: MIT
License URI: http://opensource.org/licenses/MIT

WordPress plugin that gathers and tracks pending WordPress core / plugin update details.

== Description ==

WordPress plugin that gathers and tracks pending WordPress core / plugin update details. These details are sent as JSON to a third party endpoint for handling, on a scheduled basis (leveraging WP's cron).

== Installation ==

1. git clone https://github.com/hwillson/wordpress-update-monitor-plugin.git.
2. Copy or symlink ./update-monitor/plugin into your /wp-content/plugins directory.
3. Activate the plugin via the WordPress admin.
4. Access X in the admin to verify it's working.

== Frequently Asked Questions ==

= Why? =

Keeping track of pending WordPress core/plugin updates across multiple WordPress installs can be a real pain. This plugin prepares and sends update details to a third party monitoring system, making it easy to keep track of pending updates.

== Screenshots ==

1. TODO.

== Changelog ==

= 0.0.1 =
* Dev started.
