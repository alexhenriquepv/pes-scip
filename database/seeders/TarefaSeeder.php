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
                'tipo_tarefa_id' => 1, 
                'status_tarefa_id' => 1, 
                'titulo' => 'Tarefa A',
                'data_inicio' => '2021-10-17',
                'data_fim' => '2021-11-17',
            ],
            [
                'tipo_tarefa_id' => 2, 
                'status_tarefa_id' => 2, 
                'titulo' => 'Tarefa B',
                'data_inicio' => '2021-10-17',
                'data_fim' => '2021-11-17',
            ],
        ]);
    }
}
