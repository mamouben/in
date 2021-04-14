<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'cle_client';
    protected $table = 'client';
    public $timestamps = false;

    protected $fillable = [
        'nom_client','prénom_client','téléphone_client','mail_client_client','type_client_client','entreprise_client',
        'rc_client','commune_client','cle_client'
    ];
}
