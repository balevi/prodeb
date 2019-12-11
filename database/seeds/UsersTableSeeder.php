<?php

use Illuminate\Database\Seeder;
use app\Models\Usuario;

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
            'name'      => 'Carlos ferreira',
            'email'     => 'Carlosferreira@hotmail.com',
            'password'  => bcrypt('12345'),
            ]);
    }
}
