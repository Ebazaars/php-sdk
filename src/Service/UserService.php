<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;

class UserService extends AbstractService
{

    const OAUTH = '/user/oauth';
    const REGISTER = '/user/register';
    const USER_BY_TOKEN = '/user/by-token';
    const CLIENT_BY_TOKEN = '/user/client-by-token';

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

    public function authenticate(Token $customerToken, $options = null)
    {

        $options['form_params'] = ['token' => $customerToken->getToken()];

        $response = $this->getClient()->postRequest(
            self::USER_BY_TOKEN,
            $options
        );

        return $this->getContent($response);
    }

    public function clientByToken($options = null)
    {
        $response = $this->getClient()->getRequest(self::CLIENT_BY_TOKEN, $options);

        return $this->getContent($response);
    }

}