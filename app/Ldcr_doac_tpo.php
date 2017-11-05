<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_doac_tpo extends Model
{
    protected $table = 'ldcr_doac_tpo';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
        'ID',
        'DOAT_DESCRICAO'
    ];
}
