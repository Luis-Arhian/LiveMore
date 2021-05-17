<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creamos el directorio donde se guardarán las imagenes.
        Storage::makeDirectory('/public/posts_images');

        // Creamos los datos de prueba mediante Factory.
        \App\Models\User::factory(5)->create();
        $this->call(CategorySeeder::class);
    }
}
