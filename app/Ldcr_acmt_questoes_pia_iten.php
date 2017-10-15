<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_acmt_questoes_pia_iten extends Model
{
    protected $table = 'ldcr_acmt_questoes_pia_iten';
    public $timestamps = false;

    protected $fillable = [

    	'FK_ACMT_ID',
    	'FK_QEPI_ID',
    	'FK_QESP_ID'

    ];
}
