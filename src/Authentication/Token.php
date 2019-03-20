<?php


namespace EbazaarsSdk\Authentication;


class Token
{

    protected $token;

    public function __construct($token = null)
    {
        $this->setToken($token);
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }
}