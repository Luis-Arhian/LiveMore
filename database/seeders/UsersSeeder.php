<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=5; $i++){

            DB::table('users')->insert(array(
                'name' => 'User '.$i,
                'surname' => 'Test '. $i,
                'email' => 'User'.$i.'@mail.com',
                'username' => 'User'.$i,
                'password' => '1234',
                'admin' => '0'
            ));
        }
    }
}
