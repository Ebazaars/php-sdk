<?php


namespace EbazaarsSdk\Authentication;


class Session
{
    const CUSTOMER_TOKEN_KEY = 'customer_token';
    const CLIENT_TOKEN_KEY = 'client_token';
    const SERVICE_SESSION_ID_KEY = 'service_session_id';

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
        return !empty($_SESSION[self::CLIENT_TOKEN_KEY]);
    }

    public function setClientToken(string $token, $invalid_date = null)
    {
        $this->set(self::CLIENT_TOKEN_KEY, serialize(new Token($token, $invalid_date)));
    }

    /**
     * @return Token|null
     */
    public function getClientToken()
    {
        return $this->hasClientToken() ? unserialize($this->get(self::CLIENT_TOKEN_KEY)) : null;
    }

    public function hasServiceSessionId()
    {
        return !empty($_SESSION[self::SERVICE_SESSION_ID_KEY]);
    }

    public function setServiceSessionId($serviceSessionId)
    {
        $_SESSION[self::SERVICE_SESSION_ID_KEY] = $serviceSessionId;

        return $this;
    }

    public function getServiceSessionId()
    {
        return isset($_SESSION[self::SERVICE_SESSION_ID_KEY]) ? $_SESSION[self::SERVICE_SESSION_ID_KEY] : null;
    }

    public function hasCustomerToken()
    {
        return !empty($_SESSION[self::CUSTOMER_TOKEN_KEY]);
    }

    public function setCustomerToken(string $token, $invalid_date = null)
    {
        $this->set(self::CUSTOMER_TOKEN_KEY, serialize(new Token($token, $invalid_date)));
    }

    /**
     * @return Token|null
     */
    public function getCustomerToken()
    {
        return $this->hasCustomerToken() ? unserialize($this->get(self::CUSTOMER_TOKEN_KEY)) : null;
    }
}