<?php


namespace EbazaarsSdk\Config;


class Config
{

    protected $authApiUrl = 'http://auth.ebazaars.net';

    protected $apiUrl = 'http://api.ebazaars.net';

    // Don't forget to change
    protected $clientUserName = '<ClientUserName>';

    // Don't forget to change
    protected $clientPassword = '<ClientPassword>';

    /**
     * @return string
     */
    public function getAuthApiUrl(): string
    {
        return $this->authApiUrl;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @return string
     */
    public function getClientUserName(): string
    {
        return $this->clientUserName;
    }

    /**
     * @return string
     */
    public function getClientPassword(): string
    {
        return $this->clientPassword;
    }


}