<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_estado extends Model
{
    protected $table = 'ldcr_estado';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'ESTD_ID',
    	'ESTD_DESC',
    	'ESTD_UF'
    ];
}
