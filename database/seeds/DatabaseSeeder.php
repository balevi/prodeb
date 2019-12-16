<?php

use Illuminate\Database\Seeder;
//use UsersTableSeeder;
//use Database\Seeder\ProdutosTableSeeder;
use App\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
         $this->call(ProdutosTableSeeder::class);
    }
}
