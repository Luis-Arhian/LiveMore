<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID de la imágen.
            $table->string('url'); // Ubicación de la imágen.
            $table->string('description'); // Descripción de ayuda si hay fallo al cargar la imagén
            $table->unsignedBigInteger('model_id'); // ID del modelo con el que se relacionará.
            $table->string('model_type'); // Indica el modelo al que se relacionará.
            $table->timestamps(); // Fecha de creación.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
