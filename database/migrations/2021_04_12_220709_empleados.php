<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellido_pa',25);
            $table->string('apellido_ma',25);
            $table->string('departamento',50);
            $table->string('telefono',10)->nullable();
            $table->integer('turno');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
