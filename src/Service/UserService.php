<?php

namespace EbazaarsSdk\Service;


use EbazaarsSdk\Client\Client;

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

        return $response->getBody()->getContents();
    }

    public function authenticate($username, $password)
    {
        $authConnectionParams = ['base_uri' => 'http://local.auth.ebazaars.net'];
        $authClient = new Client($authConnectionParams);
        $authService = new AuthService($authClient);
        $userToken = $authService->getToken($username, $password);

        $user = $this->getClient()->postRequest('/user/by-token', ['form_params' => ['token' => $userToken['token']]]);

        return json_decode($user->getBody()->getContents(), true);
    }

}