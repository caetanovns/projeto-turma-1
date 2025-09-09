<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CategoriaVeiculo;
use App\Models\StatusVeiculo;
use App\Models\Loja;
use App\Models\TipoVeiculo;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->year('ano');
            $table->string('placa')->unique();
            $table->foreignId('categoria_veiculo_id')->constrained('categoria_veiculos');
            $table->foreignId('status_veiculo_id')->constrained('status_veiculos');
            $table->foreignId('loja_id')->constrained('lojas');
            $table->foreignId('tipo_veiculo_id')->constrained('tipo_veiculos');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
