<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_conselheiros_tute extends Model
{
    protected $table = 'ldcr_conselheiros_tute';
    public $timestamps = false;

    protected $fillable = [

    	'ID',
    	'CONS_NOME',
    	'FK_COTL_ID'
    ];
}
