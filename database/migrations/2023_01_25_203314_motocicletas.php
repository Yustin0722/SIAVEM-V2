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
        Schema::create('motocicletas', function (Blueprint $table) {
            $table->bigIncrements('idMotocicleta');
            $table->bigInteger('unidad_id')->unsigned();
            $table->date('FechaChequeoM');
            $table->string('Kilometraje');
            $table->string('Combustible');
            $table->string('LuzBaja');
            $table->string('LuzAlta');
            $table->string('LuzMarcha');
            $table->string('Pito');
            $table->string('Bateria');
            $table->string('NivelRefrigeracion');
            $table->string('NivelAceite');
            $table->string('Asientos');
            $table->string('PermisosCirculacion');
            $table->string('RTV');
            $table->string('TituloPropiedad');
            $table->string('LlantaDelantera');
            $table->string('LlantaTrasera');
            $table->string('EspejoRetrovisorD');
            $table->string('EspejoRetrovisori');
            $table->timestamps();

            $table->foreign('unidad_id')->references('idUnidad')->on('unidades');
        
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
