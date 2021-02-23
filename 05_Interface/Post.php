<?php

namespace Interfaz;

use Interfaz\Search;

class Post implements Search
{
    public function all()
    {
        return "Obteniendo a los Post\n";
    }
}
