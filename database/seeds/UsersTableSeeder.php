<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produtos;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Produtos::class,10)->create();
       /* User::create([
            'name'     => 'levi almeida',
            'email'    => 'levialmeida1994@hotmail.com',
            'password' =>  bcrypt('12345678'),
        ]);
        */
    }
}
