<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas_evento', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('Turista_Identificacion')->unsigned();
            $table->foreign('Turista_Identificacion')->references('Identificacion')->on('turista'); 
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
          Schema::table('visitas_evento', function (Blueprint $table) {
            Schema::dropIfExists('visitas_evento');
        });   

    }
}
