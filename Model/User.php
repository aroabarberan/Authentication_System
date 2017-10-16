<?php


class User
{
    private $name;
    private $email;
    private $password;
    private $remember_token;
    private $is_admin;

    public function __construct($name, $email, $password, $remember_token, $is_admin)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = sha1($password);;
        $this->remember_token = $remember_token;
        $this->is_admin = $is_admin;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getRemember_token()
    {
        return $this->remember_token;
    }


    public function setRemember_token($remember_token)
    {
        $this->remember_token = $remember_token;
    }


    public function getIs_admin()
    {
        return $this->is_admin;
    }


    public function setIs_admin($is_admin)
    {
        $this->is_admin = $is_admin;
    }
}