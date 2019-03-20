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

    public function hasClientToken()
    {
        return !empty($_SESSION['client_token']) ? true : false;
    }

    public function setClientToken(string $token)
    {
        $this->set('client_token', serialize(new Token($token)));
    }

    /**
     * @return Token|null
     */
    public function getClientToken()
    {
        return $this->hasClientToken() ? unserialize($this->get('client_token')) : null;
    }

    public function hasCustomerToken()
    {
        return !empty($_SESSION['customer_token']) ? true : false;
    }

    public function setCustomerToken(string $token)
    {
        $this->set('customer_token', serialize(new Token($token)));
    }

    /**
     * @return Token|null
     */
    public function getCustomerToken()
    {
        return $this->hasCustomerToken() ? unserialize($this->get('customer_token')) : null;
    }
}