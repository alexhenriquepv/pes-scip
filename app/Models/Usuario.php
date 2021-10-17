<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome','perfil_id','cpf','carga_horaria','email'];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}
