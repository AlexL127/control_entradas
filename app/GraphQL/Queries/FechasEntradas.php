<?php

namespace App\GraphQL\Queries;
use App\Models\Entrada;

class FechasEntradas
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_,array $args)
    {
        $ent = new Entrada;
        return $ent->orderBy('hora_entrada')->where('empleado_id',$args['empleado_id'])->get();
    }
}
