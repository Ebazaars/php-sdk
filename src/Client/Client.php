<?php

namespace EbazaarsSdk\Client;

use EbazaarsSdk\Config\Config;
use EbazaarsSdk\Constant\Http;

class Client extends \GuzzleHttp\Client
{
    private $header;

    /**
     * Client constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $conf['base_uri'] = $config->getBaseUrl();
        $this->header = new Header();
        $clientToken = $config->getClientToken();
        $customerToken = $config->getCustomerToken();
        if (!empty($clientToken)) {
            $this->header[\EbazaarsSdk\Constant\Header::getKey('auth_token')] = $clientToken->getToken();
        }
        if (!empty($customerToken)) {
            $this->header[\EbazaarsSdk\Constant\Header::getKey('customer_token')] = $customerToken->getToken();
        }
        parent::__construct($conf);
    }

    public function getRequest($uri, array $options = [])
    {
        $options = $this->mergeHeader($options);

        return $this->request(Http::getMethodName('get'), $uri, $options);
    }

    public function postRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);

        return $this->request(Http::getMethodName('post'), $uri, $options);
    }

    public function putRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);

        return $this->request(Http::getMethodName('put'), $uri, $options);
    }

    public function patchRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);

        return $this->request(Http::getMethodName('patch'), $uri, $options);
    }

    public function deleteRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);

        return $this->request(Http::getMethodName('delete'), $uri, $options);
    }

    public function setHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    private function mergeHeader($parameters)
    {
        if (array_key_exists('headers', $parameters)) {
            array_merge($parameters['headers'], $this->header->getArrayCopy());
        } else {
            $parameters['headers'] = $this->header->getArrayCopy();
        }

        return $parameters;

    }
}