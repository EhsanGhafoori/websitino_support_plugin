<?php
require_once plugin_dir_path(__FILE__) . "styles.php";
require_once plugin_dir_path(__FILE__) . "loginStyle.php";
require_once plugin_dir_path(__FILE__) . "footer.php";

require_once plugin_dir_path(__FILE__) . "first-page.php";

function websitinu_custom_css()
{
	echo '<style>
div#llar-header-upgrade-message {
    display: none;
}
</style>';
}
add_action('admin_head', 'websitinu_custom_css');

function websitinu_remove_admin_footer()
{
?>
	<style>
		@font-face {
			font-family: Righteous-Regular;
			font-style: normal;
			font-weight: 500;
			src: url('/wp-content/plugins/websitinu_support_plugin-main/assets/fonts/ttf/Righteous-Regular.ttf');
			src: url('/wp-content/plugins/websitinu_support_plugin-main/assets/fonts/ttf/Righteous-Regular?#iefix') format('embedded-opentype');
		}

		.Righteous-Regular {
			font-family: Righteous-Regular !important;
		}
	</style>
	<span id="footer-websitinu-th">
	<?php
		if (get_bloginfo("language") == 'en-US') {
			echo ('	<span id="footer-websitinu-th">
			<?php _e("Thank you for creating with", "websitinu") ?>
			<a style="color: #000; font-family:Righteous-Regular ; text-decoration:none;" target="_blank" href="https://websitinu.com/"><?php _e("Websitinu", "websitinu") ?></a>.
		</span>');
		} else {
			echo ('<span id="footer-websitinu-th" class="IRANSansWeb_Bold">سپاسگزاریم از اینکه سایت خود را با <a href="https://websitinu.com/" class="iranyekanwebbold">وبسایتینو</a> ساخته‌اید.');
		}
		?>

<?php
}
add_filter('admin_footer_text', 'websitinu_remove_admin_footer');

// add style



// Load the theme stylesheets
function websitinu_theme_styles()
{
	wp_enqueue_style('websitinoStyleFont', plugin_dir_url(__DIR__) . 'assets/css/fonts.css');
	wp_enqueue_style('bootstrapCss', plugin_dir_url(__DIR__) . 'assets/css/bootstrap.min.css');
	wp_style_add_data('bootstrapCss', 'rtl', plugin_dir_url(__DIR__) . 'assets/css/bootstrap.rtl.min.css');

	wp_enqueue_style('bootstrapFeatures', plugin_dir_url(__DIR__) . 'assets/css/features.css');
	wp_enqueue_style('websitinoStyle', plugin_dir_url(__DIR__) . 'assets/css/style.css');
}
add_action('wp_enqueue_style', 'websitinu_theme_styles');

function websitinu_theme_scripts()
{

	wp_enqueue_style('bootstrapJs', plugin_dir_url(__DIR__) . 'assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'websitinu_theme_scripts');

add_action('admin_head', 'websitinu_theme_styles');
// MENU




function author_add_meta_tags()
{

	echo '<meta name="author" content="Ehsan Ghafoori" />' . "\n";
}


add_action('wp_head', 'author_add_meta_tags');
