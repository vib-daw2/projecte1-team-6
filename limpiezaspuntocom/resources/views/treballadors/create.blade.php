@extends('layouts.app')

@section('content')
    <h1>Afegir Treballador</h1>
    <form action="{{ route('treballadors.store') }}" method="post">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="Nom" id="nom">

        <label for="cognom">Cognom:</label>
        <input type="text" name="Cognom" id="cognom">

        <label for="adreca">Adreça:</label>
        <input type="text" name="Adreça" id="adreca">

        <label for="correu">Correu:</label>
        <input type="text" name="Correu" id="correu">

        <label for="telefon">Telefon:</label>
        <input type="text" name="Telefon" id="telefon">

        <label for="dni">DNI:</label>
        <input type="text" name="DNI" id="dni">

        <label for="dataNaixement">Data Naixement:</label>
        <input type="date" name="DataNaixement" id="dataNaixement">

        <label for="usuari">Usuari:</label>
        <input type="text" name="usuari" id="usuari">

        <label for="contrasenya">Contrasenya:</label>
        <input type="password" name="contrasenya" id="contrasenya">

        <button type="submit">Guardar</button>
    </form>
@endsection
