<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treballador;

class TreballadorSeeder extends Seeder
{
    public function run()
    {
        Treballador::create([
            'ID' => 1,
            'Nom' => 'Pep',
            'Cognom' => 'Garcia',
            'Adreça' => 'Carrer de les Flors, 123, 43800 Reus, Tarragona',
            'Correu' => 'pep@empresa.com',
            'Telefon' => '601234567',
            'DNI' => '12345678C',
            'DataNaixement' => '1985-07-15',
            'usuari' => 'pepgarcia',
            'contrasenya' => bcrypt('contrasenya123'),
            'ServeiID' => 1
        ]);

        Treballador::create([
            'ID' => 2,
            'Nom' => 'Anna',
            'Cognom' => 'Martínez',
            'Adreça' => 'Carrer del Sol, 56, 43750 Flix, Tarragona',
            'Correu' => 'anna@empresa.com',
            'Telefon' => '609876543',
            'DNI' => '87654321D',
            'DataNaixement' => '1990-04-20',
            'usuari' => 'annamartinez',
            'contrasenya' => bcrypt('contrasenya456'),
            'ServeiID' => 2
        ]);

        // Agrega más registros según tus necesidades...
    }
}
