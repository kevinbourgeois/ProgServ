<?php

class User
{
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $passwd;

    /**
     * @param $name
     * @param $surname
     * @param $email
     * @param $phone
     * @param $passwd
     */
    public function __construct($name, $surname, $email, $phone, $passwd)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->passwd = $passwd;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }



}