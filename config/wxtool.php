<?php
/**
 * Created by PhpStorm.
 * User: icharle
 * Date: 2018/6/26
 * Time: 下午2:59
 */
return [

    /*
    |--------------------------------------------------------------------------
    | 微信小程序获取 session_key
    |--------------------------------------------------------------------------
    |
    */

    'wx_appid' => env('WX_APPID', ''),                       //微信小程序appid
    'wx_secret' => env('WX_SECRET', ''),                     //微信小程序secret
    'wx_code_url' => 'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',    //微信小程序临时登录凭证code

    /*
    |--------------------------------------------------------------------------
    | 微信小程序请求获取 Token
    |--------------------------------------------------------------------------
    |
    */

    'wx_token_url' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s',


    /*
    |--------------------------------------------------------------------------
    | 微信小程序请求分享指定页面图片
    |--------------------------------------------------------------------------
    |
    */

    'wx_pic_url' => 'https://api.weixin.qq.com/wxa/getwxacodeunlimit?access_token=%s',


    /*
    |--------------------------------------------------------------------------
    | 微信小程序小程序码存储位置
    |--------------------------------------------------------------------------
    |
    */

    'wx_pic_site' => dirname(dirname(dirname(dirname(__FILE__)))) . '/public/qrcode/'
];