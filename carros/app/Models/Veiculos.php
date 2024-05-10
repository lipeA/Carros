<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $fillable = ['veiculo', 'modelo', 'placa', 'cor', 'ano'];
}

