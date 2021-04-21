<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID del comentario.
            $table->string('content'); // Contenido del comentario.
            $table->bigInteger('post_id')->unsigned(); // ID del modelo del post al que pertenece.
            $table->foreign('post_id')->references('id')->on('posts');
            $table->bigInteger('user_id')->unsigned(); // ID del modelo del usuario que ha creado el comentario.
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps(); // Fecha de creación del comentario.
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
