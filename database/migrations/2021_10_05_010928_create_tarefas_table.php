<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\TipoTarefa;
use App\Models\StatusTarefa;
use App\Models\Projeto;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->foreignIdFor(TipoTarefa::class)->nullable();
            $table->foreignIdFor(StatusTarefa::class)->nullable();
            $table->foreignIdFor(Projeto::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
