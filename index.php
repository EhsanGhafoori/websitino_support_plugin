<?php

/*
 * Plugin Name: Websitino
 * Description: A comprehensive plugin to support your website and also guarantee the security of WordPress websites with legal Persian fonts (if the plugin is disabled, the security of the website is not guaranteed)
 * Version: 1.0.0.5
 * Plugin URI: https://websitino.com
 * Author URI: https://www.websitino.com/
 * Author: Ehsan Ghafoori
 * Text Domain: Websitino
 * Requires PHP: 5.5
 * Domain Path: /languages
 * Update URI: https://websitino.ir/
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


defined( 'ABSPATH' ) || exit; // Exit if accessed directly



/**
 * @author Websitino
 */
require_once plugin_dir_path( __FILE__ ) . "dir/websitino.php";


     function load_text_domain()
{
	// load_plugin_textdomain('websitino', false, '\lang');
load_plugin_textdomain( 'websitino', false, plugin_basename(dirname(__FILE__, 3)) . "/websitino/languages/" );

};
 add_action('plugins_loaded', 'load_text_domain');