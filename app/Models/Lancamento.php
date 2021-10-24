<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarefa;
use App\Models\Usuario;

class Lancamento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['qtd_horas','usuario_id','data'];

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }

    public function usuario()
    {
        return $this->belongsTo(usuario::class);
    }
}
