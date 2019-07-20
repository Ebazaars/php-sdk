<?php


namespace EbazaarsSdk\Service;


class ClientService extends AbstractService
{
    const GET_CONFIG_VERSION = '/client-config/version';
    const GET_CONFIG = '/client-config/';

    public function getConfigVersion($options = [])
    {
        $response = $this->getClient()->getRequest(self::GET_CONFIG_VERSION, $options);

        return $this->getContent($response);
    }

    public function getConfig($options = [])
    {
        $response = $this->getClient()->getRequest(self::GET_CONFIG, $options);

        return $this->getContent($response);
    }
}