<?php


namespace EbazaarsSdk\Service;


class AddressService extends AbstractService
{

    const ADDRESS_SHOWALL = '/address/user/{id}';
    const ADDRESS_CREATE = '/address/create/user/{id}';

    public function showAll($userId, $addressCookie = null)
    {
        $queryAddressCookie = (!empty($addressCookie) ? "?addressCookie={$addressCookie}" : '');
        $response = $this->client->getRequest(str_replace('{id}', $userId, self::ADDRESS_SHOWALL.$queryAddressCookie));

        return $this->getContent($response);
    }

    public function create($userId, $params = array())
    {
        if ($this->checkAddressParameters($params)) {
            $response = $this->getClient()->postRequest(str_replace('{id}', $userId, self::ADDRESS_CREATE));

            return $this->getContent($response);
        }

        return false;
    }

    protected function checkAddressParameters($params)
    {
        $isValid = true;
        $isValid &= !empty($params['phone_code']);
        $isValid &= !empty($params['phone_no']);
        $isValid &= !empty($params['country_id']);
        $isValid &= !empty($params['city_id']);
        $isValid &= !empty($params['district_id']);
        $isValid &= !empty($params['neighborhood_id']);
        $isValid &= !empty($params['name']);
        $isValid &= !empty($params['firstname']);
        $isValid &= !empty($params['lastname']);
        $isValid &= !empty($params['address_text']);

        return $isValid;
    }

}