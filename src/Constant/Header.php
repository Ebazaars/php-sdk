<?php

namespace EbazaarsSdk\Constant;

class Header
{
    const TOKEN = 'X-EBZ-AUTH-TOKEN';

    public static $headers = ['auth_token' => self::TOKEN];

    public static function getKey($id)
    {
        return isset(self::$headers[$id]) ? self::$headers[$id] : null;
    }
}