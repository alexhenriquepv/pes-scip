<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use \Database\Seeders\StatusTarefaSeeder;
use \Database\Seeders\TipoTarefaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusTarefaSeeder::class,
            TipoTarefaSeeder::class
        ]);
    }
}
