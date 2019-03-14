<?php

namespace EbazaarsSdk\Service;


use EbazaarsSdk\Client\Client;

abstract class AbstractService
{

    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function getClient()
    {
        return $this->client;
    }

}