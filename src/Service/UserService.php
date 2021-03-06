<?php

namespace EbazaarsSdk\Service;

use EbazaarsSdk\Authentication\Token;
use EbazaarsSdk\Model\Phone;
use EbazaarsSdk\Model\Register;

class UserService extends AbstractService
{

    const OAUTH = '/user/oauth';
    const REGISTER = '/user/register';
    const USER_BY_TOKEN = '/user/by-token';
    const CLIENT_BY_TOKEN = '/user/client-by-token';
    const CREATE_PHONE = '/phone/create';
    const GET_PHONE_BY_UUID = '/phone/uuid/{phone_uuid}';

    public function register(Register $register, $options = [])
    {
        $options['form_params'] = json_decode(json_encode($register), true);

        $response = $this->getClient()->postRequest(self::REGISTER, $options);

        return $this->getContent($response);
    }

    public function authenticate(Token $customerToken, $options = [])
    {

        $options['form_params'] = ['token' => $customerToken->getToken()];

        $response = $this->getClient()->postRequest(
            self::USER_BY_TOKEN,
            $options
        );

        return $this->getContent($response);
    }

    public function clientByToken($options = [])
    {
        $response = $this->getClient()->getRequest(self::CLIENT_BY_TOKEN, $options);

        return $this->getContent($response);
    }

    public function createPhone(Phone $phone, $options = [])
    {
        $options['form_params'] = json_decode(json_encode($phone), true);

        $response = $this->getClient()->postRequest(self::CREATE_PHONE, $options);

        return $this->getContent($response);
    }

    public function getPhoneByUuid($phoneUuid, $options = [])
    {
        $phone = $this->getClient()->getRequest(
            str_replace('{phone_uuid}', $phoneUuid, self::GET_PHONE_BY_UUID),
            $options
        );

        return $this->getContent($phone);
    }

}