<?php

namespace Reto\Models;

class User
{
    protected $name;
    protected $username;
    protected $email;

    public function getName()
    {
        return "$this->name";
    }
    public function getUsername()
    {
        return "$this->username";
    }
    public function getEmail()
    {
        return "$this->email";
    }
}
