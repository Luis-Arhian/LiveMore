<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crearemos 5 categorias de prueba y en cada una de ellas habrán 6 posts con sus respectivas imagenes y comentarios.
        $categories = Category::factory(5)->create();

        foreach ($categories as $categoria){
            // Creamos 15 post de prueba.
            $posts = Post::factory(6)->create([
                'category_id' => $categoria -> id
            ]);


            // Por cada post se crea 1 imagen.
            foreach ($posts as $post){
                Comment::factory(5)->create([
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
