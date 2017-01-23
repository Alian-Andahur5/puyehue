<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('destino_detalle', function (Blueprint $table) {
       $table->increments('Prioridad');
       $table->string('Destino_Nombre');
       $table->foreign('Destino_Nombre')->references('Nombre')->on('destino');
       $table->integer('Visitas_Id')->unsigned();
       $table->foreign('Visitas_Id')->references('Id')->on('visitas');
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('destino_detalle', function (Blueprint $table){
         Schema::dropIfExists('destino_detalle');
     });
    }
}
