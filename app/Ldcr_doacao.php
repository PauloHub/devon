<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_doacao extends Model
{
    protected $table = 'ldcr_doacao';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
        'ID',
        'FK_DOAD_ID',
        'DOAC_DTA',
        'DOAC_VALOR',
        'DOAC_QAUNT',
        'FK_DOAC_TPO',
        'FK_ROTA'
    ];
}
