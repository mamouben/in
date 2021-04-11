<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'cle_categorie-produis';
    protected $table = 'categorie-produis';
    public $timestamps = true;

    protected $fillable = [
        'nom_categorie-produis','cle_categorie-produis'
    ];
}
