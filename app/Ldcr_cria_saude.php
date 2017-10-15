<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_cria_saude extends Model
{
    protected $table = 'ldcr_cria_saude';
    public $timestamps = false;

    protected $fillable = [

    	'FK_ACMT_ID',
    	'CSAU_CART_VAC',
    	'CSAU_OBS',
    	'CSAU_DTA_DIAG_MED',
    	'CSAU_DIAG_MED',
    	'CSAU_ACOP_MED',
    	'CSAU_USO_MED',
    	'CSAU_USO_MED_ESP'
    ];
}
