<?php

namespace App\Http\Controllers;

use App\Models\Treballador;
use Illuminate\Http\Request;

class TreballadorController extends Controller
{
    public function index()
    {
        $treballadors = Treballador::all();
        return view('treballadors.index', compact('treballadors'));
    }

    public function create()
    {
        return view('treballadors.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'Nom' => 'required|string|max:255',
        'Cognom' => 'required|string|max:255',
        'Adreça' => 'required|string|max:255',
        'Correu' => 'required|email|max:255',
        'Telefon' => 'required|string|max:15',
        'DNI' => 'required|string|max:20|unique:treballadors,DNI',
        'DataNaixement' => 'required|date',
        'usuari' => 'required|string|max:255|unique:treballadors,usuari',
        'contrasenya' => 'required|string|min:6',
        'ServeiID' => 'required|exists:serveis,ID'
    ]);

    $treballador = Treballador::create($request->all());
    return redirect()->route('treballadors.show', $treballador);
}

    public function show(Treballador $treballador)
    {
        return view('treballadors.show', compact('treballador'));
    }

    public function edit(Treballador $treballador)
    {
        return view('treballadors.edit', compact('treballador'));
    }

    public function update(Request $request, Treballador $treballador)
{
    $request->validate([
        'Nom' => 'required|string|max:255',
        'Cognom' => 'required|string|max:255',
        'Adreça' => 'required|string|max:255',
        'Correu' => 'required|email|max:255',
        'Telefon' => 'required|string|max:15',
        'DNI' => 'required|string|max:20|unique:treballadors,DNI,' . $treballador->id,
        'DataNaixement' => 'required|date',
        'usuari' => 'required|string|max:255|unique:treballadors,usuari,' . $treballador->id,
        'contrasenya' => 'required|string|min:6',
        'ServeiID' => 'required|exists:serveis,ID'
    ]);

    $treballador->update($request->all());
    return redirect()->route('treballadors.show', $treballador);
}
    public function destroy(Treballador $treballador)
    {
        $treballador->delete();
        return redirect()->route('treballadors.index');
    }
}
