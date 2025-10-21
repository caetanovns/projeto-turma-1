<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaVeiculo extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco_diaria'
    ];


    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }
}
