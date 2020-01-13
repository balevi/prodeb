<?php

use Illuminate\Database\Seeder;
use App\Produtos;
class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Produtos::create([
            'id'          => 1,
            'produto'     => 'celular',
            'quantidade'  => 8,
            'valor'       => 900,
            'user_id'     => 1,
            ]);
    }
}
