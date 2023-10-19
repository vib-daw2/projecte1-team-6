@extends('layouts.app')

@section('content')
    <h1>Editar Servei</h1>
    <form action="{{ route('serveis.update', ['servei' => $servei->ID]) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="dataInici">Data Inici:</label>
        <input type="text" name="DataInici" id="dataInici" value="{{ $servei->DataInici }}">
        
        <label for="dataFi">Data Fi:</label>
        <input type="text" name="DataFi" id="dataFi" value="{{ $servei->DataFi }}">

        <label for="tipusDeServei">Tipus de Servei:</label>
        <input type="text" name="TipusDeServei" id="tipusDeServei" value="{{ $servei->TipusDeServei }}">

        <label for="clientID">Client ID:</label>
        <input type="text" name="ClientID" id="clientID" value="{{ $servei->ClientID }}">
        
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
