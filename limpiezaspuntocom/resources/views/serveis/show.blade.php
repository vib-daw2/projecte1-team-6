@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalls del Servei</h1>
        <ul>
            <li><strong>ID:</strong> {{ $servei->ID }}</li>
            <li><strong>Data Inici:</strong> {{ $servei->DataInici }}</li>
            <li><strong>Data Fi:</strong> {{ $servei->DataFi }}</li>
            <li><strong>Tipus de Servei:</strong> {{ $servei->TipusDeServei }}</li>
            <li><strong>Client ID:</strong> {{ $servei->ClientID }}</li>
        </ul>
        <a href="{{ route('serveis.edit', $servei) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('serveis.destroy', $servei) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
