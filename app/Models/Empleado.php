<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    //use HasFactory;

    protected $table = "empleados";
    public $timestamps = false;
    protected $fillable = ['nombre','apellido_pa','apellido_ma','departamento','telefono','turno'];
    
    public function entradas(): HasMany{
        return $this->hasMany(Entrada::class, 'empleado_id');
    }

    public function salidas(): HasMany{
        return $this->hasMany(Salida::class,'empleado_id');
    }
}
