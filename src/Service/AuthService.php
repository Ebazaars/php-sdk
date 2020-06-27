<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;
use EbazaarsSdk\Constant\Header;

class AuthService extends AbstractService
{

    const AUTH = '/auth/';
    const IS_VALID = '/auth/token/is_valid/';

    public function getToken($username, $password, $grantType = Header::CLIENT_CREDENTIALS, $options = [])
    {
        $options['form_params'] = ['username' => $username, 'password' => $password, 'grant_type' => $grantType];

        $response = $this->getClient()->postRequest(
            self::AUTH,
            $options
        );

        return $this->getContent($response);
    }

    public function tokenIsValid(Token $token, $options = [])
    {
        $options['form_params'] = ['token' => $token->getToken()];

        $response = $this->getClient()->postRequest(
            self::IS_VALID,
            $options
        );

        return $this->getContent($response);
    }

}