<?php

namespace Database\Seeders;
use App\Models\Comentario;

use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            'nome' => 'Lino',
            'comentario' => 'Muito bom'
        ]);

    }
}
