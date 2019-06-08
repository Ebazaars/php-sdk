<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;

class AuthService extends AbstractService
{

    const AUTH = '/auth/';
    const IS_VALID = '/token/is_valid/';

    public function getToken($username, $password, $options = null)
    {
        $options['form_params'] = ['username' => $username, 'password' => $password];

        $response = $this->getClient()->postRequest(
            self::AUTH,
            $options
        );

        return $this->getContent($response);
    }

    public function tokenIsValid(Token $token, $options = null)
    {

        $options['form_params'] = ['token' => $token->getToken()];

        $response = $this->getClient()->postRequest(
            self::IS_VALID,
            $options
        );

        return $this->getContent($response);
    }

}