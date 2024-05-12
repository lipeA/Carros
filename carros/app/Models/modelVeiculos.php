<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class modelVeiculos extends Model
{

    use HasFactory;

    protected $table = 'veiculos';

    protected $fillable = ['veiculo', 'placa', 'cor', 'ano'];


}
