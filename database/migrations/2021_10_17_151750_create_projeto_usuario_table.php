<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Projeto;
use App\Models\Usuario;

class CreateProjetoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projeto::class);
            $table->foreignIdFor(Usuario::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeto_usuario');
    }
}
