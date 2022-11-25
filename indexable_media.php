<?php
/*
* Plugin Name: Indexable Media
* Description: Choose if your media can be indexed or not.
* Version: 1.0.0
* Tags: media, robot.txt, crawler, index
* Author: Lionel Bataille
* Author URI: mailto:lionel.bataille@hotmail.com
* Licence: GPL2
* Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: indexable-media
* Domain Path: /languages
*/

if (!defined('ABSPATH') && !defined('WPINC')) {
	exit; // Exit if accessed directly.
}

class Indexable_media {
	public function __construct() {
		// Check if the class doesnt exist yet
		if (!class_exists('Indexable_media_main')) {
			include_once plugin_dir_path(__FILE__) . 'modules/class_indexable_media.php';
		}

		// Add translation for the plugin
		add_action('plugins_loaded', [$this, 'load_plugin_text_domain']);
	}

	public function load_plugin_text_domain() {
		load_plugin_textdomain('indexable-media', FALSE, dirname(plugin_basename(__FILE__)) . '/languages/');
	}
}

new Indexable_media();