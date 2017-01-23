<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('imagen_evento', function (Blueprint $table) {
            $table->integer('IdIE')->primary();
            $table->integer('imagen_Id')->unsigned();
            $table->foreign('imagen_Id')->references('Id')->on('imagenes');  
            $table->integer('evento_IdEventos')->unsigned();
            $table->foreign('evento_IdEventos')->references('IdEventos')->on('eventos');  
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagen_evento', function (Blueprint $table) {
            Schema::dropIfExists('imagen_evento');
        });
    }
}
