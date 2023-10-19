@extends('layouts.app')

@section('content')
    <h1>Afegir Servei</h1>
    <form action="{{ route('serveis.store') }}" method="post">
        @csrf
        <label for="dataInici">Data Inici:</label>
        <input type="text" name="DataInici" id="dataInici">
        
        <label for="dataFi">Data Fi:</label>
        <input type="text" name="DataFi" id="dataFi">

        <label for="tipusDeServei">Tipus de Servei:</label>
        <input type="text" name="TipusDeServei" id="tipusDeServei">

        <label for="clientID">Client ID:</label>
        <input type="text" name="ClientID" id="clientID">
        
        <button type="submit">Guardar</button>
    </form>
@endsection
