<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Loja;
use App\Models\CategoriaVeiculo;
use App\Models\StatusVeiculo;
use App\Models\TipoVeiculo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    use SoftDeletes;
    
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

    public function statusVeiculo()
    {
        return $this->belongsTo(StatusVeiculo::class);
    }

    public function tipoVeiculo()
    {
        return $this->belongsTo(TipoVeiculo::class);
    }

    
}
