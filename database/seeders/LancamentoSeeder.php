<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LancamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lancamentos')->insert([
            [
				"tarefa_id" => 1,
                "usuario_id" => 1,
                "qtd_horas" => 3,
                "data" => "2021-11-08",
                "descricao" => "Descrição do lançamento"
            ]
        ]);
    }
}
