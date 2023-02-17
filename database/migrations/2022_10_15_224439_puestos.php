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
        Schema::create('puestos', function (Blueprint $table) {
            $table->bigIncrements('idPuesto');
            $table->bigInteger('id_Departamento')->unsigned();
            $table->string('nombrePuesto');
            
            $table->timestamps();

            $table->foreign('id_Departamento')->references('idDepartamento')->on('departamentos');
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
