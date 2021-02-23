<?php

namespace InterfazTwo;

use InterfazTwo\PersonInterface;

class Admin implements PersonInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "$this->name\n";
    }
}
