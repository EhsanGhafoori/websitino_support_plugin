<?php

function menuWebsitino()
{
	add_menu_page(_e('Websitino', 'websitino'), _e('Websitino', 'websitino'), 'manage_options', 'websitino', 'websitino_menu_main_page', plugin_dir_url(__DIR__) . 'assets/img/websitino 20x20_white_stroke.png');
}
add_action('admin_menu', 'menuWebsitino');


//      function load_text_domain()
// {
// 	// load_plugin_textdomain('websitino', false, '\lang');
// load_plugin_textdomain( 'websitino', false, plugin_basename(dirname(__FILE__, 3)) . "/websitino/languages/" );

// };
//  add_action('plugins_loaded', 'load_text_domain');


function websitino_menu_main_page()
{


	//  echo plugin_basename(dirname(__FILE__, 3)) . "/websitino/languages/" ;


	echo ('

<div clas="wrap ">
	<h2 class="mt-4 IRANSansWeb_Bold" style="margin-bottom:8px; font-size: 50px; ">'); 
	_e('Websitino', 'websitino');
	echo (' </h2>

	<div class="wrap" style="  padding: 2px; background-color: #A7F590; /* Green */ color: white; margin-bottom: 15px;"> </div>

</div>

<div class="container px-4 py-5" id="featured-3">
	<h2 class="pb-2 border-bottom iranyekanwebmedium">
		با نصب پلاگین وبسایتینو به راحتی میتوانید از امکانات زیر بهره مند شوید:

	</h2>
	<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
		<div class="feature col">
			<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 ">

				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
					<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
					<path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
				</svg>

			</div>
			<h3 class="fs-2 iranyekanwebbold text-body-emphasis">
				درخواست پشتیبانی آنلاین
			</h3>
			<p>
				در آخرین نسخه پلاگین وبسایتینو قابلیت چت آنلاین اضافه شده که میتوانید به صورت مستقیم درخواست پشتیبانی خود را ارسال نمایید.
			</p>

		</div>
		<div class="feature col">
			<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 ">

				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-fingerprint" viewBox="0 0 16 16">
					<path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z" />
					<path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z" />
					<path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z" />
					<path d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z" />
					<path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49" />
				</svg>
			</div>
			<h3 class="fs-2 iranyekanwebbold text-body-emphasis">تامین امنیت</h3>
			<p>
				کد گذاری فابل های مهم، تغییر صفحه اصلی ورود سایت به آدرس یونیک ، ویرایش فایل های HTACCESS.
			</p>

		</div>
		<div class="feature col">
			<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
					<path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
					<path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396z" />
				</svg>
			</div>
			<h3 class="fs-2 iranyekanwebbold text-body-emphasis">بوت استرپ</h3>
			<p>
				آخرین ورژن از بوت استرپ برای شما در دسترس است و نیازی به هیچ افزونه دیگری ندارید .
			</p>

		</div>
	</div>
	<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

		<div class="feature col">
			<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-font" viewBox="0 0 16 16">
					<path d="M10.943 6H5.057L5 8h.5c.18-1.096.356-1.192 1.694-1.235l.293-.01v5.09c0 .47-.1.582-.898.655v.5H9.41v-.5c-.803-.073-.903-.184-.903-.654V6.755l.298.01c1.338.043 1.514.14 1.694 1.235h.5l-.057-2z" />
					<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
				</svg>
			</div>
			<h3 class="fs-2 iranyekanwebbold text-body-emphasis">
			فونت اختصاصی
 		</h3>
			<p>
				فونت های اختصاصی که بسیار شیک و جذاب هستند را با لایسنس قانونی در اختیار شما عزیزان قرار می دهیم .
			</p>

		</div>

		<div class="feature col">
			<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">


				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
					<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
				</svg>
			</div>
			<h3 class="fs-2 iranyekanwebbold text-body-emphasis">فرم لاگین جذاب</h3>
			<p>
				بعد از نصب افزونه وبسایتینو شما از فرم ورود بسیار جذاب با طراحی سایت خودتان برخوردار خواهید شد.
			</p>

		</div>
	</div>
	<p class="border-top pt-3">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
		</svg>

		این پلاگین با حجم بسیار پایین (زیر 1 مگابایت)، سرعتی بسیار بالا و هماهنگ با جدیدترین نسخه وردپرس عرضه شده است.
	</p>
	<script type="text/javascript">
		! function() {
			var i = "sC7Yk5",
				a = window,
				d = document;

			function g() {
				var g = d.createElement("script"),
					s = "https://www.goftino.com/widget/" + i,
					l = localStorage.getItem("goftino_" + i);
				g.async = !0, g.src = l ? s + "?o=" + l : s;
				d.getElementsByTagName("head")[0].appendChild(g);
			}
			"complete" === d.readyState ? g() : a.attachEvent ? a.attachEvent("onload", g) : a.addEventListener("load", g, !1);
		}();
	</script>
</div>
	');
}
