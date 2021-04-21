<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos 15 post de prueba.
        $posts = Post::factory(15)->create();

        // Por cada post se crean 2 imagenes.
        foreach ($posts as $post){
            Image::factory(2)->create([
                // Le indicamos el id del post y la clase.
                'model_id' => $post->id,
                'model_type' => Post::class
            ]);
        }
    }
}
