<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Loja;
use App\Models\CategoriaVeiculo;

class Veiculo extends Model
{
    protected $fillable = [
        'placa',
        'modelo',
        'marca',
        'ano',
        'cor',
        'quilometragem',
        'status_veiculo_id',
        'tipo_veiculo_id',
        'loja_id',
        'categoria_veiculo_id'
    ];

    public function loja()
    {
        return $this->belongsTo(Loja::class);
    }

    public function categoriaVeiculo()
    {
        return $this->belongsTo(CategoriaVeiculo::class);
    }

    
}
