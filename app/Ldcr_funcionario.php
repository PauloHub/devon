<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_funcionario extends Model
{
    protected $table = 'ldcr_funcionario';
	public $timestamps = false;

    //Declarando quais inputs do form
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
    	'FUNC_DT_NASCI',
            'FUNC_FORMACAO',
            'FUNC_CARGO',
    	'FUNC_EMAIL',
    	'FUNC_TEL',
    	'FUNC_ENDERECO',
    	'FK_FUNC_CIDADE',
    	'FK_FUNC_ESTD',
    	'FUNC_CEP',        
          
    ];

}