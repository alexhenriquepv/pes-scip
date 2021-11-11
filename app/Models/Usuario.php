<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $hidden = ['pivot'];
    
    protected $fillable = ['nome','cpf','carga_horaria','email','senha','ativo'];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}
