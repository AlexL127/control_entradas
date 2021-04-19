<?php

namespace App\Models\Graphql;

use App\Models\Empleado;

class TypeEntrada
{
    public function entradas(Empleado $empleado){
        return $empleado->entradas()->get()->toArray();
    }
}