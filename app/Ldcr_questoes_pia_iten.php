<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_questoes_pia_iten extends Model
{
    protected $table = 'ldcr_questoes_pia_iten';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
    	'QEPI_ID',
    	'FK_QUESP_ID',
    	'QEPI_DESCRICAO',
    	'QEPI_SIT',    
          
    ];
}
