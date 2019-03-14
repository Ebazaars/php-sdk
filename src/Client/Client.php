<?php

namespace EbazaarsSdk\Client;

use EbazaarsSdk\Constant\Http;

class Client extends \GuzzleHttp\Client
{

    private $apiKey;

    private $apiSecret;

    private $header;

    /**
     * Client constructor.
     *
     * @param array $config
     *
     * $client = new \EbazaarsSdk\Client\Client([
     *  'api_key'         => 'xxx',
     *  'api_secret'      => 'xxx',
     * ]);
     *
     */
    public function __construct(array $config = [])
    {
        $config['base_url'] = Http::BASE_URL;
        $this->header = new Header();
        if (isset($config['token'])) {
            $this->header[\EbazaarsSdk\Constant\Header::getKey('auth_token')] = $config['token'];
        }
        parent::__construct($config);
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