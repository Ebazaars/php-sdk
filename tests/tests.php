<?php

include __DIR__.'/../vendor/autoload.php';

$serviceFactory = new \EbazaarsSdk\Factory\ServiceFactory();
/** @var \EbazaarsSdk\Service\AuthService $authService */
$authService = $serviceFactory->createAuthService(['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('auth')]);
$clientToken = $authService->getToken('<ClientUsername>', '<ClientPasswords>');

/** @var \EbazaarsSdk\Service\BannerService $bannerService */
$bannerService = $serviceFactory->createService(
    \EbazaarsSdk\Service\BannerService::class,
    ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('api'), 'client_token' => $clientToken['token']]
);

$response = $bannerService->getByBannerType('slider');

print_r($response);
echo "\n";