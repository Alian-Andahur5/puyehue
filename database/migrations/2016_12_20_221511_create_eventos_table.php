<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('IdEventos');
            $table->string('Nombre');
            $table->string('Tipo');
            $table->date('fecha');
            $table->integer('Usuario_UsrRut')->unsigned();
            $table->foreign('Usuario_UsrRut')->references('UsrRut')->on('usuarios');
            $table->time('HoraDesde');
            $table->time('HoraHasta'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table){
            Schema::dropIfExists('eventos');
        });
    }
}
