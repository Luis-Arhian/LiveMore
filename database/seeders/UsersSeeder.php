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
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.es%2Ficonos-gratis%2Fsimbolo-usuario-negro-macho_724420.htm&psig=AOvVaw2V8DfIuAykgLhaYxRa-VPy&ust=1617796020460000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPjqwvvF6e8CFQAAAAAdAAAAABAQ',
                'admin' => '1'
            ));
        }
    }
}
