<?php

include __DIR__.'/../vendor/autoload.php';
$config = new \EbazaarsSdk\Config\Config();
$authConnectionParams = ['base_uri'=> $config->getAuthApiUrl()];

$authClient = new \EbazaarsSdk\Client\Client($authConnectionParams);
$authenticate = new \EbazaarsSdk\Service\AuthService($authClient);
$authenticateResponse = $authenticate->getToken($config->getClientUserName(), $config->getClientPassword());

$connectionParams = [
    'base_uri' => $config->getApiUrl(),
    'token'=> $authenticateResponse['token']
];

$client = new \EbazaarsSdk\Client\Client(
   $connectionParams
);

// Address Tests
//$address = new \EbazaarsSdk\Service\AddressService($client);

//$response = $address->showAll(5);

$userService = new \EbazaarsSdk\Service\UserService($client);

$response = $userService->authenticate('<CustomerUserName>', '<CustomerPassword>');

// Banner Tests
//$banner = new \EbazaarsSdk\Service\BannerService($client);
//$response = $banner->getByBannerType('slider');

print_r($response);
echo "\n";