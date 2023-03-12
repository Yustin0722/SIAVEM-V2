<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('idFormularios');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('depar_id')->unsigned();
            $table->bigInteger('emple_id')->unsigned();
            $table->string('Objetivo');
            $table->string('NumePersonas');
            $table->date('FechaSalida');
            $table->date('FechaRegreso');
            $table->time('HoraS');
            $table->time('HoraR');
            $table->string('Lugar');
            $table->string('Itinerario');
            $table->string('Observaciones')->nullable();
            $table->string('chofer')->nullable();
            $table->boolean('estado')->nullable();//permite que vaya null
            $table->string('placa')->nullable();
            $table->string('token');
            $table->timestamps();
             $table->foreign('categoria_id')->references('id')->on('categorias'); 
            $table->foreign('depar_id')->references('idDepartamento')->on('departamentos');
            $table->foreign('emple_id')->references('idEmpleados')->on('empleados');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
