<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cod_socio');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('DNI')->unsigned();
            $table->integer('tlfn')->unsigned();
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('codigo_postal',6);
            $table->date('fecha_alta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
