<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
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

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
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

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
