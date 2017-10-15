<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_cria_externa extends Model
{
    protected $table = 'ldcr_cria_externa';
    public $timestamps = false;

    protected $fillable = [

    	'CRIA_EXTR_ID',
    	'FK_CRIA_ID',
    	'CRIA_EXTR_SIT';
    	'CRIA_EXTR_NOME',
    	'CRIA_EXTR_DATA_NASC',
    	'CRIA_EXTR_END_INTI',
    	'CRIA_EXTR_FAM_NOME',
    	'CRIA_EXTR_MSM_INSTI',
    	'CRIA_EXTR_OUTR_INST',
    	'CRIA_EXTR_FAM_TER',
    	'CRIA_EXTR_ADOT'

    ];
}
