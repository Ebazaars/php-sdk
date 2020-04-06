<?php


namespace EbazaarsSdk\Model;


class Register
{

    public $register_type;

    public $phone_code;
    public $phone_no;
    public $country_code;

    public $email;
    public $name;
    public $surname;
    public $password;

    /**
     * @return mixed
     */
    public function getRegisterType()
    {
        return $this->register_type;
    }

    /**
     * @param mixed $register_type
     */
    public function setRegisterType($register_type): self 
    {
        $this->register_type = $register_type;

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
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code): self 
    {
        $this->country_code = $country_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): self 
    {
        $this->email = $email;
        
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): self 
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): self 
    {
        $this->password = $password;

        return $this;
    }




}