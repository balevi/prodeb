<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'name'      => 'Carlos ferreira',
            'email'     => 'Carlosferreira@hotmail.com',
            'password'  => bcrypt('12345'),
            ]);
    }
}
