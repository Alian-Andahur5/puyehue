<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('UsrRut')->primary();
            $table->string('UsrNick');
            $table->string('UsrClaveEncript');
            $table->smallInteger('UsrEstado');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('usuarios', function (Blueprint $table) {
            Schema::dropIfExists('usuarios');
        });
    }
}
