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
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('idUnidad');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('tracciones_id')->unsigned();
            $table->bigInteger('combustibles_id')->unsigned();
            $table->bigInteger('estados_id')->unsigned();
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('estilo'); 
            $table->string('color');       
            $table->string('ayoFabricacion');//int
            $table->string('contratacion');
            $table->string('valorAdqui'); // double
            $table->string('valorHacienda');
            $table->date('RVT');  
            $table->string('descripcion');
            
          
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');   
            $table->foreign('tracciones_id')->references('idTraccion')->on('tracciones');
            $table->foreign('combustibles_id')->references('idCombustibles')->on('combustibles');
            $table->foreign('estados_id')->references('idEstados')->on('estados');
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
