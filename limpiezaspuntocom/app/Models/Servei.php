<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servei extends Model
{
    protected $primaryKey = 'ServeisID';

    protected $fillable = [
        'DataInici', 'DataFi', 'TipusDeServei', 'ClientID'
    ];

    public function client()
    {
        return $this->belongsTo(Cliente::class, 'ClientID');
    }
}
