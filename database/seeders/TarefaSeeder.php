<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarefas')->insert([
            [
				"titulo" =>  "Tarefa A",
				"descricao" =>  "Tarefa gerada automaticamente",
				"data_inicio" =>  "2021-10-25",
				"data_fim" =>  "2021-10-28",
				"status_tarefa_id" =>  1,
                "projeto_id" => 1
            ]
        ]);
    }
}
