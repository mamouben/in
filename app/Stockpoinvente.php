<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockpoinvente extends Model
{
    protected $primaryKey = 'cle_stockpoinvente';
    protected $table = 'stockpoinvente';
    public $timestamps = false;

    protected $fillable = [
        'quantite_stockpoinvente','id_produit','id_pointvente','datetransfere_stockpoinvente',
        'cle_stockpoinvente'
    ];
}
