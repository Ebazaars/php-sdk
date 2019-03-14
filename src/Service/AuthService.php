<?php

namespace EbazaarsSdk\Service;

class AuthService extends AbstractService
{

    const AUTH = '/auth/';

    public function getToken($username, $password)
    {
        $response = $this->getClient()->postRequest(
            self::AUTH,
            ['form_params' => ['username' => $username, 'password' => $password]]
        );

        return json_decode($response->getBody()->getContents(), true);
    }

}