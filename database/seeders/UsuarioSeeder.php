<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nome' => 'Usuário A', 'perfil_id' => 1],
            ['nome' => 'Usuário B', 'perfil_id' => 1],
            ['nome' => 'Usuário C', 'perfil_id' => 2]
        ]);
    }
}
