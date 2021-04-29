<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(10)->create([
            @foreach($users as $user){
                Image::factory(1)->create([
                    // Le indicamos el id del post y la clase.
                    'model_id' => $user->id,
                    'model_type' => Post::class
                ]);
            }
        ]);
    }
}
