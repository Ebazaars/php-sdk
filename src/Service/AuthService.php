<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;

class AuthService extends AbstractService
{

    const AUTH = '/auth/';
    const IS_VALID = '/token/is_valid/';

    public function getToken($username, $password)
    {
        $response = $this->getClient()->postRequest(
            self::AUTH,
            ['form_params' => ['username' => $username, 'password' => $password]]
        );

        return $this->getContent($response);
    }

    public function tokenIsValid(Token $token)
    {
        $response = $this->getClient()->postRequest(
            self::IS_VALID,
            ['form_params' => ['token' => $token->getToken()]]
        );

        return $this->getContent($response);
    }

}