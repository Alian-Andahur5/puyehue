<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('actividades', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombre');
            $table->string('Tipo');
            $table->date('Fecha');
            $table->integer('Evento_IdEventos')->unsigned();
            $table->foreign('Evento_IdEventos')->references('IdEventos')->on('eventos'); 
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('actividades', function (Blueprint $table) {
            Schema::dropIfExists('actividades');
        });
    }
}
