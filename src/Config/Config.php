<?php


namespace EbazaarsSdk\Config;


class Config
{
    protected $baseUrl;

    protected $clientUserName;

    protected $clientPassword;

    protected $clientToken;

    protected $customerToken;

    const PROJECT_NAME = 'Ebazaars.net';

    public function __construct(array $config = [])
    {
        if (!empty($config['base_url'])) {
            $this->setBaseUrl($config['base_url']);
        }

        if (isset($config['client_username'])) {
            $this->setClientUserName($config['client_username']);
        }
        if (isset($config['client_password'])) {
            $this->setClientPassword($config['client_password']);
        }

        if (!empty($config['client_token'])) {
            $this->setClientToken($config['client_token']);
        }
        if (!empty($config['customer_token'])) {
            $this->setCustomerToken($config['customer_token']);
        }
    }

    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param mixed $baseUrl
     */
    public function setBaseUrl($baseUrl): void
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return mixed
     */
    public function getClientUserName()
    {
        return $this->clientUserName;
    }

    /**
     * @param mixed $clientUserName
     */
    public function setClientUserName($clientUserName): void
    {
        $this->clientUserName = $clientUserName;
    }

    /**
     * @return mixed
     */
    public function getClientPassword()
    {
        return $this->clientPassword;
    }

    /**
     * @param mixed $clientPassword
     */
    public function setClientPassword($clientPassword): void
    {
        $this->clientPassword = $clientPassword;
    }

    /**
     * @return mixed
     */
    public function getClientToken()
    {
        return $this->clientToken;
    }

    /**
     * @param mixed $clientToken
     */
    public function setClientToken($clientToken): void
    {
        $this->clientToken = $clientToken;
    }

    /**
     * @return mixed
     */
    public function getCustomerToken()
    {
        return $this->customerToken;
    }

    /**
     * @param mixed $customerToken
     */
    public function setCustomerToken($customerToken): void
    {
        $this->customerToken = $customerToken;
    }

}