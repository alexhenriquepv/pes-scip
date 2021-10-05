<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;

class TipoTarefa extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['descricao'];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
