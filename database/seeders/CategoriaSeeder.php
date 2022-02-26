<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome' => 'Hardware'
        
        ]);

        Categoria::create([
            'nome' => 'Periféricos'
        ]);

        
    }
}
