<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;
use App\Models\TipoTarefa;
use App\Models\StatusTarefa;
use App\Models\Usuario;
use App\Models\Lancamento;
use App\Models\Projeto;

class Tarefa extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'titulo','descricao','data_inicio','data_fim','progresso','tarefa_antecessora_id'
    ];

    public function status()
    {
        return $this->belongsTo(StatusTarefa::class, 'status_tarefa_id');
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class, 'projeto_id');
    }

    public function membros()
    {
        return $this->belongsToMany(Usuario::class);
    }

    public function lancamentos()
    {
        return $this->hasMany(Lancamento::class);
    }

    public function antecessora()
    {
        return $this->hasOne(Tarefa::class, 'id', 'tarefa_antecessora_id');
    }
}
