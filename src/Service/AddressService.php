<?php


namespace EbazaarsSdk\Service;


use EbazaarsSdk\Model\Address;

class AddressService extends AbstractService
{
    const ADDRESS_CREATE = '/address/create';
    const GET_COUNTRIES = '/country/';
    const GET_CITY_BY_COUNTRY = '/city/country/{country_id}';
    const GET_DISTRICT_BY_CITY = '/district/city/{city_id}';
    const GET_NEIGHBORHOOD_BY_DISTRICT = '/neighborhood/district/{district_id}';
    const GET_ADDRESS_BY_COOKIE = '/address/cookie/{address_cookie}';
    const GET_ADDRESS_BY_UUID = '/address/uuid/{address_uuid}';
    const GET_ADDRESS_BY_CUSTOMER_UUID = '/addresses/customer/uuid/{customer_uuid}';

    public function create(Address $address, $options = [])
    {
//        if ($this->checkAddressParameters($params)) {
        $options['form_params'] = json_decode(json_encode($address), true);
        $response = $this->getClient()->postRequest(self::ADDRESS_CREATE, $options);

        return $this->getContent($response);
//        }

//        return false;
    }

    protected function checkAddressParameters($params)
    {
        $isValid = true;
        $isValid &= !empty($params['phone_uuid']);
        $isValid &= !empty($params['country_name']);
        $isValid &= !empty($params['city_name']);
        $isValid &= !empty($params['district_name']);
        $isValid &= !empty($params['neighborhood_name']);
        $isValid &= !empty($params['name']);
        $isValid &= !empty($params['first_name']);
        $isValid &= !empty($params['last_name']);
        $isValid &= !empty($params['full_address']);

        return $isValid;
    }

    public function getCountries($options = [])
    {
        $countries = $this->getClient()->getRequest(self::GET_COUNTRIES, $options);

        return $this->getContent($countries);

    }

    public function getCityByCountry($countryId, $options = [])
    {
        $cities = $this->getClient()
            ->getRequest(str_replace('{country_id}', $countryId, self::GET_CITY_BY_COUNTRY), $options);

        return $this->getContent($cities);
    }

    public function getDistrictByCity($cityId, $options = [])
    {
        $districts = $this->getClient()->getRequest(
            str_replace('{city_id}', $cityId, self::GET_DISTRICT_BY_CITY),
            $options
        );

        return $this->getContent($districts);
    }

    public function getNeighborhoodByDistrict($districtId, $options = [])
    {
        $neighborhoods = $this->getClient()->getRequest(
            str_replace('{district_id}', $districtId, self::GET_NEIGHBORHOOD_BY_DISTRICT),
            $options
        );

        return $this->getContent($neighborhoods);
    }

    public function getAddressByCookie($cookie, $options = [])
    {
        $address = $this->getClient()->getRequest(
            str_replace('{address_cookie}', $cookie, self::GET_ADDRESS_BY_COOKIE),
            $options
        );

        return $this->getContent($address);
    }

    public function getAddressByUuid($uuid, $options = [])
    {
        $address = $this->getClient()->getRequest(
            str_replace('{address_uuid}', $uuid, self::GET_ADDRESS_BY_UUID),
            $options
        );

        return $this->getContent($address);
    }

    public function getByCustomerUuid($customerUuid, $options = [])
    {
        $addresses = $this->getClient()->getRequest(
            str_replace('{customer_uuid}', $customerUuid, self::GET_ADDRESS_BY_CUSTOMER_UUID),
            $options
        );

        return $this->getContent($addresses);
    }
}