<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelProprietario extends Model
{
    use HasFactory;

    protected $table = 'proprietarios';

    protected $fillable = ['nome','telefone', 'cnh', 'sexo', 'data_nascimento',];
}
