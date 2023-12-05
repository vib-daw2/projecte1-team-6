<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servei extends Model
{
    protected $fillable = ['DataInici', 'DataFi', 'TipusDeServei', 'ClientID'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'ClientID');
    }

    public function treballadors()
    {
        return $this->belongsToMany(Treballador::class, 'servei_treballador', 'ServeiID', 'TreballadorID');
    }
}
