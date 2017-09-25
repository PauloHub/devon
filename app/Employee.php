<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'funcionario';
	public $timestamps = false;

    //Declarando quals inputs do form
    protected $fillable = [
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
    	'FUNC_DTA_NASCI',
    	'FK_FUNC_ESCOLA',
    	'FK_FUNC_CARGO',
    	'FK_USER_ID',
    	'FUNC_EMAIL',
    	'FUNC_TEL',
    	'FUNC_ENDERECO',
    	'FK_FUNC_CIDADE',
    	'FK_FUNC_ESTADO',
    	'FUNC_CEP'
    ];

}