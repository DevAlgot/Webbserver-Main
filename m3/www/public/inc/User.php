<?php
class User
{
    private $email = "";
    private $password = "";
    private $username = "";


    public function __construct($username, $password)
    {
        $this->password = $password;
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function setPass($password)
    {
        $this->password = $password;
    }
}
