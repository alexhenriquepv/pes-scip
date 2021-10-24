<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('projetos')->insertGetId([
            "nome" => "Projeto A",
            "descricao" => "Projeto criado automaticamente",
            "data_inicio" => "2021-10-17",
            "data_fim" => "2021-11-17",
            "cliente_id" => 1,
            "prioridade" => "medium"
        ]);


        DB::table('projeto_usuario')->insert([
            "projeto_id" => $id,
            "usuario_id" => 1
        ]);
    }
}
