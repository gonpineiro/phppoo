<?php
namespace Abs\abstraccion;

class Cached extends Base
{
    public function store()
    {
        return "Se guardo correctamente\n";
    }
    public function delete()
    {
        return "Se borro correctamente\n";
    }
}
