<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class modelVeiculos extends Model
{
    protected $table = 'veiculos';

    protected $fillable = ['veiculo', 'placa', 'cor', 'ano'];

    protected $hildden = [ 'created_at', 'updated_at',];
}
