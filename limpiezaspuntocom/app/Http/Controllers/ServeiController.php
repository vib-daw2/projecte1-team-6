<?php

namespace App\Http\Controllers;

use App\Models\Servei;
use Illuminate\Http\Request;

class ServeiController extends Controller
{
    public function index()
    {
        $serveis = Servei::all();
        return view('serveis.index', compact('serveis'));
    }

    public function create()
    {
        return view('serveis.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'Nom' => 'required|string|max:255',
        'Cognom' => 'required|string|max:255',
        'Telefon' => 'required|string|max:15',
        'Correu' => 'required|email|unique:clients|max:255',
        'Adreça' => 'required|string|max:255',
        'DNI' => 'required|string|max:10|unique:clients', 
    ]);

    $client = Client::create($request->all());
    return redirect()->route('clients.show', $client);
}


    public function show(Servei $servei)
    {
        return view('serveis.show', compact('servei'));
    }

    public function edit(Servei $servei)
    {
        return view('serveis.edit', compact('servei'));
    }

    public function update(Request $request, Client $client)
{
    $request->validate([
        'Nom' => 'required|string|max:255',
        'Cognom' => 'required|string|max:255',
        'Telefon' => 'required|string|max:15',
        'Correu' => 'required|email|max:255|unique:clients,Correu,' . $client->id,
        'Adreça' => 'required|string|max:255',
        'DNI' => 'required|string|max:10|unique:clients,DNI,' . $client->id, 
    ]);

    $client->update($request->all());
    return redirect()->route('clients.show', $client);
}

    public function destroy(Servei $servei)
    {
        $servei->delete();
        return redirect()->route('serveis.index');
    }
}
