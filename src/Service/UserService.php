<?php

namespace EbazaarsSdk\Service;


use EbazaarsSdk\Client\Client;
use EbazaarsSdk\Constant\Http;
use EbazaarsSdk\Factory\ServiceFactory;

class UserService extends AbstractService
{

    const OAUTH = '/user/oauth';
    const REGISTER = '/user/register';

    public function register(
        $email,
        $password,
        $name,
        $surname,
        $registerType,
        $country = null,
        $phoneCode = null,
        $phoneNo = null
    ) {
        $response = $this->getClient()->postRequest(
            self::REGISTER,
            [
                'form_params' => [
                    'email'        => $email,
                    'password'     => $password,
                    'name'         => $name,
                    'surname'      => $surname,
                    'registerType' => $registerType,
                    'country'      => $country,
                    'phoneCode'    => $phoneCode,
                    'phoneNo'      => $phoneNo,
                ],
            ]
        );

        return $this->getContent($response);
    }

    public function authenticate($username, $password)
    {
        $serviceFactory = new ServiceFactory();
        /** @var AuthService $authService */
        $authService = $serviceFactory->createAuthService(Http::getBaseUrl('auth'));
        $userToken = $authService->getToken($username, $password);

        $response = $this->getClient()->postRequest('/user/by-token', ['form_params' => ['token' => $userToken['token']]]);

        return $this->getContent($response);;
    }

}