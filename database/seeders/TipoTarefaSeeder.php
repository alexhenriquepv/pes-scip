<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_tarefa')->insert([
            ['descricao' => 'Documentação'],
            ['descricao' => 'Reunião'],
            ['descricao' => 'Homologação']
        ]);
    }
}
