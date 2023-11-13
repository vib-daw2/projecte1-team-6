@extends('layouts.app')

@section('content')
    <h1>Edita Client</h1>
    <form action="{{ route('clients.update', ['client' => $client->ID]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nom">Nom:</label>
        <input type="text" name="Nom" id="nom" value="{{ $client->Nom }}">

        <label for="cognom">Cognom:</label>
        <input type="text" name="Cognom" id="cognom" value="{{ $client->Cognom }}">

        <label for="telefon">Telefon:</label>
        <input type="text" name="Telefon" id="telefon" value="{{ $client->Telefon }}">

        <label for="correu">Correu:</label>
        <input type="email" name="Correu" id="correu" value="{{ $client->Correu }}">

        <label for="adreça">Adreça:</label>
        <input type="text" name="Adreça" id="adreça" value="{{ $client->Adreça }}">

        <label for="dni">DNI:</label>
        <input type="text" name="DNI" id="dni" value="{{ $client->DNI }}">

        <button type="submit">Guardar Cambis</button>
    </form>
@endsection
