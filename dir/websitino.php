<?php
require_once plugin_dir_path( __FILE__ ) . "styles.php";
require_once plugin_dir_path( __FILE__ ) . "loginStyle.php";
require_once plugin_dir_path( __FILE__ ) . "footer.php";

require_once plugin_dir_path( __FILE__ ) . "first-page.php";

function websitino_custom_css() {   echo '<style>
div#llar-header-upgrade-message {
    display: none;
}
</style>'; 
} 
add_action('admin_head', 'websitino_custom_css');

function websitino_remove_admin_footer(){
echo '<span id="footer-websitino-th">سپاسگزاریم از اینکه سایت خود را با <a href="https://websitino.com/">وبسایتینو</a> ساخته‌اید.</span>';
}
add_filter('admin_footer_text', 'websitino_remove_admin_footer');

// add style



// Load the theme stylesheets
function websitino_theme_styles()  
{ 
	wp_enqueue_style( 'websitinoStyleFont', plugin_dir_url(__DIR__) . 'assets/css/fonts.css' );
	wp_enqueue_style( 'bootstrapCss', plugin_dir_url(__DIR__) . 'assets/css/bootstrap.min.css' );
    wp_style_add_data( 'bootstrapCss', 'rtl', plugin_dir_url(__DIR__) . 'assets/css/bootstrap.rtl.min.css' );
    
	wp_enqueue_style( 'bootstrapFeatures', plugin_dir_url(__DIR__) . 'assets/css/features.css' );
	wp_enqueue_style( 'websitinoStyle', plugin_dir_url(__DIR__) . 'assets/css/style.css' );

}
add_action('wp_enqueue_style', 'websitino_theme_styles');

function websitino_theme_scripts()  
{ 

	wp_enqueue_style( 'bootstrapJs', plugin_dir_url(__DIR__) . 'assets/js/bootstrap.bundle.min.js' );


}
add_action('wp_enqueue_scripts', 'websitino_theme_scripts');

add_action('admin_head', 'websitino_theme_styles');
// MENU




function author_add_meta_tags()
{

    echo '<meta name="author" content="Ehsan Ghafoori" />'. "\n";
}


add_action('wp_head', 'author_add_meta_tags');