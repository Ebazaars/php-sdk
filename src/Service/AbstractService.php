<?php

namespace EbazaarsSdk\Service;


use EbazaarsSdk\Client\Client;
use EbazaarsSdk\Config\Config;
use EbazaarsSdk\Constant\Http;
use Psr\Http\Message\ResponseInterface;

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

    protected function getContent(ResponseInterface $response)
    {
        if ($response->getStatusCode() !== Http::HTTP_OK) {
            $serviceName = Config::PROJECT_NAME;
            trigger_error("There was an error while sending request to {$serviceName} services");
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}