<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_socios', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('fecha_salidad');
            $table->date('fecha_devolucion');
            $table->string('devuelto',2);
            $table->unsignedInteger('libros_id');
            $table->foreign('libros_id')
                  ->references('id')
                  ->on('libros')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('socios_id');
            $table->foreign('socios_id')
                  ->references('id')
                  ->on('socios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros_socios');
    }
}
