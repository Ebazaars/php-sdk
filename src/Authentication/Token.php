<?php


namespace EbazaarsSdk\Authentication;


class Token
{

    protected $token;

    protected $invalid_date;

    public function __construct($token = null, $invalid_date = null)
    {
        $this->setToken($token);
        $this->setInvalidDate($invalid_date);
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

    /**
     * @return mixed
     */
    public function getInvalidDate()
    {
        return $this->invalid_date;
    }

    /**
     * @param mixed $invalid_date
     */
    public function setInvalidDate($invalid_date): void
    {
        $this->invalid_date = $invalid_date;
    }

    public function isDateValid()
    {
        if (!empty($this->getInvalidDate())) {
            $now = new \DateTime();
            $validDate = new \DateTime($this->getInvalidDate());
            // time buffer
            $validDate->modify('-1 minute');
            return $validDate->getTimestamp() > $now->getTimestamp();
        }
        return false;
    }
}