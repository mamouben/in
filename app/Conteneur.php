<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteneur extends Model
{
    protected $primaryKey = 'cle_conteneurs';
    protected $table = 'conteneurs';
    public $timestamps = false;

    protected $fillable = [
        'montant_devise','taux_change','num_d10','date_d10','contre_valeur','droits_douanes','taxe_domiciliation',
        'frais_transit','consignation_maritime','magasinage_manutention1','magasinage_manutention2',
        'surestaries','transport','autresfrais','totaux','cle_conteneurs'
    ];
}
