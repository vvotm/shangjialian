<?php
/**
 * Created by PhpStorm.
 * User: luowen
 * Date: 2017/3/20
 * Time: 22:05
 */

namespace App\Utils;


final class WxUtils
{
    use SingletonTrait;

    /*
     * wechat app id
     */
    const WX_APPID = "wx41680155348354c9";

    /*
     * wechat secret
     */
    const WX_SECRET = "4bd4ceaaeaab5b46c2e2a020c48f1119";

    /*
     * base scope
     */
    const WX_SNSAPI_BASE_SCOPE = "snsapi_base";

    /*
     * userinfo scope
     */
    const WX_SNSAPI_USERINFO_SCOPE = "snsapi_userinfo";

    /*
     * get wechat access_token api
     */
    const WX_CLIENT_ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';

    /*
     * wechat ask user to authenticate uri
     */
    const WX_AUTH_URI = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=%s&response_type=code&scope=%s&state=STATE";

    /*
     * wechat js ticket url
     */
    const WX_JSTICKET_URL = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi';

    /*
     * wechat get access token uri
     */
    const WX_ACCESS_TOKEN_URI = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code';

    const WX_JS_API_URL = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi';

    public static function getInstance() { }

    /**
     * get wechat redirect url
     *
     * @return string
     */
    public static function getRedirectUri()
    {
        return sprintf(self::WX_AUTH_URI, self::WX_APPID, self::WX_SNSAPI_BASE_SCOPE);
    }


    /**
     * use wechat server callback's code to get visitor's openid
     *
     * @param string $code
     * @return null
     */
    public static function getWxOpenId($code = '')
    {
        $accessTokenUrl = sprintf(self::WX_ACCESS_TOKEN_URI, self::WX_APPID, self::WX_SECRET, $code);
        $resultSet = json_decode(HttpUtil::get($accessTokenUrl), true);

        if(!isset($resultSet['openid']))
            return null;
        return $resultSet;
    }

    /**
     * obtain access_token url
     *
     * @return string
     */
    public static function getAccessTokenUrl()
    {
        return sprintf(self::WX_CLIENT_ACCESS_TOKEN, self::WX_APPID, self::WX_SECRET);
    }

    /**
     * acquire wechat javascript ticket url
     *
     * @param string $accessToken
     * @return string
     */
    public static function getJsTicketUrl($accessToken = '')
    {
        return sprintf(self::WX_JSTICKET_URL, $accessToken);
    }


    /**
     * acquire wechat appId
     *
     * @return string
     */
    public static function getAppId()
    {
        return self::WX_APPID;
    }

}