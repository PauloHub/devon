<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_municipio extends Model
{
    protected $table = 'ldcr_municipio';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'MUNI_ID',
    	'MUNI_DESCR',
    	'FK_ESTD_ID'
    ];
}
