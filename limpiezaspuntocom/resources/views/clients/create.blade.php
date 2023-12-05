@extends('layouts.app')

@section('content')
    <h1>Create Client</h1>
    <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="Nom" id="nom">
        <label for="cognom">Cognom:</label>
        <input type="text" name="Cognom" id="cognom">
        
        <label for="telefon">Telefon:</label>
        <input type="text" name="Telefon" id="telefon">
        
        <label for="correu">Correu:</label>
        <input type="text" name="Correu" id="correu">
        
        <label for="adreca">Adreça:</label>
        <input type="text" name="Adreça" id="adreca">
        
        <label for="dni">DNI:</label>
        <input type="text" name="DNI" id="dni">

        <button type="submit">Enviar</button>
    </form>
@endsection

