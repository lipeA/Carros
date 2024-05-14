<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class modelVeiculos extends Model
{

    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = ['veiculo','marca', 'cor', 'placa', 'ano',];

    public function proprietario():BelongsTo
    {
        return $this->belongsTo(Proprietario::class);
    }

    public function servicos()
    {
        return $this->hasMany(modelServico::class);
    }

}
