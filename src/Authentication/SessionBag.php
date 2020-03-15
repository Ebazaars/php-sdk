<?php


namespace EbazaarsSdk\Authentication;


use EbazaarsSdk\Utils\ParameterBag;

class SessionBag
{

    protected static $sessionBag;

    public function __construct()
    {
        self::$sessionBag = new ParameterBag();
    }

    public static function set($key, $value)
    {
        self::$sessionBag->set($key, $value);
    }

    public static function get($key)
    {
        return self::$sessionBag->get($key);
    }

    public static function has($key)
    {
        return self::$sessionBag->has($key);
    }

    public static function setClientToken($token)
    {
        self::set(\EbazaarsSdk\Constant\Session::CLIENT_TOKEN, serialize(new Token($token)));
    }

    public static function getClientToken()
    {
        return self::has(\EbazaarsSdk\Constant\Session::CLIENT_TOKEN) ? unserialize(
            self::get(\EbazaarsSdk\Constant\Session::CLIENT_TOKEN)
        ) : null;
    }

    public static function hasClientToken()
    {
        return self::has(\EbazaarsSdk\Constant\Session::CLIENT_TOKEN);
    }

    public static function setCustomerToken($token)
    {
        self::set(\EbazaarsSdk\Constant\Session::CUSTOMER_TOKEN, serialize(new Token($token)));
    }

    public static function getCustomerToken()
    {
        return self::has(\EbazaarsSdk\Constant\Session::CUSTOMER_TOKEN) ? unserialize(
            self::get(\EbazaarsSdk\Constant\Session::CUSTOMER_TOKEN)
        ) : null;
    }

    public static function hasCustomerToken()
    {
        return self::has(\EbazaarsSdk\Constant\Session::CUSTOMER_TOKEN);
    }

    public static function setServiceSessionId($serviceSessionId)
    {
        self::set(\EbazaarsSdk\Constant\Session::SERVICE_SESSION_ID, $serviceSessionId);
    }

    public static function getServiceSessionId()
    {
        return self::has(\EbazaarsSdk\Constant\Session::SERVICE_SESSION_ID) ? self::get(
            \EbazaarsSdk\Constant\Session::SERVICE_SESSION_ID
        ) : null;
    }

    public static function hasServiceSessionId()
    {
        return self::has(\EbazaarsSdk\Constant\Session::SERVICE_SESSION_ID);
    }

}