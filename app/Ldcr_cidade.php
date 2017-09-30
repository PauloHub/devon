<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_cidade extends Model
{
    protected $table = 'ldcr_cidade';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'CIDADE_ID',
    	'CIDADE_DESC',
    	'FK_ESTD_UF'
    ];
}
