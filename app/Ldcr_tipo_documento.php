<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_tipo_documento extends Model
{
    protected $table = 'ldcr_tipo_documento';
	public $timestamps = false;

	//Declarando quals inputs do form
    protected $fillable = [
    	'TPDO_ID',
    	'TPDO_DESC'
    ];
}
