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
}