<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'ID' => 1,
            'Nom' => 'Juan',
            'Cognom' => 'Zafzafi',
            'Telefon' => '605123456',
            'Correu' => 'juan@cliente.com',
            'Adreça' => 'Carrer de les Taules, 79, 43700 El Vendrell, Tarragona',
            'DNI' => '12345678A',
        ]);

        Client::create([
            'ID' => 2,
            'Nom' => 'Maria',
            'Cognom' => 'Font',
            'Telefon' => '601245789',
            'Correu' => 'maria@cliente.com',
            'Adreça' => 'Carrer de les Cadires, 45, 43830 Torredembarra, Tarragona',
            'DNI' => '87654321B',
        ]);

        // Agrega más registros según tus necesidades...
    }
}

