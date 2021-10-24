<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Tarefa;
use App\Models\Usuario;

class Projeto extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nome','descricao','cliente_id','prioridade',
        'data_inicio','data_fim','ativo'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }

    public function membros()
    {
        return $this->belongsToMany(Usuario::class);
    }
}
