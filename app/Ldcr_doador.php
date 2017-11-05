<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_doador extends Model
{
    protected $table = 'ldcr_doador';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
        'DOAD_ID',
        'DOAD_NOME',
        'DOAD_CPF',
        'DOAD_ENDE',
        'DOAD_NUMERO_CASA',
        'DOAD_BAIRRO',
        'FK_DOAD_CIDADE',
        'FK_DOAD_ESTD',
        'DOAD_CEP',
        'DOAD_EMAIL',
        'DOAD_OBS',
        'DOAD_TEL_1',
        'DOAD_TEL_2'
    ];

}
