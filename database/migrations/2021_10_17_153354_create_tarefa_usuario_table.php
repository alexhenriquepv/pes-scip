<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Tarefa;
use App\Models\Usuario;

class CreateTarefaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tarefa::class);
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
        Schema::dropIfExists('tarefa_usuario');
    }
}
