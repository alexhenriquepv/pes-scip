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
            [
				"nome" => "Usuário A",
				"email" => "a@email.com",
				"senha" => "babyShark",
				"perfil_id" => 2
            ]
        ]);
    }
}
