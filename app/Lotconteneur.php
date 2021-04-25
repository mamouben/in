<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotconteneur extends Model
{
    protected $primaryKey = 'cle_lotproduit';
    protected $table = 'lotproduit';
    public $timestamps = false;

    protected $fillable = [
        'quantite_lotproduit','prixu_lotproduit','fret_lotproduit','id_produit','id_conteneur','cle_lotproduit',
        'montant_devis_lotproduit','quantite_lotproduit_actuel','id_lieu_stockage'
    ];
}
