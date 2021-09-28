<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfis';
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
