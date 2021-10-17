<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use \Database\Seeders\StatusTarefaSeeder;
use \Database\Seeders\TipoTarefaSeeder;
use \Database\Seeders\UsuarioSeeder;
use \Database\Seeders\ClienteSeeder;
use \Database\Seeders\ProjetoSeeder;
use \Database\Seeders\TarefaSeeder;

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
            TipoTarefaSeeder::class,
            UsuarioSeeder::class,
            ClienteSeeder::class,
            ProjetoSeeder::class,
            TarefaSeeder::class
        ]);
    }
}
