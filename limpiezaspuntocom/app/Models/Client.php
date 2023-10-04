<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'ClientID';

    protected $fillable = [
        'Nom', 'Cognom', 'Telefon', 'Correu', 'Adreça', 'DNI',
    ];
}

