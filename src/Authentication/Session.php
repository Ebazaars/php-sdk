<?php


namespace EbazaarsSdk\Authentication;


class Session
{

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;

        return $this;
    }

    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
}