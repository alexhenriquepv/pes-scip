<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = ['nome','cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
