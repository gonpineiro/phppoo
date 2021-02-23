<?php

namespace Herencia;

use Herencia\User;

class Admin extends User
{
    public function getName(){
        return "Soy $this->name\n";
    }
}
