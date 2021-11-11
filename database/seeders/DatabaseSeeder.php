<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use \Database\Seeders\PerfilSeeder;
use \Database\Seeders\UsuarioSeeder;
use \Database\Seeders\ClienteSeeder;
use \Database\Seeders\ProjetoSeeder;
use \Database\Seeders\StatusTarefaSeeder;
use \Database\Seeders\TarefaSeeder;
use \Database\Seeders\LancamentoSeeder;

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
            PerfilSeeder::class,
            UsuarioSeeder::class,
            ClienteSeeder::class,
            ProjetoSeeder::class,
            StatusTarefaSeeder::class,
            TarefaSeeder::class,
            LancamentoSeeder::class
        ]);
    }
}
