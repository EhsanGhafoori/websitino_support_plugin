<?php

/*
 * Plugin Name: Websitinu
 * Description: A comprehensive plugin to support your website and also guarantee the security of WordPress websites with legal Persian fonts (if the plugin is disabled, the security of the website is not guaranteed)
 * Version: 1.0.0.5
 * Plugin URI: https://websitinu.com
 * Author URI: https://www.websitinu.com/
 * Author: Ehsan Ghafoori
 * Text Domain: Websitinu
 * Requires PHP: 5.5
 * Domain Path: /languages
 * Update URI: https://websitinu.ir/
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


defined( 'ABSPATH' ) || exit; // Exit if accessed directly



/**
 * @author Websitinu
 */
require_once plugin_dir_path( __FILE__ ) . "dir/websitinu.php";


     function load_text_domain()
{
	// load_plugin_textdomain('websitinu', false, '\lang');
$aa = load_plugin_textdomain( 'websitinu', false, plugin_basename(dirname(__FILE__, 3)) . "/websitinu_support_plugin/languages/" );
var_dump($aa);

};
 add_action('plugins_loaded', 'load_text_domain');