<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'estados';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'id',
    	'nome',
    	'uf'
    ];
}
