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
         Schema::create('correctivos', function (Blueprint $table) {
            $table->bigIncrements('idCorrectivo');
            $table->bigInteger('unidad_id')->unsigned();
            $table->bigInteger('taller_id')->unsigned();
            $table->date('FechaSalida');
            $table->date('FechaReingreso');
            $table->string('Horimetro');
            $table->string('Detalle');
            $table->string('Monto');
            $table->timestamps();

            $table->foreign('unidad_id')->references('idUnidad')->on('unidades');
            $table->foreign('taller_id')->references('idTaller')->on('talleres');
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
