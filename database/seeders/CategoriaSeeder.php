<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

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
            'id'   => 1,
            'nome' => 'Proteína'

        ]);

        Categoria::create([
            'id'   => 2,
            'nome' => 'Carboidrato'

        ]);

        Categoria::create([
            'id'   => 3,
            'nome' => 'Vegetal'

        ]);
    }
}
