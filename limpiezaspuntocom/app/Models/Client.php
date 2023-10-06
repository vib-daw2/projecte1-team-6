<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['Nom', 'Cognom', 'Telefon', 'Correu', 'Adreça', 'DNI'];

    public function serveis()
    {
        return $this->hasMany(Servei::class, 'ClientID');
    }
}
