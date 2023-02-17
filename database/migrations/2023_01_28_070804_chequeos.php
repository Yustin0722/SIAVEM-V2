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
        Schema::create('chequeos', function (Blueprint $table) {
            $table->bigIncrements('idchequeos');
            $table->bigInteger('unidad_id')->unsigned();
            $table->date('FechaChequeo');
            $table->string('Kilometraje');
            $table->string('Combustible');
            $table->string('LuzBaja');
            $table->string('LuzAlta');
            $table->string('LuzMarcha');
            $table->string('LuzInterior');
            $table->string('LuzFreno');
            $table->string('Intermitentes');
            $table->string('LuzParking');
            $table->string('Alojenos');
            $table->string('Escobillas');
            $table->string('Extintor');
            $table->string('Botiquin');
            $table->string('Triangulos');
            $table->string('Cinturon');
            $table->string('ChapaPuerta');
            $table->string('Pito');
            $table->string('Parabrisas');
            $table->string('VidriosLaterales');
            $table->string('Climatizacion');
            $table->string('Bateria');
            $table->string('NivelRefrigeracion');
            $table->string('NivelAceite');
            $table->string('Alfombras');
            $table->string('Radio');
            $table->string('AsientosD');
            $table->string('AsientosT');
            $table->string('PermisosCirculacion');
            $table->string('RTV');
            $table->string('TituloPropiedad');
            $table->string('LlantaDelantera');
            $table->string('LlantaRepuesto');
            $table->string('LlantaTrasera');
            $table->string('Tuercas');
            $table->string('EspejoRetrovisor');
            $table->string('Gata');
            $table->string('LlaveRana');
            $table->string('Lingas');
            $table->string('JuegoLlaves');
            $table->string('Bumper');
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
