<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_orientacao extends Model
{
    protected $table = 'ldcr_orientacao';
    public $timestamps = false;

    protected $fillable = [

    	'ORNT_ID',
    	'FK_CRIA_ID',
    	'ORNT_TIPO',
    	'ORNT_CONS_TUT_OBS',
    	'ORNT_DPCA_OBS',
    	'ORNT_DELEGACIA_COMUM_OBS',
    	'ORNT_ASSISTENCIA_SOCIAL_OBS',
    	'ORNT_PROTECAO_SOCIAL_BASICA',
    	'ORNT_PROTECAO_SOCIAL_ESPECIAL',
    	'ORNT_SAUDE_OBS',
    	'ORNT_EDUCACAO_OBS',
    	'ORNT_HABITACAO_OBS',
    	'ORNT_PROFISSIO_TRAB'

    ];
}
