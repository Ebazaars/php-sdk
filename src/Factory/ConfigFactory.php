<?php


namespace EbazaarsSdk\Factory;


use EbazaarsSdk\Config\Config;

class ConfigFactory
{

    /**
     * @param string $baseUrl
     * @param string $clientUsername
     * @param string $clientPassword
     * @param null   $clientToken
     * @param null   $customerToken
     *
     * @return Config
     */
    public function createConfig(
        string $baseUrl,
        string $clientUsername = null,
        string $clientPassword = null,
        $clientToken = null,
        $customerToken = null
    ) {
        return new Config(
            [
                'base_url'        => $baseUrl,
                'client_username' => $clientUsername,
                'client_password' => $clientPassword,
                'client_token'    => $clientToken,
                'customer_token'  => $customerToken,
            ]
        );
    }

}