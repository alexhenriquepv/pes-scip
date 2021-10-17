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
        DB::table('projetos')->insert([
            [
                'cliente_id' => 1, 
                'nome' => 'Projeto A', 
                'data_inicio' => '2021-10-17',
                'data_fim' => '2021-11-17',
                'prioridade' => 'low'
            ],
            [
                'cliente_id' => 2, 
                'nome' => 'Projeto B', 
                'data_inicio' => '2021-10-17',
                'data_fim' => '2021-11-17',
                'prioridade' => 'low'
            ],
        ]);
    }
}
