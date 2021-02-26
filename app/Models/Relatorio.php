<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    	protected $fillable = [
		'titulo',
		'descricao',
		'link',
		'videos',
		'fotos',
		'descimg'
	];
	
}
