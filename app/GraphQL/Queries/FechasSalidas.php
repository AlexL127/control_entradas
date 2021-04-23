<?php

namespace App\GraphQL\Queries;
use App\Models\Salida;

class FechasSalidas
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $sal = new Salida;
        return $sal->orderBy('hora_salida')->where('empleado_id',$args['empleado_id'])->get();
    }
}
