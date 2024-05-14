<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelServico extends Model
{
    use HasFactory;
    protected $table = 'servicos';

    protected $fillable = ['veiculo_id', 'proprietario_id', 'descricao', 'data_servico'];

    public function veiculo()
    {
        return $this->belongsTo(modelVeiculos::class);
    }

    public function proprietario()
    {
        return $this->belongsTo(modelProprietario::class);
    }
}
