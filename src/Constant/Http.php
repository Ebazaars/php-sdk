<?php

namespace EbazaarsSdk\Constant;


class Http
{

    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';

    const AUTH_BASE_URL = 'http://auth.ebazaars.net';
    const API_BASE_URL = 'https://api.ebazaars.net';
    const USER_BASE_URL = 'http://user.ebazaars.net';
    const PRODUCT_BASE_URL = 'http://product.ebazaars.net';
    const BANNER_BASE_URL = 'http://banner.ebazaars.net';

    const HTTP_OK = 200;

    private static $baseUrls
        = [
            'auth' => self::AUTH_BASE_URL,
            'api'  => self::API_BASE_URL,
            'user' => self::USER_BASE_URL,
            'product' => self::PRODUCT_BASE_URL,
            'banner' => self::BANNER_BASE_URL,
        ];

    private static $methods
        = [
            'get'    => self::GET,
            'post'   => self::POST,
            'put'    => self::PUT,
            'patch'  => self::PATCH,
            'delete' => self::DELETE,
        ];

    public static function getMethodName($id)
    {
        return isset(self::$methods[$id]) ? self::$methods[$id] : null;
    }

    public static function getBaseUrl($key)
    {
        return isset(self::$baseUrls[$key]) ? self::$baseUrls[$key] : null;
    }

}