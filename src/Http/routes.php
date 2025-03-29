<?php

use TeamsTom\LoginCaptcha\Http\Controllers\Captcha;

// 验证码
Route::get('teamstom-login/captcha', Captcha::class.'@show')->name('teamstom-login-captcha.show');
