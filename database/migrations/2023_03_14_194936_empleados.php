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
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('idEmpleados');
            $table->bigInteger('departamento_id')->unsigned();
            $table->string('Puesto');
            $table->string('NombreEmple');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->date('FechaNacimiento');
            $table->string('Cedula');
            $table->string('Telefono');
            $table->string('CorreoInstitucional');
             $table->bigInteger('TL_id')->unsigned();
            $table->date('FechaVencimiento');
            $table->string('FotoLicencia');
        

            $table->timestamps();
            $table->foreign('departamento_id')->references('idDepartamento')->on('departamentos');
            $table->foreign('TL_id')->references('idTL')->on('tlicencias');
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
