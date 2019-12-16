<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'levi almeida',
            'email'    => 'levialmeida1994@hotmail.com',
            'password' =>  bcrypt('12345678'),
        ]);
    }
}
