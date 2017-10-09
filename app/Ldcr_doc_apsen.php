<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_doc_apsen extends Model
{
    protected $table = 'ldcr_doc_apsen';
    public $timestamps = false;

    protected $fillable = [

    	'FK_ACMT_ID',
    	'FK_TPDO_ID',
    	'SIT_DOC_APRESEN',

    ];

}
