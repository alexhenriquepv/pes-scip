<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                "nome" => "Cliente A",
                "cnpj" => "000/0001",
                "servico" => "Pet Shop",
                "endereco" => "Rua da paz, 666",
                "celular" => "11 99343-1234"
            ]
        ]);
    }
}
