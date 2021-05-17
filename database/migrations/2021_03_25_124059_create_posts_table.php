<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID del post.
            $table->string('title'); // Titulo del post.
            $table->text('brief')->nullable(); // Breve descripcion del post.
            $table->text('content')->nullable(); // Contenido completo del post.
            $table->boolean('status'); // Indica si el post está publicado o sin publicar.
            $table->bigInteger('category_id')->unsigned(); // Referencia al modelo de categoria/s a las que pertenece.
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned(); // Referencia al modelo del usuario al que pertenece.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); // Fecha de creación del post.
            $table->string('slug')->unique(); //Slug del post que utilizaremos para crear sus rutas.
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
