<!DOCTYPE html>
<html lang="vi">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Đăng nhập &lsaquo; TheBao &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="https://phanthebao001.github.io/mywebsite/wp-includes/css/dashicons.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="https://phanthebao001.github.io/mywebsite/wp-includes/css/buttons.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="https://phanthebao001.github.io/mywebsite/wp-admin/css/forms.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="https://phanthebao001.github.io/mywebsite/wp-admin/css/l10n.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="https://phanthebao001.github.io/mywebsite/wp-admin/css/login.min.css?ver=5.8.1" type="text/css" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-vi">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://vi.wordpress.org/">Xây dựng bằng WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://phanthebao001.github.io/mywebsite/wp-login.php" method="post">
			<p>
				<label for="user_login">Tên người dùng hoặc Địa chỉ Email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Mật khẩu</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Hiện mật khẩu">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Tự động đăng nhập</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Đăng nhập">
									<input type="hidden" name="redirect_to" value="https://phanthebao001.github.io/mywebsite/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
								<a href="https://phanthebao001.github.io/mywebsite/wp-login.php?action=lostpassword">Bạn quên mật khẩu?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="https://phanthebao001.github.io/mywebsite/">&larr; Quay lại TheBao</a>		</p>
			</div>
	<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/*  */
var _zxcvbnSettings = {"src":"https:\/\/phanthebao001.github.io\/mywebsite\/wp-includes\/js\/zxcvbn.min.js"};
/*  */
</script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de" id="wp-hooks-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/*  */
var pwsL10n = {"unknown":"Mật khẩu mạnh không xác định","short":"Rất yếu","bad":"Yếu","good":"Trung bình","strong":"Mạnh","mismatch":"Mật khẩu không khớp"};
/*  */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-08-02 03:13:39+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"vi_VN"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s đã ngừng hoạt động từ phiên bản %2$s! Sử dụng thay thế bằng %3$s."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-admin/js/password-strength-meter.min.js?ver=5.8.1" id="password-strength-meter-js"></script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/*  */
var _wpUtilSettings = {"ajax":{"url":"\/project\/wp-admin\/admin-ajax.php"}};
/*  */
</script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-includes/js/wp-util.min.js?ver=5.8.1" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/*  */
var userProfileL10n = {"user_id":"0","nonce":"39552429da"};
/*  */
</script>
<script type="text/javascript" id="user-profile-js-translations">
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-08-02 03:13:39+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"vi_VN"},"Your new password has not been saved.":["Mật khẩu mới của bạn chưa được lưu."],"Hide":["Ẩn đi"],"Show":["Hiển thị"],"Confirm use of weak password":["Chấp nhận sử dụng mật khẩu yếu."],"Hide password":["Ẩn mật khẩu"],"Show password":["Hiện mật khẩu"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script type="text/javascript" src="https://phanthebao001.github.io/mywebsite/wp-admin/js/user-profile.min.js?ver=5.8.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>