<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->insert([
            ['nome' => 'Design'],
            ['nome' => 'Dev Pleno'],
            ['nome' => 'Dev Senior'],
            ['nome' => 'Tester'],
            ['nome' => 'Manager']
        ]);
    }
}
