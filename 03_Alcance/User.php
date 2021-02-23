<?php

namespace Alcance;

class User
{
    /* public: todo el sistema */
    /* protected: solo las clases que se heredan */
    /* private: nadie puede usar este sistema */
    public const PAGINATE = 25;
    public $username;
    protected $apellido = 'Piñeiro';
    protected $userProtected;

    public function getUsername()
    {
        return "$this->username\n";
    }

    public function getLastname()
    {
        return "$this->apellido\n";
    }
}
