<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $primaryKey = 'cle_fournisseur';
    protected $table = 'fournisseur';
    public $timestamps = true;

    protected $fillable = [
        'nom__fournisseur','tel_fournisseur','mail_fournisseur','cle_fournisseur'
    ];
}
