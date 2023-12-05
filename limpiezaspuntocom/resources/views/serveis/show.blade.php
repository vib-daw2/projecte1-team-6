@extends('layouts.app')

@section('content')
    <h1>Detalls del Servei</h1>
    <p>ID: {{ $servei->ID }}</p>
    <p>Data Inici: {{ $servei->DataInici }}</p>
    <p>Data Fi: {{ $servei->DataFi }}</p>
    <p>Tipus de Servei: {{ $servei->TipusDeServei }}</p>
    <p>Client ID: {{ $servei->ClientID }}</p>
    <a href="{{ route('serveis.edit', ['servei' => $servei->ID]) }}">Editar</a>
    <form action="{{ route('serveis.destroy', ['servei' => $servei->ID]) }}" method="post" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
