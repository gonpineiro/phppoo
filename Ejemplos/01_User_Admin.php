<?php

class User
{
    public $type;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function saludar()
    {
        return "hola soy $this->name\n";
    }
}

class Admin
{
    public function greet()
    {
        return "Hola Administrador\n";
    }

    public function saludoAdmin($user)
    {
        return "hola soy $user->name, y soy admin\n";
    }
}

/* Creamos el usuario */
$user = new User('Gonzalo');
echo $user->saludar();

/* Agregamos el typo del usuario como admin */
$user->type = new Admin();

/* Ejecutamos el metodo del admin */
echo $user->type->greet();
echo $user->type->saludoAdmin($user);
