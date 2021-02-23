<?php

namespace Polimorfismo;

use Polimorfismo\Base;

class Admin extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}
