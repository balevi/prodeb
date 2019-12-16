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
        Produto::create([
        'produto'     => 'celular',
        'quantidade'  => 5,
        'valor'       => 50.5,
        'user_id'     => 1,
        ])
    }
}
