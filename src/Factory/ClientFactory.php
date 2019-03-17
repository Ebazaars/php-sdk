<?php


namespace EbazaarsSdk\Factory;


use EbazaarsSdk\Client\Client;
use EbazaarsSdk\Config\Config;

class ClientFactory
{
    public function createClient(Config $config)
    {
        return new Client($config);
    }
}