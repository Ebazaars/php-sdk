<?php


namespace EbazaarsSdk\Model;


class Phone
{

    public $country_code;

    public $phone_code;

    public $phone_no;

    public $isMobile;

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code): self
    {
        $this->country_code = $country_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneCode()
    {
        return $this->phone_code;
    }

    /**
     * @param mixed $phone_code
     */
    public function setPhoneCode($phone_code): self
    {
        $this->phone_code = $phone_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->phone_no;
    }

    /**
     * @param mixed $phone_no
     */
    public function setPhoneNo($phone_no): self
    {
        $this->phone_no = $phone_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsMobile()
    {
        return $this->isMobile;
    }

    /**
     * @param mixed $isMobile
     */
    public function setIsMobile($isMobile): self
    {
        $this->isMobile = $isMobile;

        return $this;
    }

}