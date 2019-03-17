<?php

namespace EbazaarsSdk\Constant;

class Header
{
    const TOKEN = 'X-EBZ-AUTH-TOKEN';

    const CUSTOMER_TOKEN = 'X-EBZ-CUSTOMER-AUTH-TOKEN';

    public static $headers = ['auth_token' => self::TOKEN, 'customer_auth_token' => self::CUSTOMER_TOKEN];

    public static function getKey($id)
    {
        return isset(self::$headers[$id]) ? self::$headers[$id] : null;
    }
}