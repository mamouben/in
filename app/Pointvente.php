<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pointvente extends Model
{
    protected $primaryKey = 'cle_pointvente';
    protected $table = 'pointvente';
    public $timestamps = true;

    protected $fillable = [
        'nom_pointvente','lieu_pointvente','cle_pointvente'
    ];
}
