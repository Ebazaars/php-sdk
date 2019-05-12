<?php


namespace EbazaarsSdk\Service;


class ClientService extends AbstractService
{
    const GET_CONFIG_VERSION = '/client-config/version';
    const GET_CONFIG = '/client-config/';

    public function getConfigVersion()
    {
        $response = $this->getClient()->getRequest(self::GET_CONFIG_VERSION);

        return $this->getContent($response);
    }

    public function getConfig()
    {
        $response = $this->getClient()->getRequest(self::GET_CONFIG);

        return $this->getContent($response);
    }
}