<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;

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

    public function authenticate(Token $customerToken)
    {
        $response = $this->getClient()->postRequest(
            '/user/by-token',
            ['form_params' => ['token' => $customerToken->getToken()]]
        );

        return $this->getContent($response);
    }

}