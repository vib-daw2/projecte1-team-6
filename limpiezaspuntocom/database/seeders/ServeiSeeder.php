<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servei;

class ServeiSeeder extends Seeder
{
    public function run()
    {
        Servei::create([
            'ID' => 1,
            'DataInici' => '2023-09-20',
            'DataFi' => '2023-12-31',
            'TipusDeServei' => 'Neteja a domicili',
            'ClientID' => 1,
        ]);

        Servei::create([
            'ID' => 2,
            'DataInici' => '2023-09-25',
            'DataFi' => '2023-12-31',
            'TipusDeServei' => 'Neteja doficines',
            'ClientID' => 2,
        ]);
    }
}
