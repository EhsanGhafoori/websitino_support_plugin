<?php
function websitinu_theme_styles_Login()  
{ 
	wp_enqueue_style( 'websitinoStyleLogin', plugin_dir_url(__DIR__) . 'assets/css/loginStyle.css' );

}
add_action( 'login_enqueue_scripts', 'websitinu_theme_styles_Login', 10 );

function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            display: none;
        }
    </style>
   <a style="text-decoration:none; color:#3c434a;" href="<?php echo site_url() ?>" > <h1 class="login" style="padding-top: 5% ; padding-bottom: 20px;  font-size: 60px; font-family: IRANYekanWebBlack !important;" > <?php echo get_bloginfo(); ?> </h1> </a>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');


function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'Websitinu Wordpress';
}
add_filter('login_headertext', 'my_login_logo_url_title');
    // <style type="text/css">
    //     #login h1 a,
    //     .login h1 a {
    //         background-image: url(<?php echo get_stylesheet_directory_uri(); /../../plugins/websitinu/assets/img/websitinu.png);
    //         height: 100px;
    //         width: 100px;
    //         background-size: 100px 100px;
    //         background-repeat: no-repeat;

    //     
    // </style>


	
add_filter( 'login_display_language_dropdown', '__return_false' );
