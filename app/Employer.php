<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $primaryKey = 'cle_employer';
    protected $table = 'employer';
    public $timestamps = false;

    protected $fillable = [
        'nom_employer','prenom_employer','tel_employer','mail_employer','poste_employer','cle_employer'
    ];
}
