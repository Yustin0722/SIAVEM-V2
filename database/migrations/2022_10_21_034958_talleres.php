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
        Schema::create('talleres', function (Blueprint $table) {
            $table->bigIncrements('idTaller');
            $table->string('Contratacion');
            $table->string('NombreTaller');
            $table->string('DireccionTaller');
            $table->string('DescripcionEsp');
            $table->date('FechaVenTaller');
        
            $table->timestamps();
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
