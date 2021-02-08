<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
	protected $fillable = [
'cep',
'uf',
'municipio',
'logradouro',
'bairro',
'numero',
'complemento',
'fkusers'
	];
    use HasFactory;
}
