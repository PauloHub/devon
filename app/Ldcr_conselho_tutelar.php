<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_conselho_tutelar extends Model
{
    protected $table = 'ldcr_conselho_tutelar';
    public $timestamps = false;

    protected $fillable = [

    	'ID',
    	'COTL_NOME'
    ];


}
