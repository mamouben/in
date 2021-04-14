<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'cle_categorie_produis';
    protected $table = 'categorie-produis';
    public $timestamps = false;

    protected $fillable = [
        'nom_categorie_produis','cle_categorie_produis'
    ];
}
