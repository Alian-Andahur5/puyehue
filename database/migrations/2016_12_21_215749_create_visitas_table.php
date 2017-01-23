<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


         Schema::create('visitas', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('Turista_Identificacion')->unsigned();
            $table->foreign('Turista_Identificacion')->references('Identificacion')->on('turista');
            $table->integer('Origen_Nombre')->unsigned();
            $table->foreign('Origen_Nombre')->references('Nombre')->on('origen');
            $table->string('Nombre');
            $table->date('Fecha');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('visitas', function (Blueprint $table) {
            Schema::dropIfExists('visitas');
        });
    }
}
