<?php

include __DIR__.'/../vendor/autoload.php';
$session = new \EbazaarsSdk\Authentication\Session();
$serviceFactory = new \EbazaarsSdk\Factory\ServiceFactory();

if (!$session->hasClientToken()) {

    /** @var \EbazaarsSdk\Service\AuthService $authService */
    $authService = $serviceFactory->createAuthService(
        ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('auth')]
    );
    $clientToken = $authService->getToken('<ClientUserName>', '<ClientPassword>');

    $session->setClientToken($clientToken['token']);

} else {
    print_r("client token read on session");
}

///** @var \EbazaarsSdk\Service\PageService $pageService */
//$pageService = $serviceFactory->createService(
//    \EbazaarsSdk\Service\PageService::class,
//    ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('api'), 'client_token' => $session->getClientToken()]
//);
//
//$response = $pageService->getAll();

### Banner service test

/** @var \EbazaarsSdk\Service\BannerService $bannerService */
//$bannerService = $serviceFactory->createService(
//    \EbazaarsSdk\Service\BannerService::class,
//    ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('api'), 'client_token' => $clientToken['token']]
//);

#$response = $bannerService->getByBannerType('slider');

### Product service test

/** @var \EbazaarsSdk\Service\ProductService $productService */
//$productService = $serviceFactory->createService(
//    \EbazaarsSdk\Service\ProductService::class,
//    ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('api'), 'client_token' => $clientToken['token']]
//);

//$response = $productService->getAllProducts();

### User service test

//if (!$session->hasCustomerToken()) {
//
//    /** @var \EbazaarsSdk\Service\AuthService $authService */
//    $authService = $serviceFactory->createAuthService(
//        ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('auth')]
//    );
//    $userToken = $authService->getToken('<CustomerUserName>', '<CustomerPassword>');
//    $session->setCustomerToken($userToken['token']);
//
//} else {
//    print_r("customer token read on session");
//}

/** @var \EbazaarsSdk\Service\UserService $userService */
//$userService = $serviceFactory->createService(
//    \EbazaarsSdk\Service\UserService::class,
//    ['base_url' => \EbazaarsSdk\Constant\Http::getBaseUrl('api'), 'client_token' => $session->getClientToken()]
//);
//
//$response = $userService->authenticate($session->getCustomerToken());

print_r($response);
echo "\n";