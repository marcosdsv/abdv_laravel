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
	
	public function listarRelatorios($relatorios){
		$sql = "SELECT *
		FROM relatorios";
		return $sql;
	}
	
}
