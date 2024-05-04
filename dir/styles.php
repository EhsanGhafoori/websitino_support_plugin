<?php
// Load the theme stylesheets
function websitinu_theme_styles_Sidebar()  
{   
    wp_enqueue_style('websitinoStyleFont', plugin_dir_url(__DIR__) . 'assets/css/fonts.css');
    wp_enqueue_style('websitinoStyle', plugin_dir_url(__DIR__) . 'assets/css/style.css', '', '14');
	wp_enqueue_style('websitinoStyleSidebar', plugin_dir_url(__DIR__) . 'assets/css/adminStyle.css' );
	
}

// add_action('admin_head', 'websitinu_theme_styles_Sidebar');
add_action( 'admin_enqueue_scripts', 'websitinu_theme_styles_Sidebar', 10 );
// MENU

