<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_roteiro extends Model
{
   protected $table = 'ldcr_roteiro';
    public $timestamps = false;

    //Declarando quais inputs do form
    protected $fillable = [
        'ID',
        'FK_DOAD_ID',
        'FK_FUNC_ID',
        'ROTA_DIA',
        'ROTA_FREQ'
    ];
}
