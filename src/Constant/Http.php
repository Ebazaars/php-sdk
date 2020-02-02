<?php

namespace EbazaarsSdk\Constant;


class Http
{

    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';
    
    const ORIGIN_BASE_URL = 'https://origin.ebazaars.net';

    const HTTP_OK = 200;

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

}