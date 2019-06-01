<?php


namespace EbazaarsSdk\Authentication;


class Cookie
{
    public function setCookie($key, $value)
    {
        $_COOKIE[$key] = $value;

        return $this;
    }

    public function hasCookie($key)
    {
        return (isset($_COOKIE[$key])) ? true : false;
    }

    public function getCookie($key, $default = null)
    {
        return $this->hasCookie($key) ? $_COOKIE[$key] : $default;
    }
}