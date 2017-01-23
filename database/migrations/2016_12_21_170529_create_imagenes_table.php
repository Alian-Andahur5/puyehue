<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombre');
            $table->date('Fecha');
            $table->string('Ruta');
            $table->integer('Usur_UsrRut')->unsigned();    
            $table->foreign('Usur_UsrRut')->references('UsrRut')->on('usuarios');  
            $table->integer('album_ID')->unsigned();
            $table->foreign('album_ID')->references('ID')->on('album');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes', function (Blueprint $table) {
            Schema::dropIfExists('imagenes');
        });
    }
}
