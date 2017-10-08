<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_acolhimento extends Model
{
    protected $table = 'ldcr_acolhimento';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [

		'ACMT_ID',
		'FK_CRIA_ID',
		'FK_CONS_ID',
		'ACMT_DTA_ACOLHI',
		'ACMT_VARA_INFAN',
		'ACMT_VARA_RELAT',
		'ACMT_VARA_OBS',
		'ACMT_PROX_RESIDENCIA',
		'ACMT_ACOLH_ANT',
		'ACMT_MOT_ACOLHM_ANT',
		'ACMT_HIG_VIOLENCIA',
		'ACMT_REA_COMP',
		'ACMT_VARA_NUM_PROCESS',
		'ACMT_DFPUB',
		'ACMT_DFPUB_FAM',
		'ACMT_AUSEN_PROG_PUB',
		'ACMT_INEFI_PROG_PUB',
		'ACMT_FREQ_ESC',
		'ACMT_REND_ESC',
		'ACMT_VIV_REL_ESC',
		'ACMT_HIST_FAMI',
		'ACMT_HIST_FAMI_DES',
		'ACMT_OPIN_DECI',
		'ACMT_OPIN_DEC_DES',
		'ACMT_DESEN_FISIC',
		'ACMT_DESEN_COGNI',
		'ACMT_DESEN_SOCIO_EMO',
		'ACMT_VDA_COT',
		'ACMT_OUT_INFO',
		'ACMT_MORA_CONDICAO',
		'ACMT_INFOR_FAM_EXTENSA',
		'ACMT_OBS_GERAIS'

	];

}
