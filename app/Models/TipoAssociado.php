<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAssociado extends Model
{
	protected = $fillable = [
'tipo_associado',
'fkusers'
];
    use HasFactory;
}
