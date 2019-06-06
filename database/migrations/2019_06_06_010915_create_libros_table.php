<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cod_libro',10)->nullable();
            $table->string('titulo');
            $table->string('Autor');
            $table->date('fecha_edicion');
            $table->integer('stock');
            $table->unsignedInteger('generos_literarios_id');
            $table->foreign('generos_literarios_id')
                  ->references('id')
                  ->on('generos_literarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
