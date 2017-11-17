<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldcr_grau_parentesco extends Model
{
    protected $table = 'ldcr_grau_parentesco';
    public $timestamps = false;

    protected $fillable = [
    	'GRPA_ID',
    	'GRPA_NOME',

    ];
}
