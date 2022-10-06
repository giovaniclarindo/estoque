<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'André',
            'cpf'       => '98765432111',
            'telefone'  => '2199999999',
            'email'     => 'andr@andr.com.br',
            'password'  => Hash::make('123456'),
            'perfil'    => 'admin'
        ]);
    }
}
