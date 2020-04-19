<?php

namespace EbazaarsSdk\Client;

use EbazaarsSdk\Authentication\Session;
use EbazaarsSdk\Config\Config;
use EbazaarsSdk\Constant\Http;

class Client extends \GuzzleHttp\Client
{
    public $header;

    protected $session;

    /**
     * Client constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $conf['base_uri'] = $config->getBaseUrl();
        $conf['cookies'] = true;
        $this->header = new Header();
        $clientToken = $config->getClientToken();
        $customerToken = $config->getCustomerToken();
        if (!empty($clientToken)) {
            $this->header[\EbazaarsSdk\Constant\Header::getKey('auth_token')] = $clientToken->getToken();
        }
        if (!empty($customerToken)) {
            $this->header[\EbazaarsSdk\Constant\Header::getKey('customer_auth_token')] = $customerToken->getToken();
        }
        parent::__construct($conf);
        $this->session = new Session();
    }

    public function getRequest($uri, array $options = [])
    {
        $options = $this->mergeHeader($options);
        $response = $this->request(Http::getMethodName('get'), $uri, $options);
        $this->handleServiceSessionId();
        return $response;
    }

    public function postRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);
        $response = $this->request(Http::getMethodName('post'), $uri, $options);
        $this->handleServiceSessionId();
        return $response;
    }

    public function putRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);
        $response = $this->request(Http::getMethodName('put'), $uri, $options);;
        $this->handleServiceSessionId();
        return $response;
    }

    public function patchRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);
        $response = $this->request(Http::getMethodName('patch'), $uri, $options);
        $this->handleServiceSessionId();
        return $response;
    }

    public function deleteRequest($uri, $options)
    {
        $options = $this->mergeHeader($options);
        $response = $this->request(Http::getMethodName('delete'), $uri, $options);
        $this->handleServiceSessionId();
        return $response;
    }

    public function setHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    private function mergeHeader($parameters)
    {
        if (array_key_exists('headers', $parameters)) {
            $parameters['headers'] = array_merge($parameters['headers'], $this->header->getArrayCopy());
        } else {
            $parameters['headers'] = $this->header->getArrayCopy();
        }

        if ($this->session->hasServiceSessionId()) {
            $parameters['headers']['Cookie'] = 'PHPSESSID='.$this->session->getServiceSessionId();
        }

        if (array_key_exists('scope', $parameters)) {
            if (is_array($parameters['scope'])) {
                $parameters['scope'] = implode(',', $parameters['scope']);
            }
            $parameters['headers'][\EbazaarsSdk\Constant\Header::SCOPE] = $parameters['scope'];
            unset($parameters['scope']);
        }

        return $parameters;
    }

    protected function handleServiceSessionId()
    {
        $cookies = $this->getConfig('cookies')->toArray();
        if (count($cookies) == 1) {
            $cookies = current($cookies);
        }

        if (isset($cookies['Value'])) {
            $this->session->setServiceSessionId($cookies['Value']);
        }

        return $this;
    }
}