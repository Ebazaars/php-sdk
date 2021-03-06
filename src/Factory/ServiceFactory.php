<?php


namespace EbazaarsSdk\Factory;


use EbazaarsSdk\Constant\Http;
use EbazaarsSdk\Service\AuthService;

class ServiceFactory
{

    /**
     * @param        $serviceClass
     * @param array $config {
     * @param string $baseUrl (required)
     * @param string $clientUsername (required)
     * @param string $clientPassword (required)
     * @param null $clientToken (required for client)
     * @param null $customerToken (required for customer)
     *                               }
     *
     * @return mixed
     */
    public function createService($serviceClass, array $config = [])
    {
        if(!isset($config['base_url'])) {
            $config['base_url'] = Http::ORIGIN_BASE_URL;
        }

        $configFactory = new ConfigFactory();
        $clientFactory = new ClientFactory();
        $config = $configFactory->createConfig(
            $config['base_url'],
            isset($config['client_username']) ? $config['client_username'] : null,
            isset($config['client_password']) ? $config['client_password'] : null,
            isset($config['client_token']) ? $config['client_token'] : null,
            isset($config['customer_token']) ? $config['customer_token'] : null
        );
        $client = $clientFactory->createClient($config);

        return new $serviceClass($client);
    }

    /**
     * @param        $serviceClass
     * @param array $config {
     * @param string $baseUrl (required)
     * @param string $clientUsername (required)
     * @param string $clientPassword (required)
     * @param null $clientToken
     * @param null $customerToken
     *                               }
     *
     * @return mixed
     */
    public function createAuthService(array $config = [])
    {
        if (empty($config['base_url'])) {
            $config['base_url'] = Http::getBaseUrl('auth');
        }

        $configFactory = new ConfigFactory();
        $clientFactory = new ClientFactory();
        $config = $configFactory->createConfig(
            $config['base_url'],
            isset($config['client_username']) ? $config['client_username'] : null,
            isset($config['client_password']) ? $config['client_password'] : null,
            isset($config['client_token']) ? $config['client_token'] : null,
            isset($config['customer_token']) ? $config['customer_token'] : null
        );
        $client = $clientFactory->createClient($config);

        return new AuthService($client);
    }


}