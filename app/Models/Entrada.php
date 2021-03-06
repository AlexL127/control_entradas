<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model
{
    //use HasFactory;

    protected $table = "entradas";
    public $timestamps = false;
    protected $fillable = ['entrada_id','empleado_id','hora_entrada'];

    public function empleado(): BelongsTo{
        return $this->belongsTo(Empleado::class,'empleado_id');
    }
}
