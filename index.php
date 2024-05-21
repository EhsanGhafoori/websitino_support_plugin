<?php

/*
 * Plugin Name: Websitinu
 * Description: A comprehensive plugin to support your website and also guarantee the security of WordPress websites with legal Persian fonts (if the plugin is disabled, the security of the website is not guaranteed)
 * Version: 1.0.0.6
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


/**
 * Load plugin textdomain.
 */
add_action( 'plugins_loaded', 'wpdocs_load_textdomain' );
 add_action( 'init', 'wpdocs_load_textdomain' );
 
function wpdocs_load_textdomain() {
     load_plugin_textdomain( 'websitinu', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
    
}