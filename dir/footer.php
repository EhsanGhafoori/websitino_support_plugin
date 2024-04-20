<?php

// footer

function websitino_footer_first_page()
{
?>
    <p class="footer-container text-center" style=" border-top: 1px solid rgba(255,255,255,0.15); color:rgba(255,255,255,0.8); padding-bottom:10px; padding-top:10px; margin-bottom:0px;">

        تمامی حقوق برای
        <a href="<?php echo site_url() ?>">
            <span style="color: #ffffff;"><?php echo get_bloginfo(); ?>
            </span>
        </a>
        محفوظ است.


        طراحی شده توسط
        <span style="color: #ffffff; ">
            <a style="color: #ffffff;" href="https://www.websitino.com/" target="_blank" rel="noopener">
                وبسایتینو
            </a>
        </span>
        © 2021
    </p>
<?php

}
add_action('wp_footer', 'websitino_footer_first_page');
