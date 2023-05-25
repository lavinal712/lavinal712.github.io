<!DOCTYPE html>
<html lang="zh-CN">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登录 &lsaquo; lavinal homepage &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="stylesheet" id="dashicons-css" href="/wp-includes/css/dashicons.min.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="/wp-includes/css/buttons.min.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="/wp-admin/css/forms.min.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="/wp-admin/css/l10n.min.css?ver=6.2.2" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="/wp-admin/css/login.min.css?ver=6.2.2" type="text/css" media="all">
<style>.forgetmenot input:checked + label {
    background: #505050;
}
#labelTip {
    background-color: #505050;
}
#label {
    color: #505050;
}
#login .submit .button {
    background: #505050;
}


body::before{
	-webkit-backdrop-filter: blur(2px);
	backdrop-filter: blur(2px);
	content:"";
	width:100vw;
	height:100vh;
	display: block;
}</style>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/Sakurairo-2.6.1.1/inc/login.css?2_6_1_1">
<link href="https://fonts.geekzu.org/css?family=Noto+Serif+SC&display=swap" rel="stylesheet">
<style>body{font-family: "Noto Serif SC", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif !important;}</style>
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-cn">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="/">lavinal homepage</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/wordpress/wp-login.php" method="post">
			<p>
				<label for="user_login">用户名或电子邮箱地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密码</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="显示密码">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">记住我</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录">
									<input type="hidden" name="redirect_to" value="http://localhost/wordpress/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="/wp-login.php?action=lostpassword">忘记密码？</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="/">&larr; 返回到lavinal homepage</a>		</p>
			</div>
		            <script type="text/javascript">
                document.body.insertAdjacentHTML("afterbegin", "<div class=\"loading\"><img src=\"https://s.nmxc.ltd/sakurairo_vision/@2.6/basic/login_loading.gif\" width=\"58\" height=\"10\"><\/div>");
                document.head.insertAdjacentHTML("afterbegin", "<style>.show{opacity:1;}.hide{opacity:0;transition: opacity 400ms;}<\/style>");
                const loading = document.querySelector(".loading"),
                 src = "https://s.nmxc.ltd/sakurairo_vision/@2.6/series/login_background.webp",
                    afterLoaded = () => {
                        document.body.style.backgroundImage = `url(${src})`
                        loading.classList.add("hide");
                        loading.classList.remove("show");
                        loading.addEventListener("transitionend", () => {
                            loading.remove()
                        });
                    },
                    img = document.createElement('img')
                img.src = src
                img.addEventListener('load',afterLoaded,{once:true})
                                setTimeout(afterLoaded, 3000)
                document.addEventListener("DOMContentLoaded", ()=>{
                document.querySelector("h1 a").style.backgroundImage = "url('https://s.nmxc.ltd/sakurairo_vision/@2.6/series/login_logo.webp')";
                forgetmenot = document.querySelector(".forgetmenot");
                if (forgetmenot){
                    forgetmenot.outerHTML = '<p class="forgetmenot">记住我<input name="rememberme" id="rememberme" value="forever" type="checkbox"><label for="rememberme" style="float: right;margin-top: 5px;transform: scale(2);margin-right: -10px;"><\/label><\/p>';
                }
                const captchaimg = document.getElementById("captchaimg");
                captchaimg && captchaimg.addEventListener("click",(e)=>{
                    fetch("http://localhost/wordpress/wp-json/sakura/v1/captcha/create")
                    .then(resp=>resp.json())
                    .then(json=>{
                        e.target.src = json["data"];
                        document.querySelector("input[name=\'timestamp\']").value = json["time"];
                        document.querySelector("input[name=\'id\']").value = json["id"];
                    });
                })
            }, false);
            </script>
        <script type="text/javascript" src="/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
<script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/* <![CDATA[ */
var pwsL10n = {"unknown":"密码强度未知","short":"非常弱","bad":"弱","good":"中等","strong":"强","mismatch":"不匹配"};
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-05-24 10:05:05+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["自%2$s版开始，%1$s已经淘汰，请改用%3$s。请考虑撰写更具兼容性的代码。"]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script type="text/javascript" src="/wp-admin/js/password-strength-meter.min.js?ver=6.2.2" id="password-strength-meter-js"></script>
<script type="text/javascript" src="/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wordpress\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-includes/js/wp-util.min.js?ver=6.2.2" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"99008f24ec"};
/* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-05-24 10:05:05+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"zh_CN"},"Your new password has not been saved.":["您的新密码未被保存。"],"Hide":["隐藏"],"Show":["显示"],"Confirm use of weak password":["确认使用弱密码"],"Hide password":["隐藏密码"],"Show password":["显示密码"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script type="text/javascript" src="/wp-admin/js/user-profile.min.js?ver=6.2.2" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>