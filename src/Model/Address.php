<?php


namespace EbazaarsSdk\Model;


class Address
{
    public $name;

    public $country_id;

    public $city_id;

    public $district_id;

    public $neighborhood_id;

    public $first_name;

    public $last_name;

    public $full_address;

    public $district_name;

    public $city_name;

    public $country_name;

    public $neighborhood_name;

    public $phone_uuid;

    public $user_uuid;

    public $address_uuid;

    public $phone_no;

    public $phone_code;

    /**
     * @return mixed
     */
    public function getFullAddress()
    {
        return $this->full_address;
    }

    /**
     * @param mixed $full_address
     */
    public function setFullAddress($full_address): self
    {
        $this->full_address = $full_address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistrictName()
    {
        return $this->district_name;
    }

    /**
     * @param mixed $district_name
     */
    public function setDistrictName($district_name): self
    {
        $this->district_name = $district_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * @param mixed $city_name
     */
    public function setCityName($city_name): self
    {
        $this->city_name = $city_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param mixed $country_name
     */
    public function setCountryName($country_name): self
    {
        $this->country_name = $country_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeighborhoodName()
    {
        return $this->neighborhood_name;
    }

    /**
     * @param mixed $neighborhood_name
     */
    public function setNeighborhoodName($neighborhood_name): self
    {
        $this->neighborhood_name = $neighborhood_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneCode()
    {
        return $this->phone_code;
    }

    /**
     * @param mixed $phone_code
     */
    public function setPhoneCode($phone_code): self
    {
        $this->phone_code = $phone_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->phone_no;
    }

    /**
     * @param mixed $phone_no
     */
    public function setPhoneNo($phone_no): self
    {
        $this->phone_no = $phone_no;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneUuid()
    {
        return $this->phone_uuid;
    }

    /**
     * @param mixed $phone_uuid
     */
    public function setPhoneUuid($phone_uuid): self
    {
        $this->phone_uuid = $phone_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserUuid()
    {
        return $this->user_uuid;
    }

    /**
     * @param mixed $user_uuid
     */
    public function setUserUuid($user_uuid): self
    {
        $this->user_uuid = $user_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressUuid()
    {
        return $this->address_uuid;
    }

    /**
     * @param mixed $address_uuid
     */
    public function setAddressUuid($address_uuid): self
    {
        $this->address_uuid = $address_uuid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param mixed $country_id
     */
    public function setCountryId($country_id): self
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id): self
    {
        $this->city_id = $city_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistrictId()
    {
        return $this->district_id;
    }

    /**
     * @param mixed $district_id
     */
    public function setDistrictId($district_id): self
    {
        $this->district_id = $district_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeighborhoodId()
    {
        return $this->neighborhood_id;
    }

    /**
     * @param mixed $neighborhood_id
     */
    public function setNeighborhoodId($neighborhood_id): self
    {
        $this->neighborhood_id = $neighborhood_id;

        return $this;
    }
}