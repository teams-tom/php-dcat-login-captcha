<?php

namespace TeamsTom\LoginCaptcha\Http\Controllers;

use TeamsTom\LoginCaptcha\Captcha\Captcha as CaptchaImg;
use TeamsTom\LoginCaptcha\ServiceProvider as TeamsTomLoginCaptcha;

/**
 * 验证码
 *
 * @create 2021-2-28
 * @author deatil
 */
class Captcha
{
    /**
     * 展示验证码
     */
    public function show()
    {
        $charset = TeamsTomLoginCaptcha::setting('charset');
        $codelen = TeamsTomLoginCaptcha::setting('codelen');
        $fontsize = TeamsTomLoginCaptcha::setting('fontsize');
        $captchaType = TeamsTomLoginCaptcha::setting('captcha_type');
        
        (new CaptchaImg())
            ->withConfig([
                'charset' => $charset ?: 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789',
                'codelen' => $codelen ?: 4,
                'fontsize' => $fontsize ?: 20,
                'type' => $captchaType ?: 'string',
            ])
            ->makeCode()
            ->showImage();
    }
}
