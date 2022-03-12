<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Teclado',
            'valor' => 150,
            'categoria_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Mouse',
            'valor' => 50,
            'categoria_id' => 3,
        ]);

        Produto::create([
            'nome' => 'Gabinete',
            'valor' => 200,
            'categoria_id' => 5,
        ]);

        Produto::create([
            'nome' => 'Monitor 144hz padrão',
            'valor' => 200,
            'categoria_id' => 2,
        ]);

        Produto::create([
            'nome' => 'Oculos boladão',
            'valor' => 200,
            'categoria_id' => 4,
        ]);
    }
}
