<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cidades';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'id',
    	'nome',
    	'id_estado'
    ];
}
