<?php

namespace EbazaarsSdk\Constant;


class Http
{

    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';

    const BASE_URL = 'http://local.api.ebazaars.net';

    private static $methods = [
        'get' => self::GET,
        'post' => self::POST,
        'put' => self::PUT,
        'patch' => self::PATCH,
        'delete' => self::DELETE,
    ];

    public static function getMethodName($id)
    {
        return isset(self::$methods[$id]) ? self::$methods[$id] : null;
    }

}