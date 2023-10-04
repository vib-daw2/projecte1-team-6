<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    protected $primaryKey = 'TreballadorID';

    protected $fillable = [
        'Nom', 'Cognom', 'Adreça', 'Correu', 'Telefon', 'DNI', 'DataNaixement', 'usuari', 'contrasenya', 'ServeiID'
    ];

    public function servei()
    {
        return $this->belongsTo(Servei::class, 'ServeiID');
    }
}
