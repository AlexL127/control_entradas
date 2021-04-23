<?php

namespace App\Models\Graphql;

use App\Models\Empleado;
use App\Models\Entrada;

class TypeEntrada
{
    public function entradas($_,array $array){
        return Entrada::where('empleado_id',$array['empleado_id'])->get()->toArray();
    }
}