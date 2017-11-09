<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_crianca_resp extends Model
{
     protected $table = 'ldcr_crianca_resp';
    public $timestamps = false;

    protected $fillable = [
    	'ID',
    	'FK_CRIA_ID',
    	'FK_RESP_ID',
    ];
}
