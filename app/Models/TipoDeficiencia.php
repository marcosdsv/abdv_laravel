<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeficiencia extends Model
{
protected $fillable = [
'tipo_deficiencia',
'fkusers'
];
    use HasFactory;
}
