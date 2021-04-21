<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigincrements('id'); // Identificador del usuario.
            $table->string('name'); // Nombre del usuario.
            $table->string('surname'); // Apellido del usuario.
            $table->string('email')->unique(); // Email del usuario.
            $table->string('username'); // Nombre o nickname del usuario.
            $table->string('password'); // Contraseña del usuario.
            $table->boolean('admin'); // Indica si el usuario es administrador o no.
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
