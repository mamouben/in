<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $primaryKey = 'cle_produits';
    protected $table = 'produits';
    public $timestamps = false;

    protected $fillable = [
        'ref_produits','nom_produits','id_cat','id_fournisseur','cle_produits'
    ];
}
