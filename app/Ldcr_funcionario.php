<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_funcionario extends Model
{
    protected $table = 'ldcr_funcionario';
	public $timestamps = false;

    //Declarando quals inputs do form
    protected $fillable = [
        'FUNC_ID',
    	'FUNC_NOME',
    	'FUNC_RG',
    	'FUNC_CPF',
    	'FUNC_CONTA',
    	'FUNC_DT_ADMISSAO',
    	'FUNC_DT_DEMISSAO',
    	'FUNC_STATUS',
    	'FUNC_NUMERO_CASA',
    	'FUNC_BAIRRO',
    	'FUNC_MAE',
    	'FUNC_PAI',
    	'FUNC_DT_NASCI',
        'FK_FUNC_CARGO',
        'FK_USER_ID',
    	'FUNC_EMAIL',
    	'FUNC_TEL',
    	'FUNC_ENDERECO',
    	'FUNC_CIDADE',
    	'FUNC_ESTADO',
    	'FUNC_CEP',        
        'FUNC_FORMACAO'
    ];

}