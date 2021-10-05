<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoTarefa;
use App\Models\StatusTarefa;

class Tarefa extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'titulo','descricao','data_inicio','data_fim',
        'tipo_tarefa_id','status_tarefa_id'
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoTarefa::class);
    }

    public function status()
    {
        return $this->belongsTo(StatusTarefa::class);
    }
}
