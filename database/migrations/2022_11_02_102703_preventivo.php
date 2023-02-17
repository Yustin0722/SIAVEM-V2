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
        Schema::create('preventivos', function (Blueprint $table) {
            $table->bigIncrements('idPreventivo');
            $table->bigInteger('unidad_id')->unsigned();
            $table->bigInteger('taller_id')->unsigned();
            $table->date('FechaMant');
            $table->string('tipoMante');
            $table->string('Horimetro');
            $table->string('ProximoSer');
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
