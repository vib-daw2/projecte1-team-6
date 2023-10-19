@extends('layouts.app')

@section('content')
    <h1>Editar Treballador</h1>
    <form action="{{ route('treballadors.update', $treballador) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nom">Nom:</label>
        <input type="text" name="Nom" id="nom" value="{{ $treballador->Nom }}">

        <label for="cognom">Cognom:</label>
        <input type="text" name="Cognom" id="cognom" value="{{ $treballador->Cognom }}">

        <label for="adreca">Adreça:</label>
        <input type="text" name="Adreça" id="adreca" value="{{ $treballador->Adreça }}">

        <label for="correu">Correu:</label>
        <input type="text" name="Correu" id="correu" value="{{ $treballador->Correu }}">

        <label for="telefon">Telèfon:</label>
        <input type="text" name="Telefon" id="telefon" value="{{ $treballador->Telefon }}">

        <label for="dni">DNI:</label>
        <input type="text" name="DNI" id="dni" value="{{ $treballador->DNI }}">

        <label for="dataNaixement">Data de Naixement:</label>
        <input type="text" name="DataNaixement" id="dataNaixement" value="{{ $treballador->DataNaixement }}">

        <label for="usuari">Usuari:</label>
        <input type="text" name="usuari" id="usuari" value="{{ $treballador->usuari }}">

        <label for="contrasenya">Contrasenya:</label>
        <input type="text" name="contrasenya" id="contrasenya" value="{{ $treballador->contrasenya }}">

        <label for="serveiID">Servei ID:</label>
        <input type="text" name="ServeiID" id="serveiID" value="{{ $treballador->ServeiID }}">

        <button type="submit">Guardar Canvis</button>
    </form>
@endsection
