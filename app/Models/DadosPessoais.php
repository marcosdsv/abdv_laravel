<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosPessoais extends Model
{
    use HasFactory;
    
    protected $fillable = [
     'rg',
        'cpf',
     'data_nascimento',
    ];
    
}
