<?php

namespace Abs\abstraccion;

abstract class Base
{
    public function get()
    {
        return "Funcion Get en Base\n";
    }

    abstract public function store();
    abstract public function delete();
}
