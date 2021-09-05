<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diretoria extends Model
{
	protected $fillable = [
'nome',
'cargo'
];
    use HasFactory;
}
