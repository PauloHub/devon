<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_cargo extends Model
{
    protected $table = 'ldcr_cargo';
	public $timestamps = false;

	 protected $fillable = [
    	'CARG_ID',
    	'CARG_DESC'
    ];
}
