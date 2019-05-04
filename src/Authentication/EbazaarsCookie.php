<?php


namespace EbazaarsSdk\Authentication;


use http\Cookie;

class EbazaarsCookie extends Cookie
{

    protected $basketCookie;

    protected $addressCookie;

    /**
     * @return mixed
     */
    public function getBasketCookie()
    {
        return $this->basketCookie;
    }

    /**
     * @param mixed $basketCookie
     */
    public function setBasketCookie($basketCookie): void
    {
        $this->basketCookie = $basketCookie;
    }

    /**
     * @return mixed
     */
    public function getAddressCookie()
    {
        return $this->addressCookie;
    }

    /**
     * @param mixed $addressCookie
     */
    public function setAddressCookie($addressCookie): void
    {
        $this->addressCookie = $addressCookie;
    }

}