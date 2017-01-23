<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodependientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('turista', function (Blueprint $table) {
            $table->integer('Identificacion')->primary();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Email');
            $table->string('Sexo');
            $table->string('GrupoEtario');
        });

            Schema::create('destino', function (Blueprint $table) {
            $table->string('Nombre')->primary();
            $table->string('Comuna');
        });

           Schema::create('album', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('Nombre');
            $table->date('Fecha');   
        });

         Schema::create('origen', function (Blueprint $table) {
            $table->string('Nombre')->primary();
            $table->string('Nacionalidad');
            
        });


        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('turista', function (Blueprint $table) {
            Schema::dropIfExists('turista');
        });

         Schema::table('destino', function (Blueprint $table) {
            Schema::dropIfExists('destino');
        });

         Schema::table('album', function (Blueprint $table) {
            Schema::dropIfExists('album');
        });

        Schema::table('origen', function (Blueprint $table) {
            Schema::dropIfExists('origen');
        });

           

    }
}
