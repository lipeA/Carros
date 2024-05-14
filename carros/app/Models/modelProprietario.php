<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\modelVeiculos;

class modelProprietario extends Model
{
    use HasFactory;

    protected $table = 'proprietarios';

    protected $fillable = ['nome','telefone', 'cnh', 'sexo', 'data_nascimento',];

    public function veiculos(): HasMany
    {
        return $this->hasMany(modelVeiculos::class);
    }
    public function servicos()
    {
        return $this->hasMany(modelServico::class);
    }
}
