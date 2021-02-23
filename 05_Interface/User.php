<?php

namespace Interfaz;

use Interfaz\Search;

class User implements Search
{
    public function all()
    {
        return "Obteniendo a los usuarios\n";
    }
}
