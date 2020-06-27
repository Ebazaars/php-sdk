<?php

namespace EbazaarsSdk\Constant;

class Header
{
    const TOKEN = 'X-EBZ-AUTH-TOKEN';

    const CUSTOMER_TOKEN = 'X-EBZ-CUSTOMER-AUTH-TOKEN';
    const SCOPE = 'X-EBZ-GROUPS';

    const SOURCE_SERVING_CLIENT_CREDENTIALS = 'source_serving_client_credentials';
    const CLIENT_CREDENTIALS = 'client_credentials';

    const EBAZAARS_CLIENT_IP = 'X-EBZ-CLIENT-IP';
    const EBAZAARS_USER_AGENT = 'x-EBZ-USER-AGENT';

    const COOKIE_BASKET = 'X-EBZ-BASKET';
    const RG_UUID = 'uuid';
    const RG_BASKET_SUMMARY = 'basket.summary';

    public static $headers = ['auth_token' => self::TOKEN, 'customer_auth_token' => self::CUSTOMER_TOKEN];

    public static function getKey($id)
    {
        return isset(self::$headers[$id]) ? self::$headers[$id] : null;
    }
}