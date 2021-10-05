<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_tarefa')->insert([
            ['descricao' => 'To Do'],
            ['descricao' => 'Doing'],
            ['descricao' => 'Blocked'],
            ['descricao' => 'Review'],
            ['descricao' => 'Done']
        ]);
    }
}
