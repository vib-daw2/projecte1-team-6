@extends('layouts.app')

@section('content')
    <h1>Serveis</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data Inici</th>
                <th>Data Fi</th>
                <th>Tipus de Servei</th>
                <th>Client ID</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serveis as $servei)
                <tr>
                    <td>{{ $servei->ID }}</td>
                    <td>{{ $servei->DataInici }}</td>
                    <td>{{ $servei->DataFi }}</td>
                    <td>{{ $servei->TipusDeServei }}</td>
                    <td>{{ $servei->ClientID }}</td>
                    <td>
                        <a href="{{ route('serveis.show', ['servei' => $servei->ID]) }}">Mostrar</a>
                        <a href="{{ route('serveis.edit', ['servei' => $servei->ID]) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
            {{ $clients->links() }}
        </tbody>
    </table>
@endsection
