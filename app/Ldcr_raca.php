<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_raca extends Model
{
     protected $table = 'ldcr_raca';
    public $timestamps = false;

    protected $fillable = [

    	'ID',
    	'RACA_DESCRICAO'
    ];
}
